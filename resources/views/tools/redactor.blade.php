@extends('layouts.app') @section('content')
<div class="content resume">
    <div class="title">
        <div class="title_inner">Free HR Tool: <span style="color:#0856c1;">CV Redactor AI</span></div>
    </div>
    
    <div class="row">
        <div class="col col-d-12 col-t-12 col-m-12">
            <p style="margin-bottom: 20px; font-size: 16px;">
                وفر ساعات من العمل اليدوي. قم برفع السير الذاتية هنا وسيقوم الذكاء الاصطناعي بطمس أرقام الهواتف والإيميلات آلياً، واستخراج البيانات في ملف إكسيل.
            </p>
            
            <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                <iframe 
                    src="https://cv-redactor.streamlit.app//?embed=true" 
                    width="100%" 
                    height="800px" 
                    frameborder="0"
                    style="border: none; background: white;">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection