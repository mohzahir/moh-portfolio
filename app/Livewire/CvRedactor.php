<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;

class CvRedactor extends Component
{
    use WithFileUploads;

    public $cvFiles = [];
    public $errorMessage = '';

    public function processFiles()
    {
        // التحقق الجديد: تأكد أن المصفوفة ليست فارغة أولاً، ثم تحقق من نوع الملفات
        $this->validate([
            'cvFiles'   => 'required|array|min:1', 
            'cvFiles.*' => 'mimes:pdf,docx|max:10240',
        ], [
            'cvFiles.required' => 'يرجى تحديد ملف واحد على الأقل قبل الضغط على طمس البيانات.',
            'cvFiles.*.mimes' => 'عذراً، الأداة تدعم ملفات PDF و Word فقط.'
        ]);

        $this->errorMessage = '';

        try {
            // تجهيز الطلب لإرسال الملفات (Multipart) مع تحديد وقت انتظار 60 ثانية
            $request = Http::timeout(60)->asMultipart();

            foreach ($this->cvFiles as $file) {
                $request->attach(
                    'files', file_get_contents($file->getRealPath()), $file->getClientOriginalName()
                );
            }

            // هام: استبدل الرابط أدناه بالرابط الذي حصلت عليه من Vercel
            $apiUrl = 'https://cv-redactor-api.vercel.app/redact';
            
            $response = $request->post($apiUrl);

            if ($response->successful()) {
                // إفراغ الملفات بعد النجاح
                $this->cvFiles = []; 
                
                // بدء تحميل ملف الـ ZIP مباشرة للمستخدم
                $fileName = 'Processed_CVs_' . date('Y-m-d_H-i') . '.zip';
                return response()->streamDownload(function () use ($response) {
                    echo $response->body();
                }, $fileName);

            } else {
                $errorData = $response->json();
                $this->errorMessage = 'حدث خطأ من الخادم: ' . ($errorData['error'] ?? 'خطأ غير معروف');
            }
        } catch (\Exception $e) {
            $this->errorMessage = 'تعذر الاتصال بخادم الذكاء الاصطناعي، يرجى المحاولة لاحقاً.';
        }
    }

    public function render()
    {
        return view('livewire.cv-redactor');
    }
}