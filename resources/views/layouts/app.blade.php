<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>{{ $title ?? 'محمد زاهر - مطور ويب ومسوق رقمي' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Portfolio of Mohammed Zahir - Software Engineer and Digital Marketer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    
    <link rel="stylesheet" href="{{ asset('css/basic.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/new-skin/new-skin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/rtl-new.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/template-colors/blue.css') }}" />

    <style>
        /* ------------------------------------------------ */
        /* تطبيق خط Cairo على كامل الموقع                   */
        /* ------------------------------------------------ */
        body, h1, h2, h3, h4, h5, h6, p, a, span, div, button, input, textarea, label {
            font-family: 'Cairo', sans-serif !important;
        }

        /* ------------------------------------------------ */
        /* إصلاح استثناءات مكتبة الأيقونات بالكامل          */
        /* ------------------------------------------------ */
        /* للأيقونات العادية (Solid & Regular) */
        i, .fa, .fas, .far, .ion, [class^="ion-"] {
            font-family: "Font Awesome 5 Free", "Ionicons", sans-serif !important;
        }

        /* أيقونات السوشيال ميديا والشركات (Brands) مثل Github و Linkedin */
        .fab, span.fab {
            font-family: "Font Awesome 5 Brands" !important;
            font-weight: 400 !important;
        }
        
        /* تحسينات بسيطة لمظهر الخط العربي */
        p, li, span, div {
            line-height: 1.8 !important; /* زيادة المسافة بين السطور لراحة العين */
        }
        .title, .name {
            font-weight: 700 !important; /* جعل العناوين بخط عريض وواضح */
        }
    </style>

    @livewireStyles
</head>

<body>
    <div class="page new-skin">
        
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="background gradient">
            <ul class="bg-bubbles">
                <li></li><li></li><li></li><li></li><li></li>
                <li></li><li></li><li></li><li></li><li></li>
            </ul>
        </div>

        <div class="container opened" data-animation-in="fadeInRight" data-animation-out="fadeOutRight">

            <header class="header">
                <div class="top-menu">
                    <ul>
                        <li class="active">
                            <a href="#about-card">
                                <span class="icon ion-person"></span>
                                <span class="link">حول</span>
                            </a>
                        </li>
                        <li>
                            <a href="#resume-card">
                                <span class="icon ion-android-list"></span>
                                <span class="link">سيرتي</span>
                            </a>
                        </li>
                        <li>
                            <a href="#works-card">
                                <span class="icon ion-paintbrush"></span>
                                <span class="link">أعمالي</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contacts-card">
                                <span class="icon ion-at"></span>
                                <span class="link">اتصل</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/hr-tools/cv-redactor') }}">
                                <span class="icon fas fa-robot"></span>
                                <span class="link" style="color: #ff5722;">AI Tools 🔥</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </header>

            @isset($slot)
                {{ $slot }}
            @endisset

            @yield('content')

        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

    @livewireScripts
</body>
</html>