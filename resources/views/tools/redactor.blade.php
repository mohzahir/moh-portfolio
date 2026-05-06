@extends('layouts.app')

@section('content')
<div class="card-inner active" id="redactor-card">
    <div class="card-wrap">
        
        <div class="content resume">
            <div class="title">
                <span class="first-word">أداة </span> الذكاء الاصطناعي 
                <span style="color:#0856c1; font-weight:bold; margin-right:5px;">CV Redactor</span>
            </div>
            
            <div class="row">
                <div class="col col-d-12 col-t-12 col-m-12">
                    <div class="text-box" style="padding: 20px 0;">
                        <p style="font-size: 16px; color: #555;">
                            وفر ساعات من العمل اليدوي. قم برفع السير الذاتية هنا وسيقوم الذكاء الاصطناعي بطمس أرقام الهواتف والإيميلات آلياً، واستخراج البيانات في ملف إكسيل.
                        </p>
                    </div>
                    
                    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee;">
                        <iframe 
                            src="https://cv-redactor.streamlit.app//?embed=true" 
                            width="100%" 
                            height="750px" 
                            frameborder="0"
                            style="border: none; background: transparent;">
                        </iframe>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>
@endsection