<div style="padding: 20px; border: 1px dashed #e5e5e5; border-radius: 10px; background: #fcfcfc; text-align: center;">
    
    @if($errorMessage)
        <div style="background: #ffebee; color: #d32f2f; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
            <i class="fas fa-exclamation-circle"></i> {{ $errorMessage }}
        </div>
    @endif

    <form wire:submit.prevent="processFiles">
        
        <div x-data="{ isUploading: false, progress: 0 }"
             x-on:livewire-upload-start="isUploading = true"
             x-on:livewire-upload-finish="isUploading = false"
             x-on:livewire-upload-error="isUploading = false"
             x-on:livewire-upload-progress="progress = $event.detail.progress">

            <div style="margin-bottom: 20px;">
                <label for="file-upload" style="display: block; cursor: pointer; padding: 40px 20px; border: 2px dashed #0856c1; border-radius: 8px; background: #fff; transition: all 0.3s;">
                    <i class="fas fa-cloud-upload-alt" style="font-size: 40px; color: #0856c1; margin-bottom: 15px;"></i>
                    <h4 style="margin: 0; color: #333;">اضغط هنا لرفع السير الذاتية</h4>
                    <p style="color: #777; font-size: 13px; margin-top: 5px;">(يدعم PDF و Word. يمكنك تحديد أكثر من ملف)</p>
                    <input id="file-upload" type="file" wire:model="cvFiles" multiple style="display: none;" accept=".pdf,.docx">
                </label>
            </div>

            <div x-show="isUploading" style="margin-bottom: 20px; text-align: right; direction: rtl; display: none;">
                <div style="margin-bottom: 8px; color: #0856c1; font-weight: bold; font-size: 14px; display: flex; justify-content: space-between;">
                    <span><i class="fas fa-spinner fa-spin"></i> جاري قراءة وتجهيز الملفات...</span>
                    <span x-text="progress + '%'"></span>
                </div>
                <div style="width: 100%; background-color: #e0e0e0; border-radius: 5px; height: 8px; overflow: hidden;">
                    <div style="height: 100%; background-color: #0856c1; transition: width 0.2s ease-in-out;" x-bind:style="'width: ' + progress + '%'"></div>
                </div>
            </div>
            
        </div> <div wire:loading.remove wire:target="processFiles">
            @if(count($cvFiles) > 0)
                <div style="margin-bottom: 20px; color: #25d366; font-weight: bold; font-size: 15px;">
                    <i class="fas fa-check-circle"></i> ممتاز! تم تحديد {{ count($cvFiles) }} ملف(ات) وجاهزة للطمس.
                </div>
            @endif
        </div>

        <button type="submit" 
                style="background: #0856c1; color: #fff; border: none; padding: 12px 30px; font-size: 16px; border-radius: 5px; cursor: pointer; font-weight: bold; transition: all 0.3s;"
                wire:loading.attr="disabled"
                @if(count($cvFiles) === 0) disabled style="background: #ccc; cursor: not-allowed;" @endif>
            
            <span wire:loading.remove wire:target="processFiles">
                <i class="fas fa-magic"></i> طمس البيانات وتحميل الملفات
            </span>
            
            <span wire:loading wire:target="processFiles">
                <i class="fas fa-spinner fa-spin"></i> الذكاء الاصطناعي يقوم بالمعالجة الآن...
            </span>
        </button>
    </form>
</div>