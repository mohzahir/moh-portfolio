<div style="display: contents;">
    
    <style>
        /* إصلاح صورة التنصيص المفقودة في قسم الإشادات */
        .revs-item::before {
            background-image: none !important; /* إيقاف طلب الصورة المفقودة */
            content: '\f10d' !important; /* أيقونة تنصيص من FontAwesome */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            font-size: 40px;
            color: rgba(109, 118, 204, 0.2); /* لون أخضر شفاف */
            position: absolute;
            top: 10px;
            right: 20px;
        }
        /* تنسيق كروت معرض الأعمال */
        .portfolio-items .box-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .portfolio-items .box-item .image {
            position: relative;
            display: block;
        }

        .portfolio-items .box-item .image img {
            width: 100%;
            height: auto;
            transition: all 0.5s ease;
        }

        /* تأثير التظليل والمعلومات عند التمرير */
        .portfolio-items .box-item .image .info {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(109, 118, 204, 0.9); /* لون التيمبليت الأخضر */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        .portfolio-items .box-item:hover .image .info {
            opacity: 1;
        }

        .portfolio-items .box-item .info .name {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .portfolio-items .box-item .info .category {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* تنسيق محتوى دراسة الحالة (Popup) */
        .case-study-content {
            background: #fff;
            padding: 40px;
            max-width: 800px;
            margin: 20px auto;
            border-radius: 10px;
            direction: rtl;
            text-align: right;
        }
        .case-study-content h3 { color: #0856c1; margin-bottom: 20px; font-weight: 800; }
        .case-study-content .metric-box {
            background: #f9f9f9;
            padding: 15px;
            border-right: 4px solid #0856c1;
            margin-bottom: 20px;
            font-weight: 700;
        }
        /* ------------------------------------------------ */
        /* الهوية البصرية الزرقاء والأغلفة الديناميكية      */
        /* ------------------------------------------------ */
        :root {
            --main-color: #0856c1;
            --main-color-transparent: rgba(8, 86, 193, 0.15);
            --main-color-hover: rgba(8, 86, 193, 0.9);
        }
        
        /* تحديث عناصر التيمبليت الأساسية للون الأزرق */
        .info-list ul li strong, .owl-dots .owl-dot.active span { background-color: var(--main-color) !important; }
        .resume-items .resume-item .image, .custom-revs-item .user .img { border-color: var(--main-color) !important; }
        .certs-carousel .cert-item:hover { box-shadow: inset 0 0 0 4px #fff, inset 0 0 0 5px var(--main-color), 0 10px 25px rgba(0,0,0,0.08) !important; }
        .certs-carousel .cert-item hr { background: linear-gradient(to right, transparent, var(--main-color-transparent), transparent) !important; }
        .certs-carousel .cert-item .cert-issuer i, .case-study-content h3 { color: var(--main-color) !important; }
        .case-study-content .metric-box { border-right-color: var(--main-color) !important; }

        /* تصميم الغلاف الديناميكي للمشاريع (بديل الصور) */
        .tech-cover {
            background: linear-gradient(135deg, var(--main-color) 0%, #042d66 100%);
            height: 220px;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .tech-cover i.main-icon {
            font-size: 50px;
            margin-bottom: 15px;
            opacity: 0.9;
        }
        
        .tech-cover .project-title {
            font-size: 18px;
            font-weight: 800;
            text-align: center;
            padding: 0 15px;
            z-index: 2;
        }
        
        /* علامة لغة البرمجة في الزاوية */
        .tech-cover .lang-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255,255,255,0.2);
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            backdrop-filter: blur(5px);
        }

        /* خلفية مائية للأيقونة لتعطي شكل احترافي */
        .tech-cover i.bg-icon {
            position: absolute;
            bottom: -20px;
            left: -20px;
            font-size: 150px;
            opacity: 0.05;
            z-index: 1;
        }
        /* تنسيق زر الواتساب العائم */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 30px;
            right: 30px; /* يمكنك تغييرها إلى left: 30px إذا أردت الزر على اليسار */
            background-color: #25d366; /* لون الواتساب الرسمي */
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 35px;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .whatsapp-float:hover {
            background-color: #1ebe57;
            color: #fff;
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.6);
        }

        /* إخفاء أيقونة الواتساب الأصلية (التي تظهر في الشاشات الصغيرة أحيانا) */
        .whatsapp-float:focus, .whatsapp-float:active {
            color: #fff;
        }
    </style>
    <div class="card-started" id="home-card">
        <div class="profile">
            <div class="slide" style="background-image: url('{{ asset('images/bg.png') }}');"></div>
            
            <div class="image">
                <img src="{{ asset('images/profile.png') }}" alt="محمد زاهر" />
            </div>

            <div class="title">محمد زاهر</div>
            <div class="subtitle subtitle-typed">
                <div class="typing-title">
                    <p>مهندس برمجيات (Full-Stack)</p>
                    <p>خبير أتمتة تسويق (B2B)</p>
                    <p>مهندس نمو (Growth Engineer)</p>
                </div>
            </div>

            <div class="social">
                <a target="_blank" href="https://linkedin.com/in/mohammed-zahir" title="LinkedIn"><span class="fab fa-linkedin"></span></a>
                <a target="_blank" href="https://github.com/mohammed-zahir" title="GitHub"><span class="fab fa-github"></span></a>
                <a target="_blank" href="https://twitter.com/" title="Twitter"><span class="fab fa-twitter"></span></a>
            </div>
            
            <div class="lnks">
                <a href="{{ asset('certs/CV_2026-05-03_Mohammed_Zahir') }}" class="lnk has-popup-pdf" title="السيرة الذاتية - محمد زاهر">
                    <span class="text">عرض السيرة الذاتية</span>
                    <span class="ion ion-document-text"></span>
                </a>
                <a href="#contacts-card" class="lnk discover">
                    <span class="text">تواصل معي الآن</span>
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="card-inner animated active" id="about-card">
        <div class="card-wrap">
            
            <div class="content about">
                <div class="title">من أنا وكيف أساعدك؟</div>
                <div class="row">
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="text-box">
                            <p>
                                أهلاً بك، أنا <strong>محمد زاهر</strong>. لا أعتبر نفسي مجرد مبرمج يكتب الأكواد، ولا مسوقاً يطلق الحملات فقط؛ أنا <strong>"مهندس نمو" (Growth Engineer)</strong>.
                            </p>
                            <p>
                                بخبرة تتجاوز 5 سنوات، أدمج بين القوة البرمجية (Laravel & Livewire) والذكاء التسويقي (B2B Automation & CRM) لبناء أنظمة رقمية تعمل كآلات مبيعات متكاملة. إذا كنت تبحث عن تقليل العمل التشغيلي اليدوي، وزيادة تدفق العملاء المحتملين (Leads) عبر أتمتة ذكية، فأنت في المكان الصحيح.
                            </p>
                            <p>
                                <em>"أنا أبني لك المنصة، وأصمم لك المحرك الذي يجلب لها العملاء."</em>
                            </p>
                        </div>
                    </div>
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="info-list">
                            <ul>
                                <li><strong>مقر الإقامة . . . . .</strong> السودان / الإمارات</li>
                                <li><strong>نمط العمل . . . . .</strong> متاح للعمل الحر وعن بُعد</li>
                                <li><strong>البريد الإلكتروني . .</strong> <a href="mailto:moh.zahir.mz@gmail.com">moh.zahir.mz@gmail.com</a></li>
                                <li><strong>الهاتف المباشر . . .</strong> <span dir="ltr">+249 117 017 444</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="content quote">
                <div class="title">فلسفتي في هندسة النمو</div>
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="revs-item" style="padding-bottom: 30px;">
                            <div class="text" style="font-size: 18px; line-height: 1.8; font-style: italic; color: #555;">
                                <div>
                                    "التسويق يجذب الانتباه، لكن الأنظمة التقنية القوية هي ما يحول هذا الانتباه إلى أرباح فعلية. لا يكفي أن تمتلك موقعاً جميلاً؛ يجب أن يكون موقعك <strong>آلة مبيعات مؤتمتة</strong>. كمبرمج ومسوق في آنٍ واحد، أنا أسد الفجوة بين التكنولوجيا وإدارة الأعمال لأضاعف نتائجك."
                                </div>
                            </div>
                            <div class="user" style="margin-top: 20px;">
                                <div class="img">
                                    <img src="/images/profile.png" alt="محمد زاهر" style="border-radius: 50%; width: 60px; height: 60px; object-fit: cover;" />
                                </div>
                                <div class="info">
                                    <div class="name" style="font-weight: bold; color: #333;">محمد زاهر</div>
                                    <div class="company" style="color: #4285f4;">مهندس نمو وأتمتة (Growth Engineer)</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="content services">
                <div class="title">لماذا تعمل معي؟ (الميزة التنافسية)</div>
                <div class="row service-items border-line-v">
                    
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-merge"></span></div>
                            <div class="name"><span>عقلية المبرمج + المسوق</span></div>
                            <p>الأنظمة التي أبنيها ليست فقط قوية تقنياً، بل مصممة أساساً لتحسين تجربة المستخدم (UX) ورفع معدلات التحويل (Conversion Rates) لتخدم أهدافك البيعية.</p>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-android-options"></span></div>
                            <div class="name"><span>أتمتة العمليات المزعجة</span></div>
                            <p>لا وقت لتضييعه في المهام المتكررة. أستخدم مهاراتي في Python و APIs لربط أنظمة الـ CRM وبناء سكربتات تسحب البيانات وتؤتمت عملياتك بالكامل.</p>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-stats-bars"></span></div>
                            <div class="name"><span>قرارات مبنية على البيانات</span></div>
                            <p>لا مجال للتخمين. أربط منصتك بأدوات التحليل المتقدمة (Google Analytics & Tag Manager) لنفهم سلوك العميل ونحسن الأداء بشكل مستمر (Data-Driven).</p>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-ios-bolt"></span></div>
                            <div class="name"><span>تسليم سريع وجودة عالية</span></div>
                            <p>بفضل إتقاني لإطار عمل Laravel وتقنيات Livewire، أضمن لك بناء أنظمة (SPA) فائقة السرعة، آمنة، وقابلة للتوسع (Scalable) مع نمو أعمالك.</p>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>

            <div class="content resume">
                <div class="title">كيف أعمل؟ (منهجية التنفيذ)</div>
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="resume-items">
                            
                            <div class="resume-item border-line-h active">
                                <div class="date">الخطوة 1</div>
                                <div class="name">الاستكشاف والتحليل (Discovery)</div>
                                <p>نجتمع لفهم أهداف عملك، تحليل جمهورك المستهدف، وتحديد الثغرات في عملياتك الحالية التي يمكن أتمتتها أو تحسينها برمجياً.</p>
                            </div>
                            
                            <div class="resume-item border-line-h">
                                <div class="date">الخطوة 2</div>
                                <div class="name">هندسة الحلول (Architecture)</div>
                                <p>تصميم بنية قواعد البيانات (Database Schema)، واختيار التقنيات المناسبة، ورسم مسارات التسويق (Marketing Funnels) قبل كتابة أي سطر كود.</p>
                            </div>

                            <div class="resume-item border-line-h">
                                <div class="date">الخطوة 3</div>
                                <div class="name">التطوير والربط (Development)</div>
                                <p>بناء المنصة بـ Laravel/Livewire، وربطها بأدوات الـ CRM (مثل HubSpot) وإعداد أنظمة التتبع وتوليد العملاء (Lead Generation).</p>
                            </div>

                            <div class="resume-item">
                                <div class="date">الخطوة 4</div>
                                <div class="name">الإطلاق والتحسين المستمر (Launch & Scale)</div>
                                <p>إطلاق النظام، مراقبة أداء الحملات والتحويلات، وتحسين الأكواد واستراتيجيات الـ SEO بناءً على أرقام الأداء الحقيقية.</p>
                            </div>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="content fuct">
                <div class="title">الأثر بالأرقام</div>
                <div class="row fuct-items">
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="fuct-item">
                            <div class="icon"><span class="ion ion-arrow-graph-up-right"></span></div>
                            <div class="name">+5 سنوات خبرة مدمجة</div>
                        </div>
                    </div>
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="fuct-item">
                            <div class="icon"><span class="ion ion-network"></span></div>
                            <div class="name">بناء أنظمة توظيف دولية</div>
                        </div>
                    </div>
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="fuct-item">
                            <div class="icon"><span class="ion ion-ios-people"></span></div>
                            <div class="name">أتمتة حملات B2B ناجحة</div>
                        </div>
                    </div>
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="fuct-item">
                            <div class="icon"><span class="ion ion-code-working"></span></div>
                            <div class="name">أنظمة Laravel سريعة وآمنة</div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="content clients">
                <div class="title">شركاء النجاح وعملائي</div>
                
                <style>
                    /* توحيد حاوية الشعار وتوسيط المحتوى بداخلها */
                    .client-item .image a {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        height: 110px; /* ارتفاع ثابت لجميع الخانات */
                        padding: 15px;
                        text-decoration: none;
                    }
                    
                    /* ضبط حجم الصورة ومظهرها الافتراضي */
                    .client-item .image img {
                        max-height: 65px; /* منع الصور من أن تكون أطول من اللازم */
                        max-width: 100%;
                        width: auto;
                        object-fit: contain; /* الحفاظ على أبعاد الصورة بدون تشويه */
                        filter: grayscale(100%) opacity(60%); /* مظهر رمادي وأنيق */
                        transition: all 0.4s ease-in-out; /* حركة سلسة */
                    }
                    
                    /* التأثير عند مرور الماوس (Hover) */
                    .client-item .image a:hover img {
                        filter: grayscale(0%) opacity(100%); /* عودة الألوان الأصلية */
                        transform: scale(1.1); /* تكبير بسيط يلفت الانتباه */
                    }
                </style>

                <div class="row client-items">
                    
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="client-item">
                            <div class="image">
                                <a target="_blank" href="#">
                                    <img decoding="async" src="https://mohzahir.free.nf/wp-content/uploads/2025/10/hirehub-184x121.png" alt="HireHub Job Agency" />
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="client-item">
                            <div class="image">
                                <a target="_blank" href="#">
                                    <img decoding="async" src="https://mohzahir.free.nf/wp-content/uploads/2025/10/alqash-184x184.png" alt="Alqash" />
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="client-item">
                            <div class="image">
                                <a target="_blank" href="#">
                                    <img decoding="async" src="https://mohzahir.free.nf/wp-content/uploads/2025/10/sindawa12-184x39.png" alt="Sindawa Trading Company" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="client-item">
                            <div class="image">
                                <a target="_blank" href="#">
                                    <img decoding="async" src="https://mohzahir.free.nf/wp-content/uploads/2025/10/smartnode-184x89.png" alt="Smart Node" />
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="clear"></div>
                </div>
            </div>

        </div>
    </div>

    <style>
        /* 1. إصلاح صور السيرة الذاتية (Timeline Images) */
        .resume-items.line-timeline {
            position: relative;
        }
        .resume-items.line-timeline::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0; /* الخط الزمني على اليمين */
            bottom: 0;
            width: 1px;
            background: rgba(0,0,0,0.1);
        }
        .resume-items .resume-item {
            position: relative;
            padding-right: 40px !important; /* مساحة للصورة في اليمين */
            padding-left: 0 !important;
            margin-bottom: 30px;
        }
        .resume-items .resume-item::before {
            display: none !important; /* إخفاء النقطة الافتراضية للتيمبليت */
        }
        .resume-items .resume-item .image {
            position: absolute;
            right: -22px; /* توسيط الصورة على الخط */
            top: 0;
            width: 44px;
            height: 44px;
            background: #fff;
            border-radius: 50%;
            border: 2px solid #4285f4; /* لون التيمبليت الأخضر */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            z-index: 2;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .resume-items .resume-item .image img {
            max-width: 65%;
            max-height: 65%;
            object-fit: contain;
        }

        /* 2. إصلاح قسم الإشادات (Testimonials) */
        .revs-item {
            background: #fcfcfc;
            padding: 30px;
            border-radius: 8px;
            border: 1px solid rgba(0,0,0,0.05);
        }
        .revs-item .text {
            font-size: 15px;
            line-height: 1.8;
            font-style: italic;
            color: #555;
            margin-bottom: 20px;
        }
        .revs-item .user {
            display: flex;
            align-items: center;
        }
        .revs-item .user .img {
            width: 60px !important;
            height: 60px !important;
            border-radius: 50%;
            margin-left: 15px; /* مسافة لدعم اليمين لليسار */
            flex-shrink: 0;
            overflow: hidden;
        }
        .revs-item .user .img img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            border-radius: 50%;
        }
        .revs-item .user .info .name {
            font-weight: 700;
            color: #333;
            font-size: 16px;
        }
        .revs-item .user .info .company {
            color: #999;
            font-size: 13px;
        }
        /* 4. إصلاح وتوسيط الأرقام داخل دوائر المهارات 100% */
        .skills-list.circles .progress {
            position: relative !important;
            /* الحفاظ على العرض والارتفاع الافتراضي للدائرة من التيمبليت */
        }
        
        .skills-list.circles .progress span {
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
            height: 100% !important;
            transform: none !important; /* إلغاء أي إزاحة سابقة تسبب الانحراف */
            text-align: center;
        }
    </style>

    <div class="card-inner" id="resume-card">
        <div class="card-wrap">
            
            <div class="content resume">
                <div class="title">السيرة المهنية والتعليمية</div>
                <div class="row">
                    
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="resume-title border-line-h">
                            <div class="icon"><i class="fas fa-briefcase"></i></div>
                            <div class="name">الخبرة المهنية</div>
                        </div>
                        
                        <div class="resume-items line-timeline">
                            
                            <div class="resume-item border-line-h active">
                                <div class="image">
                                    <img decoding="async" src="http://mohzahir.free.nf/wp-content/uploads/2025/10/hirehub.png" alt="Hirehub" onerror="this.src='{{ asset('images/default-company.png') }}'" />
                                </div>
                                <div class="date">2022 - الآن</div>
                                <div class="name">مسوق تقني ومطور رئيسي (Technical Marketer & Lead Dev)</div>
                                <div class="company">شركة Hirehub</div>
                                <div class="single-post-text">
                                    <ul>
                                        <li>هندسة وبناء نظام CRM ومحرك توظيف متكامل (PHP/Laravel) لأتمتة دورة التوظيف لإدارة بيانات أكثر من 800 طبيب واستشاري.</li>
                                        <li>برمجة النظام لأتمتة سياسات وعقود التوظيف بحيث تتم فوترة الرسوم للعملاء والشركات تلقائياً بدلاً من المرشحين.</li>
                                        <li>تطوير أداة ذكية باستخدام بايثون (Python NLP) لطمس بيانات الاتصال في السير الذاتية لحماية الخصوصية.</li>
                                        <li>بناء قمع تسويقي (Inbound Funnel) مؤتمت عبر منصة HubSpot لجذب العملاء بتكلفة صفرية.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume-item border-line-h">
                                <div class="image">
                                    <img decoding="async" src="http://mohzahir.free.nf/wp-content/uploads/2025/10/alqash.png" alt="Alqash" onerror="this.src='{{ asset('images/default-company.png') }}'" />
                                </div>
                                <div class="date">2024 - 2025</div>
                                <div class="name">مسوق تقني ومطور تطبيقات</div>
                                <div class="company">شركة القش للتجارة والخدمات</div>
                                <div class="single-post-text">
                                    <ul>
                                        <li>بناء وتطوير تطبيق الجوال الخاص بالمنصة باستخدام (Dart/Flutter) وربطه بقواعد بيانات PHP الخلفية لضمان كفاءة العمليات.</li>
                                        <li>تنفيذ استراتيجيات تسويق رقمي متعددة القنوات (SEO/SEM) بالتوازي مع التحديثات التقنية لتعزيز المبيعات وزيادة معدل التحويل.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume-item border-line-h">
                                <div class="image">
                                    <img decoding="async" src="http://mohzahir.free.nf/wp-content/uploads/2025/10/sindawa12.png" alt="Sindawa" onerror="this.src='{{ asset('images/default-company.png') }}'" />
                                </div>
                                <div class="date">2022 - 2025</div>
                                <div class="name">مسوق تقني وأخصائي SEO</div>
                                <div class="company">شركة سنداوة التجارية</div>
                                <div class="single-post-text">
                                    <ul>
                                        <li>إجراء عمليات تحسين تقنية عميقة للكود (Technical SEO)، مما أدى إلى زيادة الزيارات العضوية بنسبة 40%.</li>
                                        <li>تطوير تطبيق "بائعين سنداوة" لتمكين التجار من إدارة متاجرهم وتتبع الأرباح.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume-item border-line-h">
                                <div class="image">
                                    <img decoding="async" src="https://placehold.co/100x100/0856c1/ffffff?text=SN" alt="Smart Node" />
                                </div>
                                <div class="date">2021 - 2022</div>
                                <div class="name">مطور ويب وتطبيقات شامل</div>
                                <div class="company">شركة Smart Node</div>
                                <div class="single-post-text">
                                    <ul>
                                        <li>صيانة وإدارة قواعد بيانات SQL وتشخيص الأعطال البرمجية والشبكية المعقدة.</li>
                                        <li>تقديم دعم تقني متقدم للمنظومات أثمر عن حل 90% من المشكلات التقنية من الاتصال الأول.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume-item border-line-h">
                                <div class="image">
                                    <img decoding="async" src="https://placehold.co/100x100/0856c1/ffffff?text=MSC" alt="MSC" />
                                </div>
                                <div class="date">2021 - 2021</div>
                                <div class="name">مطور لارافل (Full-Stack Laravel Developer)</div>
                                <div class="company">Multi Software Company (MSC)</div>
                                <div class="single-post-text">
                                    <ul>
                                        <li>برمجة لوحة تحكم متكاملة وتطوير واجهات برمجة تطبيقات (RESTful APIs) آمنة باستخدام Laravel Sanctum لتغذية تطبيقات الجوال الخاصة بالشركة.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="resume-item border-line-h">
                                <div class="image">
                                    <img decoding="async" src="https://placehold.co/100x100/0856c1/ffffff?text=ARB" alt="ARB" />
                                </div>
                                <div class="date">2019 - 2019</div>
                                <div class="name">متدرب تقني ومراقب أنظمة</div>
                                <div class="company">بنك الثروة الحيوانية</div>
                                <div class="single-post-text">
                                    <ul>
                                        <li>مراقبة كفاءة الأنظمة المصرفية لمنع الانقطاعات (System Drops) وتقديم الدعم التقني المباشر لحل أعطال النظام.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="resume-title border-line-h">
                            <div class="icon"><i class="fas fa-university"></i></div>
                            <div class="name">التعليم والشهادات</div>
                        </div>
                        
                        <div class="resume-items line-timeline">
                            
                            <div class="resume-item border-line-h">
                                <div class="image">
                                    <img decoding="async" src="http://mohzahir.free.nf/wp-content/uploads/2025/10/aau-scaled.png" alt="جامعة الزعيم الازهري" onerror="this.src='{{ asset('images/default-company.png') }}'" />
                                </div>
                                <div class="date">2014 - 2018</div>
                                <div class="name">بكالوريوس تقنية المعلومات</div>
                                <div class="company">جامعة الزعيم الأزهري</div>
                                <div class="single-post-text">
                                    <p>تأسيس صلب في هندسة البرمجيات، قواعد البيانات، وتحليل النظم لدعم استراتيجيات النمو التقني.</p>
                                </div>
                                <a href="https://beshley.com/import/ryancv/marketing/uploads/2022/07/certificate.jpeg" target="_blank" class="lnk">
                                    <span class="text">الشهادة</span><i class="fas fa-angle-left" style="margin-right: 5px;"></i>
                                </a>
                            </div>

                            <div class="resume-item border-line-h">
                                <div class="image">
                                    <img decoding="async" src="https://placehold.co/100x100/0856c1/ffffff?text=NT" alt="Newton Training" />
                                </div>
                                <div class="date">2020</div>
                                <div class="name">تطوير الويب وتطبيقات الجوال الشاملة</div>
                                <div class="company">Newton Training Center</div>
                                <div class="single-post-text">
                                    <p>إتقان تقنيات الويب الحديثة (PHP, MySQL, AngularJS, Ionic, Bootstrap) وتطوير منصات التجارة الإلكترونية.</p>
                                </div>
                            </div>

                            <div class="resume-item border-line-h">
                                <div class="image">
                                    <img decoding="async" src="http://mohzahir.free.nf/wp-content/uploads/2025/10/hubspot.png" alt="HubSpot" onerror="this.src='{{ asset('images/default-company.png') }}'" />
                                </div>
                                <div class="date">2025</div>
                                <div class="name">شهادة التسويق الداخلي (Inbound Marketing)</div>
                                <div class="company">HubSpot Academy</div>
                                <div class="single-post-text">
                                    <p>احتراف استراتيجيات بناء مسارات العملاء (Buyer Personas)، وتحسين المحتوى وأتمتة مؤشرات الأداء (KPIs).</p>
                                </div>
                                <a href="http://mohzahir.free.nf/wp-content/uploads/2025/10/Coursera-WP9CLPT23AQ6-2-1.pdf" target="_blank" class="lnk">
                                    <span class="text">الشهادة</span><i class="fas fa-angle-left" style="margin-right: 5px;"></i>
                                </a>
                            </div>

                            <div class="resume-item border-line-h">
                                <div class="image">
                                    <img decoding="async" src="http://mohzahir.free.nf/wp-content/uploads/2025/10/google.png" alt="Google" onerror="this.src='{{ asset('images/default-company.png') }}'" />
                                </div>
                                <div class="date">2023</div>
                                <div class="name">أساسيات التسويق الرقمي والتجارة الإلكترونية</div>
                                <div class="company">Google (Coursera)</div>
                                <div class="single-post-text">
                                    <p>بناء استراتيجيات قمع المبيعات (Marketing Funnel) وتحليل البيانات التقنية للعملاء.</p>
                                </div>
                                <a href="http://mohzahir.free.nf/wp-content/uploads/2025/10/Coursera_RJDGLHDRYZA3.pdf" target="_blank" class="lnk">
                                    <span class="text">الشهادة</span><i class="fas fa-angle-left" style="margin-right: 5px;"></i>
                                </a>
                            </div>

                            <div class="resume-item border-line-h">
                                <div class="image">
                                    <img decoding="async" src="http://mohzahir.free.nf/wp-content/uploads/2025/10/google.png" alt="Google" onerror="this.src='{{ asset('images/default-company.png') }}'" />
                                </div>
                                <div class="date">2023</div>
                                <div class="name">جذب وتفاعل العملاء (Attract and Engage)</div>
                                <div class="company">Google (Coursera)</div>
                                <div class="single-post-text">
                                    <p>تحسين محركات البحث (SEO) والتسويق عبر محركات البحث (SEM) لتعزيز الوعي بالعلامة التجارية وزيادة التحويلات.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>

            <div class="content skills">
                <div class="title">مهاراتي</div>
                <div class="row">
                    
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="skills-list circles">
                            <div class="skill-title border-line-h">
                                <div class="icon"><i class="fas fa-bullhorn"></i></div>
                                <div class="name">التسويق الالكتروني</div>
                            </div>
                            <ul>
                                <li> 
                                    <div class="name">HubSpot CRM & Automation</div>
                                    <div class="progress p90"><span>90%</span></div>
                                </li>
                                <li> 
                                    <div class="name">Marketing Operations</div>
                                    <div class="progress p75"><span>75%</span></div>
                                </li>
                                <li> 
                                    <div class="name">Lead Generation Strategies</div>
                                    <div class="progress p85"><span>85%</span></div>
                                </li>
                                <li> 
                                    <div class="name">Web Development (HTML/CSS/WP)</div>
                                    <div class="progress p95"><span>95%</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="skills-list list">
                            <div class="skill-title border-line-h">
                                <div class="icon"><i class="fas fa-list"></i></div>
                                <div class="name">المعارف</div>
                            </div>
                            <ul>
                                <li><div class="name">استضافة المواقع وتركيبها</div></li>
                                <li><div class="name">تطوير مواقع الإنترنت</div></li>
                                <li><div class="name">تجاوب الموقع مع جميع الأجهزة</div></li>
                                <li><div class="name">كتابة المحتوى</div></li>
                                <li><div class="name">التسويق بالذكاء الاصطناعي</div></li>
                                <li><div class="name">التخطيط الاستراتيجي</div></li>
                                <li><div class="name">إدارة المشاريع</div></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

                <div class="row" style="margin-top: 40px;">
                    
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="skills-list">
                            <div class="skill-title border-line-h">
                                <div class="icon"><i class="fas fa-paint-brush"></i></div>
                                <div class="name">مهارات اضافية</div>
                            </div>
                            <ul>
                                <li class="border-line-h"> 
                                    <div class="name">التصميم</div>
                                    <div class="progress"><div class="percentage" style="width:90%;"></div></div>
                                </li>
                                <li class="border-line-h"> 
                                    <div class="name">صناعة المحتوى</div>
                                    <div class="progress"><div class="percentage" style="width:65%;"></div></div>
                                </li>
                                <li class="border-line-h"> 
                                    <div class="name">ادارة المشاريع</div>
                                    <div class="progress"><div class="percentage" style="width:75%;"></div></div>
                                </li>
                                <li>
                                    <div class="name">تحليل البيانات</div>
                                    <div class="progress"><div class="percentage" style="width:85%;"></div></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="skills-list dotted">
                            <div class="skill-title border-line-h">
                                <div class="icon"><i class="fas fa-flag"></i></div>
                                <div class="name">اللغات</div>
                            </div>
                            <ul>
                                <li class="border-line-h"> 
                                    <div class="name">العربية</div>
                                    <div class="progress"><div class="percentage" style="width:100%;"></div></div>
                                </li>
                                <li> 
                                    <div class="name">الإنجليزية</div>
                                    <div class="progress"><div class="percentage" style="width:90%;"></div></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>

            <style>
                /* تنسيق صندوق الإشادة */
                .custom-revs-item {
                    background-color: #fcfcfc;
                    padding: 30px;
                    border-radius: 8px;
                    border: 1px solid rgba(0,0,0,0.05);
                    text-align: right; /* ضمان المحاذاة لليمين */
                    direction: rtl;
                }
                .custom-revs-item .text {
                    font-size: 15px;
                    line-height: 1.8;
                    font-style: italic;
                    color: #555;
                    margin-bottom: 20px;
                }
                /* تنسيق منطقة معلومات الشخص */
                .custom-revs-item .user {
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                }
                .custom-revs-item .user .img {
                    width: 60px;
                    height: 60px;
                    border-radius: 50%;
                    margin-left: 15px; /* المسافة من اليسار لأن اللغة عربية */
                    flex-shrink: 0;
                    overflow: hidden;
                    border: 2px solid #4285f4; /* إطار أخضر خفيف يتماشى مع التيمبليت */
                }
                .custom-revs-item .user .img img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
                .custom-revs-item .user .info .name {
                    font-weight: 700;
                    color: #333;
                    font-size: 16px;
                }
                .custom-revs-item .user .info .company {
                    color: #999;
                    font-size: 13px;
                    margin-top: 3px;
                }
                /* تعديل شكل أزرار التقليب (Dots) */
                .owl-dots {
                    text-align: center;
                    margin-top: 20px;
                }
                .owl-dots .owl-dot span {
                    width: 10px;
                    height: 10px;
                    background: #ccc !important;
                    border-radius: 50%;
                    display: inline-block;
                    margin: 0 5px;
                    transition: 0.3s;
                }
                .owl-dots .owl-dot.active span {
                    background: #4285f4 !important; /* اللون الأخضر عند التفعيل */
                    width: 20px;
                    border-radius: 5px;
                }
            </style>

            <div class="content testimonials" wire:ignore>
                <div class="title">الإشادات (Testimonials)</div>
                <div class="row testimonial-items">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        
                        <div class="owl-carousel rtl-testimonials-carousel">
                            
                            <div class="item">
                                <div class="custom-revs-item">
                                    <div class="text">
                                        "محمد زاهر خبير استراتيجي في تسويق المحتوى وتهيئة محركات البحث (SEO). نجح في تحقيق نمو عضوي مستدام وزيادة ملحوظة في ظهور علامتنا التجارية. قدرة فائقة على تحليل نية البحث وتحويلها إلى نتائج."
                                    </div>
                                    <div class="user">
                                        <div class="img">
                                            <img src="https://mohzahir.free.nf/wp-content/uploads/2025/10/802001_man_512x512.png" alt="محمد عمر" />
                                        </div>
                                        <div class="info">
                                            <div class="name">محمد عمر</div>
                                            <div class="company">خبير استراتيجيات رقمية</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="custom-revs-item">
                                    <div class="text">
                                        "إن كفاءة محمد زاهر في إدارة الحملات الإعلانية المدفوعة (PPC) استثنائية. يضمن أعلى عائد استثمار (ROI) من خلال التحليل الدقيق وتحسين الاستهداف المستمر. محترف يجمع بين الإبداع والكفاءة المالية."
                                    </div>
                                    <div class="user">
                                        <div class="img">
                                            <img src="https://mohzahir.free.nf/wp-content/uploads/2025/10/802001_man_512x512.png" alt="خالد عبد الله" />
                                        </div>
                                        <div class="info">
                                            <div class="name">خالد عبد الله</div>
                                            <div class="company">مدير حملات إعلانية</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="custom-revs-item">
                                    <div class="text">
                                        "يتمتع محمد زاهر بمهارة فائقة في بناء مجتمعات رقمية نشطة عبر السوشيال ميديا. ساعدنا في تعزيز ولاء العلامة التجارية وتحقيق معدلات تفاعل عالية باستمرار. خبير في التواصل الفعال وإدارة الحضور الرقمي."
                                    </div>
                                    <div class="user">
                                        <div class="img">
                                            <img src="https://mohzahir.free.nf/wp-content/uploads/2025/10/802001_man_512x512.png" alt="عمر عامر" />
                                        </div>
                                        <div class="info">
                                            <div class="name">عمر عامر</div>
                                            <div class="company">متخصص في إدارة المجتمعات الرقمية</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="clear"></div>
                </div>
            </div>  

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // ننتظر قليلاً لضمان تحميل مكتبة jQuery و OwlCarousel
                    setTimeout(function() {
                        if($('.rtl-testimonials-carousel').length) {
                            $('.rtl-testimonials-carousel').owlCarousel({
                                rtl: true, /* السطر السحري: دعم اليمين لليسار */
                                margin: 30,
                                nav: false,
                                dots: true,
                                loop: true,
                                autoplay: true,
                                autoplayTimeout: 6000, /* التبديل كل 6 ثواني */
                                autoplayHoverPause: true,
                                responsive: {
                                    0: { items: 1 },    /* في الجوال: يعرض إشادة واحدة */
                                    768: { items: 1 },  /* في التابلت: يعرض إشادة واحدة */
                                    1024: { items: 2 }  /* في اللابتوب والكمبيوتر: يعرض إشادتين بجوار بعض */
                                }
                            });
                        }
                    }, 500);
                });
            </script>

            <style>
                /* تصميم كرت الشهادة ذو الطابع الرسمي */
                .certs-carousel .cert-item {
                    position: relative;
                    padding: 25px 20px;
                    text-align: center;
                    /* خلفية بيضاء مع تدرج خفيف جداً يميل للرمادي الفاتح */
                    background: linear-gradient(135deg, #ffffff 0%, #fcfcfc 100%);
                    border-radius: 8px;
                    /* الإطار المزدوج: إطار خارجي رمادي، وإطار داخلي أخضر يعطي شكل البرواز */
                    border: 1px solid #e5e5e5;
                    box-shadow: inset 0 0 0 4px #fff, inset 0 0 0 5px rgba(115, 109, 204, 0.3); 
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    direction: rtl;
                    height: 100%;
                    overflow: hidden;
                }

                .certs-carousel .cert-item:hover {
                    box-shadow: inset 0 0 0 4px #fff, inset 0 0 0 5px #6d73cc, 0 10px 25px rgba(0,0,0,0.08);
                    transform: translateY(-6px);
                }

                /* الختم الذهبي في الزاوية */
                .certs-carousel .cert-item .cert-seal {
                    position: absolute;
                    top: 15px;
                    right: 15px;
                    color: #f1c40f; /* لون ذهبي */
                    font-size: 22px;
                    opacity: 0.85;
                    z-index: 1;
                }

                /* صورة الشهادة (تبدو كوثيقة ورقية) */
                .certs-carousel .cert-item img {
                    height: 110px !important;
                    width: auto !important;
                    max-width: 100%;
                    margin: 10px auto 20px auto !important;
                    display: block;
                    object-fit: contain;
                    /* ظل للصورة لتبدو كورقة حقيقية بارزة */
                    filter: drop-shadow(0px 4px 6px rgba(0,0,0,0.1));
                    background: #fff;
                    padding: 5px;
                    border: 1px solid #eee;
                }

                /* الخط الفاصل الأنيق */
                .certs-carousel .cert-item hr {
                    border: none;
                    height: 1px;
                    background: linear-gradient(to right, transparent, rgba(109, 134, 204, 0.5), transparent);
                    margin: 15px 0;
                }

                .certs-carousel .cert-item .cert-name {
                    font-weight: 800;
                    font-size: 15px;
                    color: #222;
                    margin-bottom: 5px;
                    display: block;
                    line-height: 1.4;
                }

                .certs-carousel .cert-item .cert-issuer {
                    font-size: 12px;
                    color: #666;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }
                
                .certs-carousel .cert-item .cert-issuer i {
                    color: #6d6fcc;
                    margin-left: 4px;
                }

                /* الشبكة الاحتياطية */
                .certs-carousel:not(.owl-loaded) {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 20px;
                }
                .certs-carousel:not(.owl-loaded) .item {
                    flex: 1 1 calc(33.333% - 20px);
                    min-width: 250px;
                }
            </style>

            <div class="content certifications" wire:ignore>
                <div class="title">الشهادات والاعتمادات المهنية</div>
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        
                        <div class="owl-carousel certs-carousel">
                            
                            <div class="item">
                                <div class="cert-item">
                                    <div class="cert-seal"><i class="fas fa-award"></i></div>
                                    
                                    <a href="{{ asset('certs/Coursera_RJDGLHDRYZA3 (1).pdf') }}" class="image-wrap has-popup-pdf" title="شهادة أساسيات التسويق الرقمي والتجارة الإلكترونية من Google">
                                        <img decoding="async" src="{{ asset('certs/Coursera_RJDGLHDRYZA3 (1)_page-0001.jpg') }}" alt="Google Digital Marketing Foundations" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0iI2UwZTBlMCI+PHBhdGggZD0iTTE5IDNINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMlY1YzAtMS4xLS45LTItMi0yeiBNMTQgMTdIN3YtMmg3djJ6IE0xNyAxM0g3di0yaDEwdjJ6IE0xNyA5SDdWN2gxMHYyeiIvPjwvc3ZnPg==';" />
                                        <span class="zoom-icon"><i class="fas fa-search-plus"></i></span>
                                    </a>
                                    
                                    <hr> <span class="cert-name">أساسيات التسويق الرقمي والتجارة الإلكترونية</span>
                                    <span class="cert-issuer"><i class="fas fa-check-circle"></i> Google (Coursera)</span>
                                </div>
                            </div>

                            <div class="item">
                                <div class="cert-item">
                                    <div class="cert-seal"><i class="fas fa-award"></i></div>
                                    
                                    <a href="{{ asset('certs/Coursera WP9CLPT23AQ6 (3).pdf') }}" class="image-wrap has-popup-pdf" title="شهادة جذب وتفاعل العملاء من Google">
                                        <img decoding="async" src="{{ asset('certs/Coursera WP9CLPT23AQ6 (3)_page-0001.jpg') }}" alt="Google Engage Customers" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0iI2UwZTBlMCI+PHBhdGggZD0iTTE5IDNINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMlY1YzAtMS4xLS45LTItMi0yeiBNMTQgMTdIN3YtMmg3djJ6IE0xNyAxM0g3di0yaDEwdjJ6IE0xNyA5SDdWN2gxMHYyeiIvPjwvc3ZnPg==';" />
                                        <span class="zoom-icon"><i class="fas fa-search-plus"></i></span>
                                    </a>
                                    
                                    <hr>
                                    
                                    <span class="cert-name">جذب وتفاعل العملاء (Attract & Engage)</span>
                                    <span class="cert-issuer"><i class="fas fa-check-circle"></i> Google (Coursera)</span>
                                </div>
                            </div>

                            <div class="item">
                                <div class="cert-item">
                                    <div class="cert-seal"><i class="fas fa-award"></i></div>
                                    
                                    <a href="{{ asset('certs/hubspot_certificate.pdf') }}" class="image-wrap has-popup-pdf" title="شهادة التسويق الداخلي من HubSpot">
                                        <img decoding="async" src="{{ asset('images/hubspot.png') }}" alt="Inbound Marketing" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0iI2UwZTBlMCI+PHBhdGggZD0iTTE5IDNINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMlY1YzAtMS4xLS45LTItMi0yeiBNMTQgMTdIN3YtMmg3djJ6IE0xNyAxM0g3di0yaDEwdjJ6IE0xNyA5SDdWN2gxMHYyeiIvPjwvc3ZnPg==';" />
                                        <span class="zoom-icon"><i class="fas fa-search-plus"></i></span>
                                    </a>
                                    
                                    <hr>
                                    
                                    <span class="cert-name">التسويق الداخلي (Inbound)</span>
                                    <span class="cert-issuer"><i class="fas fa-check-circle"></i> HubSpot Academy</span>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="cert-item">
                                    <div class="cert-seal"><i class="fas fa-graduation-cap"></i></div> 
                                    <a href="{{ asset('certs/university_degree.pdf') }}" class="image-wrap has-popup-pdf" title="بكالوريوس تقنية المعلومات">
                                        <img decoding="async" src="{{ asset('images/aau-scaled.png') }}" alt="IT Bachelor" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0iI2UwZTBlMCI+PHBhdGggZD0iTTE5IDNINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMlY1YzAtMS4xLS45LTItMi0yeiBNMTQgMTdIN3YtMmg3djJ6IE0xNyAxM0g3di0yaDEwdjJ6IE0xNyA5SDdWN2gxMHYyeiIvPjwvc3ZnPg==';" />
                                        <span class="zoom-icon"><i class="fas fa-search-plus"></i></span>
                                    </a>
                                    
                                    <hr>
                                    
                                    <span class="cert-name">بكالوريوس تقنية المعلومات</span>
                                    <span class="cert-issuer"><i class="fas fa-check-circle"></i> جامعة الزعيم الأزهري</span>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    
                    function forceInitCertsCarousel() {
                        // التحقق من أن jQuery ومكتبة owlCarousel تم تحميلهم فعلياً
                        if (window.jQuery && $.fn.owlCarousel) {
                            var $carousel = $('.certs-carousel');
                            
                            // إذا لم يتم تشغيلها مسبقاً
                            if ($carousel.length && !$carousel.hasClass('owl-loaded')) {
                                $carousel.owlCarousel({
                                    rtl: true,
                                    margin: 20,
                                    nav: false,
                                    dots: true,
                                    loop: true,
                                    autoplay: true,
                                    autoplayTimeout: 4000,
                                    responsive: {
                                        0: { items: 1 },
                                        768: { items: 2 },
                                        1024: { items: 3 }
                                    }
                                });
                            }
                        } else {
                            // إذا لم تكن المكتبات جاهزة، حاول مرة أخرى بعد 100 جزء من الثانية
                            setTimeout(forceInitCertsCarousel, 100);
                        }
                    }

                    // تشغيل مبدئي
                    forceInitCertsCarousel();

                    // ربط التشغيل بتحديثات Livewire لضمان استمراريته
                    document.addEventListener('livewire:navigated', forceInitCertsCarousel); // لـ Livewire v3
                    document.addEventListener('livewire:load', forceInitCertsCarousel); // لـ Livewire v2
                });
            </script>

        </div>
    </div>

    <div class="card-inner" id="works-card">
        <div class="card-wrap">
            <div class="content works">
                <div class="title">معرض الأعمال ومستودعات GitHub</div>
                
                <div class="filter-menu filter-button-group">
                    <div class="f_btn active"><label><input type="radio" name="fl_radio" value="grid-item" />الكل</label></div>
                    <div class="f_btn"><label><input type="radio" name="fl_radio" value="f-systems" />أنظمة وبوتات</label></div>
                    <div class="f_btn"><label><input type="radio" name="fl_radio" value="f-web" />تطبيقات ويب</label></div>
                    <div class="f_btn"><label><input type="radio" name="fl_radio" value="f-mobile" />تطبيقات جوال</label></div>
                </div>

                <div class="row portfolio-items">

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-systems">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-binance" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Laravel / Blade</span>
                                        <i class="fab fa-bitcoin main-icon"></i>
                                        <span class="project-title">Binance Trading Bot</span>
                                        <i class="fab fa-laravel bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-binance" class="case-study-content mfp-hide">
                            <h3>Binance Bot - Laravel</h3>
                            <div class="metric-box">بوت تداول آلي متصل بـ Binance API.</div>
                            <p>نظام خلفي مبني بـ Laravel يتصل بواجهات برمجة بينانس لتنفيذ استراتيجيات التداول الآلي، مراقبة الأسعار، وإدارة المحافظ الرقمية بكفاءة عالية.</p>
                            <a href="https://github.com/mohzahir/binance-bot-laravel" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-systems">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-p2p" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">PHP</span>
                                        <i class="fas fa-exchange-alt main-icon"></i>
                                        <span class="project-title">P2P Arbitrage System</span>
                                        <i class="fab fa-php bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-p2p" class="case-study-content mfp-hide">
                            <h3>P2P Arbitrage</h3>
                            <div class="metric-box">خوارزمية لتتبع واستغلال فروقات الأسعار في أسواق الـ P2P.</div>
                            <p>سكريبت متقدم يراقب أسواق العملات الرقمية لحساب هوامش الربح وإيجاد فرص الـ Arbitrage بين المنصات المختلفة لحظياً.</p>
                            <a href="https://github.com/mohzahir/P2P-Arbitrage" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-systems">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-redactor" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Python</span>
                                        <i class="fas fa-file-pdf main-icon"></i>
                                        <span class="project-title">CV Redactor App</span>
                                        <i class="fab fa-python bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-redactor" class="case-study-content mfp-hide">
                            <h3>CV Redactor (معالجة السير الذاتية)</h3>
                            <div class="metric-box">أداة ذكية لطمس وحماية البيانات الشخصية.</div>
                            <p>تطبيق بايثون لمعالجة ملفات السير الذاتية آلياً، يقوم باكتشاف أرقام الهواتف والبريد الإلكتروني وإخفائها لحماية بيانات المرشحين.</p>
                            <a href="https://github.com/mohzahir/cv-redactor-app" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-systems">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-recruitment-engine" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">PHP</span>
                                        <i class="fas fa-cogs main-icon"></i>
                                        <span class="project-title">Recruitment Engine</span>
                                        <i class="fas fa-server bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-recruitment-engine" class="case-study-content mfp-hide">
                            <h3>Recruitment Engine</h3>
                            <div class="metric-box">محرك خلفي لفرز ومطابقة بيانات المتقدمين للوظائف.</div>
                            <p>نظام Backend قوي لأتمتة عمليات التوظيف، يتضمن خوارزميات للبحث السريع ومطابقة السير الذاتية مع الشواغر الوظيفية.</p>
                            <a href="https://github.com/mohzahir/recruitment-engine" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-systems">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-graphql" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Node.js / GraphQL</span>
                                        <i class="fas fa-project-diagram main-icon"></i>
                                        <span class="project-title">GraphQL & Sequelize API</span>
                                        <i class="fab fa-node-js bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-graphql" class="case-study-content mfp-hide">
                            <h3>Node.js GraphQL API</h3>
                            <div class="metric-box">واجهات برمجة تطبيقات متقدمة باستخدام GraphQL.</div>
                            <p>مشروع لتطوير وتجربة واجهات برمجية مرنة (APIs) باستخدام Node.js و Sequelize للتعامل مع قواعد البيانات بكفاءة عالية.</p>
                            <a href="https://github.com/mohzahir/nodejs_sequelizer_graphql_test" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-systems">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-mailer" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">PHP</span>
                                        <i class="fas fa-envelope-open-text main-icon"></i>
                                        <span class="project-title">Bulk Mailer System</span>
                                        <i class="fas fa-paper-plane bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-mailer" class="case-study-content mfp-hide">
                            <h3>نظام إرسال البريد الجماعي (Mailer)</h3>
                            <div class="metric-box">نظام خلفي لإدارة وإرسال الحملات البريدية.</div>
                            <p>سكريبت لأتمتة إرسال رسائل البريد الإلكتروني المخصصة وإدارة قوائم المشتركين للحملات التسويقية.</p>
                            <a href="https://github.com/mohzahir/mailer" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>


                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-hirehub-system" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Laravel / Blade</span>
                                        <i class="fas fa-users-cog main-icon"></i>
                                        <span class="project-title">HireHub CRM Suite</span>
                                        <i class="fab fa-laravel bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-hirehub-system" class="case-study-content mfp-hide">
                            <h3>HireHub Suite (النظام الشامل)</h3>
                            <div class="metric-box">نظام إدارة علاقات التوظيف (CRM) الأساسي والمحلي (SD).</div>
                            <p>مجموعة من المستودعات (HireHub System & HireHub SD) لبناء منصة ويب متكاملة لإدارة دورة التوظيف، تتبع حالات المرشحين، والتكامل مع أدوات التسويق.</p>
                            <a href="https://github.com/mohzahir/hirehub-system" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود الأساسي</a>
                            <a href="https://github.com/mohzahir/hirehub-sd" target="_blank" class="btn" style="background:#333; color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none; margin-right:10px;"><i class="fab fa-github"></i> نسخة SD</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-alqash-web" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">PHP / Web</span>
                                        <i class="fas fa-shopping-cart main-icon"></i>
                                        <span class="project-title">Alqash E-commerce</span>
                                        <i class="fas fa-store bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-alqash-web" class="case-study-content mfp-hide">
                            <h3>منصة القش للتجارة الإلكترونية</h3>
                            <div class="metric-box">تطوير المتجر الإلكتروني الأساسي (Frontend) والواجهات الخلفية (Main).</div>
                            <p>مستودعات منصة القش (Alqash & Alqash Main) لإنشاء متجر إلكتروني شامل يدعم إدارة المنتجات، عربة التسوق، ومعالجة الطلبات.</p>
                            <a href="https://github.com/mohzahir/alqash" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-wasil" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Laravel / Blade</span>
                                        <i class="fas fa-truck-loading main-icon"></i>
                                        <span class="project-title">Wasil Logistics System</span>
                                        <i class="fas fa-route bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-wasil" class="case-study-content mfp-hide">
                            <h3>نظام واصل (Wasil) اللوجستي</h3>
                            <div class="metric-box">منصة لإدارة عمليات التوصيل والخدمات اللوجستية.</div>
                            <p>تطبيق ويب متكامل يربط بين المتاجر والسائقين، مع واجهة تتبع للطلبات وإدارة مسارات التوصيل بكفاءة.</p>
                            <a href="https://github.com/mohzahir/wasil" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-yemenbus" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Laravel / Blade</span>
                                        <i class="fas fa-bus main-icon"></i>
                                        <span class="project-title">YemenBus Booking</span>
                                        <i class="fas fa-ticket-alt bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-yemenbus" class="case-study-content mfp-hide">
                            <h3>YemenBus (نظام حجز التذاكر)</h3>
                            <div class="metric-box">منصة ويب لإدارة حجوزات الحافلات ورحلات السفر.</div>
                            <p>نظام لإدارة مسارات الرحلات، المقاعد المتاحة، إصدار التذاكر الإلكترونية، وإدارة أسطول النقل.</p>
                            <a href="https://github.com/mohzahir/yemenBus" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-semipharma" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">PHP / Web</span>
                                        <i class="fas fa-clinic-medical main-icon"></i>
                                        <span class="project-title">Semipharma & POS</span>
                                        <i class="fas fa-pills bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-semipharma" class="case-study-content mfp-hide">
                            <h3>Semipharma & Semipos</h3>
                            <div class="metric-box">نظام إدارة صيدليات ونقاط بيع متكامل.</div>
                            <p>مجموعة أنظمة متخصصة للقطاع الطبي تشمل إدارة مخزون الأدوية وتواريخ الصلاحية (Semipharma)، ونظام كاشير مخصص للصيدليات (Semipos).</p>
                            <a href="https://github.com/mohzahir/semipharma" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض Semipharma</a>
                            <a href="https://github.com/mohzahir/semipos" target="_blank" class="btn" style="background:#333; color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none; margin-right:10px;"><i class="fab fa-github"></i> عرض Semipos</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-food-pos" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Laravel / Blade</span>
                                        <i class="fas fa-hamburger main-icon"></i>
                                        <span class="project-title">Food POS System</span>
                                        <i class="fas fa-cash-register bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-food-pos" class="case-study-content mfp-hide">
                            <h3>Food POS (كاشير المطاعم)</h3>
                            <div class="metric-box">نظام نقاط البيع مخصص لقطاع المطاعم.</div>
                            <p>تطبيق ويب لإدارة نقاط البيع، تتبع الفواتير، إدارة الطاولات، وإصدار تقارير مبيعات مفصلة للمطاعم والكافيهات.</p>
                            <a href="https://github.com/mohzahir/food-pos" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-bishasilver" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Laravel / Blade</span>
                                        <i class="fas fa-gem main-icon"></i>
                                        <span class="project-title">Bisha Silver E-commerce</span>
                                        <i class="fas fa-shopping-bag bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-bishasilver" class="case-study-content mfp-hide">
                            <h3>Bisha Silver</h3>
                            <div class="metric-box">متجر إلكتروني لبيع المجوهرات والفضيات.</div>
                            <p>منصة تجارة إلكترونية مبنية بـ Laravel، توفر واجهة تسوق أنيقة وإدارة للمنتجات والطلبات الخاصة بالمجوهرات.</p>
                            <a href="https://github.com/mohzahir/bisha_silver" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-jazera" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">PHP</span>
                                        <i class="fas fa-university main-icon"></i>
                                        <span class="project-title">Jazera University Portal</span>
                                        <i class="fas fa-graduation-cap bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-jazera" class="case-study-content mfp-hide">
                            <h3>Jazera UIN Assoc Portal</h3>
                            <div class="metric-box">نظام ويب مخصص للرابطة الجامعية.</div>
                            <p>منصة لإدارة بيانات المنتسبين، الإعلانات، وتنظيم الفعاليات الخاصة برابطة جامعة الجزيرة.</p>
                            <a href="https://github.com/mohzahir/jazera_uin_assoc" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-familytree" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">JavaScript</span>
                                        <i class="fas fa-sitemap main-icon"></i>
                                        <span class="project-title">Interactive Family Tree</span>
                                        <i class="fas fa-leaf bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-familytree" class="case-study-content mfp-hide">
                            <h3>شجرة العائلة التفاعلية</h3>
                            <div class="metric-box">تطبيق ويب لبناء وعرض شجرات العائلة بصرياً.</div>
                            <p>مشروع جافاسكربت يستخدم مكتبات العرض البياني لرسم الهياكل الشجرية للروابط العائلية بشكل ديناميكي وتفاعلي.</p>
                            <a href="https://github.com/mohzahir/family_tree" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>
                    
                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-anime" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">JavaScript</span>
                                        <i class="fas fa-tv main-icon"></i>
                                        <span class="project-title">Anime Series Dashboard</span>
                                        <i class="fas fa-chart-line bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-anime" class="case-study-content mfp-hide">
                            <h3>Anime Series Dashboard</h3>
                            <div class="metric-box">لوحة تحكم تفاعلية لإدارة تطبيقات مشاهدة الأنمي.</div>
                            <p>لوحة تحكم مبنية بتقنيات الـ Front-end الحديثة لإدارة الحلقات، تصنيفات الأنمي، وإحصائيات المشاهدة لتطبيق الموبايل.</p>
                            <a href="https://github.com/mohzahir/anime-series-dashboard" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>


                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-mobile">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-alqash-app" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Dart / Flutter</span>
                                        <i class="fas fa-mobile-alt main-icon"></i>
                                        <span class="project-title">Alqash Mobile App</span>
                                        <i class="fas fa-shopping-cart bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-alqash-app" class="case-study-content mfp-hide">
                            <h3>تطبيق القش (Alqash App)</h3>
                            <div class="metric-box">تطبيق جوال مخصص لخدمات التجارة الإلكترونية.</div>
                            <p>تطبيق جوال مبني بلغة Dart لخدمة منصة القش للتجارة، يتميز بواجهة مستخدم سلسة وربط مباشر مع الـ APIs.</p>
                            <a href="https://github.com/mohzahir/alqash-app" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-mobile">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-sindawa-seller" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Dart / Flutter</span>
                                        <i class="fas fa-store main-icon"></i>
                                        <span class="project-title">Sindawa Seller App</span>
                                        <i class="fas fa-tags bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-sindawa-seller" class="case-study-content mfp-hide">
                            <h3>تطبيق بائعين سنداوة</h3>
                            <div class="metric-box">تطبيق جوال لإدارة المتاجر والبائعين على منصة سنداوة.</div>
                            <p>تطبيق مخصص لتمكين التجار من إضافة منتجاتهم، تتبع الطلبات، ومتابعة الأرباح مباشرة عبر الهاتف.</p>
                            <a href="https://github.com/mohzahir/sindawa_seller_app" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>

                    <div class="col col-d-6 col-t-6 col-m-12 grid-item f-mobile">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-rsport" class="has-popup-media">
                                    <div class="tech-cover">
                                        <span class="lang-badge">Vue.js</span>
                                        <i class="fas fa-running main-icon"></i>
                                        <span class="project-title">RSport Mobile</span>
                                        <i class="fab fa-vuejs bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-rsport" class="case-study-content mfp-hide">
                            <h3>RSport Mobile</h3>
                            <div class="metric-box">واجهة تطبيق جوال رياضي.</div>
                            <p>تطبيق جوال تفاعلي مبني باستخدام إطار عمل Vue.js موجه لعرض الأخبار والمحتوى الرياضي.</p>
                            <a href="https://github.com/mohzahir/rsport-mopile" target="_blank" class="btn" style="background:var(--main-color); color:#fff; padding:10px 20px; border-radius:5px; text-decoration:none;"><i class="fab fa-github"></i> عرض الكود</a>
                        </div>
                    </div>


                    <div class="col col-d-12 col-t-12 col-m-12 grid-item f-web">
                        <div class="box-item">
                            <div class="image">
                                <a href="#case-ui-collection" class="has-popup-media">
                                    <div class="tech-cover" style="height: 150px;">
                                        <span class="lang-badge">HTML / CSS / SCSS</span>
                                        <i class="fas fa-paint-brush main-icon"></i>
                                        <span class="project-title">Front-End UI/UX Collections</span>
                                        <i class="fab fa-html5 bg-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="case-ui-collection" class="case-study-content mfp-hide">
                            <h3>مكتبة واجهات الاستخدام (UI/UX Templates)</h3>
                            <div class="metric-box">مجموعة من القوالب وواجهات المستخدم التي قمت بتطويرها لعدة مشاريع.</div>
                            <p>هذا الكرت يضم أعمالي في تصميم الواجهات باستخدام HTML, CSS, SCSS والتي تركز على تجربة مستخدم سلسة ومتجاوبة:</p>
                            <ul style="line-height:2.5;">
                                <li><strong>Drug Store UI:</strong> واجهة متجر صيدلية إلكترونية (SCSS). <a href="https://github.com/mohzahir/drug_store" target="_blank">عرض الكود</a></li>
                                <li><strong>Jawhara UI:</strong> تصميم واجهة لمتجر جوهرة (CSS). <a href="https://github.com/mohzahir/jawhara" target="_blank">عرض الكود</a></li>
                                <li><strong>HireHub UI / Jecto:</strong> القوالب الأولية لمنصة التوظيف (HTML/CSS). <a href="https://github.com/mohzahir/hirehub-jecto" target="_blank">عرض الكود</a></li>
                                <li><strong>Alpha Bet:</strong> موقع تعريفي (CSS). <a href="https://github.com/mohzahir/alpha_bet_website" target="_blank">عرض الكود</a></li>
                                <li><strong>Personal Website:</strong> قالب الموقع الشخصي القديم. <a href="https://github.com/mohzahir/mohzahir.github.io" target="_blank">عرض الكود</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card-inner contacts" id="contacts-card">
        <div class="card-wrap">
            
            <div class="content contacts">
                <div class="title">دعنا نتحدث حول مشروعك القادم</div>
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="info-list">
                            <ul>
                                <li><strong>النطاق الجغرافي . . . . .</strong> أعمل عالمياً / عن بعد</li>
                                <li><strong>البريد الإلكتروني . . . .</strong> <a href="mailto:moh.zahir.mz@gmail.com" style="color: inherit;">moh.zahir.mz@gmail.com</a></li>
                                <li><strong>هاتف العمل . . . . . . .</strong> <span dir="ltr">+249 117 017 444</span></li>
                                <li><strong>واتساب مباشر . . . . .</strong> <a href="https://wa.me/249117017444" target="_blank" dir="ltr" style="color: #25d366; font-weight: bold;"><i class="fab fa-whatsapp"></i> +249 117 017 444</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            
            <div class="content contacts">
                <div class="title">أوقات العمل وسرعة الرد</div>
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <p style="font-size: 15px; color: #555; line-height: 1.8;">
                            <i class="fas fa-clock" style="color: var(--main-color); margin-left: 5px;"></i> 
                            أحرص دائماً على الرد على جميع الاستفسارات والرسائل خلال <strong>24 ساعة</strong> كحد أقصى. متاح للمكالمات والاجتماعات المجدولة من الأحد إلى الخميس. إذا كان الأمر طارئاً، يفضل التواصل عبر الواتساب للحصول على رد فوري.
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="content contacts">
                <div class="title">أرسل رسالة مباشرة</div>
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="contact_form">
                            <form id="cform" method="POST" action="https://formsubmit.co/moh.zahir.mz@gmail.com">
                                
                                <input type="hidden" name="_subject" value="رسالة جديدة من موقعك الشخصي (بورتفوليو)!">
                                <input type="hidden" name="_captcha" value="false"> <input type="hidden" name="_template" value="table"> <div class="row">
                                    <div class="col col-d-6 col-t-6 col-m-12">
                                        <div class="group-val">
                                            <input type="text" name="name" placeholder="الاسم الكريم / اسم الشركة" required />
                                        </div>
                                    </div>
                                    <div class="col col-d-6 col-t-6 col-m-12">
                                        <div class="group-val">
                                            <input type="email" name="email" placeholder="البريد الإلكتروني للتواصل" required />
                                        </div>
                                    </div>
                                    <div class="col col-d-12 col-t-12 col-m-12">
                                        <div class="group-val">
                                            <textarea name="message" placeholder="حدثني عن تفاصيل مشروعك أو التحدي التقني الذي تواجهه..." rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="align-left">
                                    <button type="submit" class="button" style="border: none; cursor: pointer; background: transparent; padding: 0;">
                                        <span class="text">إرسال الرسالة</span>
                                        <span class="arrow"></span>
                                    </button>
                                </div>
                            </form>
                            <div class="alert-success" style="display: none;">
                                <p>شكراً لتواصلك. تم استلام رسالتك وسأقوم بالرد عليك في أقرب وقت ممكن.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            function initPdfPopup() {
                // التحقق من وجود jQuery ومكتبة magnificPopup أولاً
                if (window.jQuery && $.fn.magnificPopup) {
                    $('.has-popup-pdf').magnificPopup({
                        type: 'iframe',
                        mainClass: 'mfp-fade',
                        removalDelay: 160,
                        preloader: false,
                        fixedContentPos: false,
                        iframe: {
                            markup: '<div class="mfp-iframe-scaler">'+
                                    '<div class="mfp-close"></div>'+
                                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                                    '</div>',
                            patterns: {
                                // تجاوز إعدادات الفيديو لفتح أي رابط PDF مباشرة
                                all: {
                                    index: '',
                                    id: function(url) { return url; },
                                    src: '%id%'
                                }
                            }
                        }
                    });
                } else {
                    // إذا لم يتم تحميل jQuery بعد، حاول مرة أخرى بعد 100 جزء من الثانية
                    setTimeout(initPdfPopup, 100);
                }
            }

            // تشغيل الدالة
            initPdfPopup();

            // إعادة تشغيلها عند تصفح صفحات Livewire
            document.addEventListener('livewire:navigated', initPdfPopup);
            document.addEventListener('livewire:load', initPdfPopup);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            function initPortfolioFilters() {
                // ننتظر حتى يتم تحميل jQuery ومكتبة Isotope
                if (window.jQuery && $.fn.isotope) {
                    
                    // 1. تهيئة شبكة المشاريع
                    var $grid = $('.portfolio-items').isotope({
                        itemSelector: '.grid-item',
                        layoutMode: 'masonry',
                        isOriginLeft: false // مهم جداً لدعم اتجاه اليمين لليسار (RTL)
                    });

                    // 2. تشغيل الأزرار عند النقر
                    $('.filter-button-group').off('change').on('change', 'input[type="radio"]', function() {
                        var filterValue = this.value;
                        
                        // إذا كان الخيار "الكل" نعرض كل ما يحمل كلاس grid-item، وإلا نعرض الفلتر المخصص
                        filterValue = (filterValue === 'grid-item') ? '.grid-item' : '.' + filterValue;
                        
                        // تنفيذ الفلترة
                        $grid.isotope({ filter: filterValue });
                        
                        // تلوين الزر النشط باللون الأزرق
                        $('.filter-button-group .f_btn').removeClass('active');
                        $(this).closest('.f_btn').addClass('active');
                    });
                    
                } else {
                    // المحاولة مجدداً إذا لم تكتمل المكتبات
                    setTimeout(initPortfolioFilters, 100);
                }
            }

            // تشغيل الفلاتر فوراً
            initPortfolioFilters();

            // إعادة تشغيلها عند تصفح صفحات Livewire (السر هنا!)
            document.addEventListener('livewire:navigated', initPortfolioFilters);
            document.addEventListener('livewire:load', initPortfolioFilters);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const contactForm = document.getElementById('cform');
            const successAlert = document.querySelector('.alert-success');
            
            if(contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault(); // منع إعادة تحميل الصفحة
                    
                    // تغيير نص الزر ليوحي بعملية الإرسال
                    const submitBtn = this.querySelector('button[type="submit"] .text');
                    const originalText = submitBtn.innerText;
                    submitBtn.innerText = 'جاري الإرسال...';
                    
                    // جلب بيانات النموذج
                    const formData = new FormData(this);
                    
                    // إرسال البيانات إلى FormSubmit عبر AJAX
                    // لاحظ إضافة كلمة /ajax/ في الرابط لمنع التوجيه لصفحة أخرى
                    fetch('https://formsubmit.co/ajax/moh.zahir.mz@gmail.com', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if(data.success) {
                            // إظهار رسالة النجاح
                            successAlert.style.display = 'block';
                            // إفراغ الحقول
                            contactForm.reset();
                            // إعادة نص الزر
                            submitBtn.innerText = originalText;
                            
                            // إخفاء رسالة النجاح بعد 5 ثواني
                            setTimeout(() => {
                                successAlert.style.display = 'none';
                            }, 5000);
                        } else {
                            alert('حدث خطأ من الخادم. يرجى المحاولة لاحقاً.');
                            submitBtn.innerText = originalText;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('تعذر الاتصال بالخادم. تأكد من اتصالك بالإنترنت.');
                        submitBtn.innerText = originalText;
                    });
                });
            }
        });
    </script>


    <a href="https://wa.me/249117017444" class="whatsapp-float" target="_blank" title="تواصل معي عبر الواتساب">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>