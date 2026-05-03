<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Home extends Component
{
    public $services = [
        [
            'icon' => 'ion ion-code',
            'title' => 'تطوير الويب',
            'description' => 'موقع إلكتروني حديث وجاهز باستخدام Laravel و Livewire يساعدك في الوصول إلى أهدافك.'
        ],
        [
            'icon' => 'ion ion-speakerphone',
            'title' => 'أتمتة التسويق',
            'description' => 'بناء وتطوير مسارات الـ CRM وأدوات B2B لتوليد العملاء بشكل تلقائي.'
        ],
        [
            'icon' => 'ion ion-ios-game-controller-b',
            'title' => 'استخراج البيانات',
            'description' => 'تطوير أدوات مخصصة بـ Python لجمع البيانات وأتمتة العمليات اليومية.'
        ]
    ];

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.home');
    }
}