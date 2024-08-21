@extends('layouts.app')

@section('content')

<div class="main-banner" id="top" {{ app()->isLocale('ar') ? 'dir=ltr' : 'dir=ltr' }}>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="owl-carousel owl-banner">
                        @foreach ($data['sliders'] as $item)
                            <div class="item header-text" {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
                            @if(app()->isLocale('ar'))
                                <h6>{{$item['label']}}</h6>
                                <h2>{{$item['title']}}</h2>
                                <p>{{$item['description']}}</p>
                                <div class="down-buttons">
                                    <div class="main-blue-button-hover">
                                        <a href="#" class="mb-2">{{$item['button_label']}}</a>
                                    </div>
                                    <div class="call-button">
                                        <a href="#"><i class="fa fa-phone"></i> {{$item['phone']}}</a>
                                    </div>
                                </div>
                            </div>
                            @else
                            <h6>{{$item['label_eng']}}</h6>
                                <h2>{{$item['title_eng']}}</h2>
                                <p>{{$item['description_eng']}}</p>
                                <div class="down-buttons">
                                    <div class="main-blue-button-hover">
                                        <a href="#" class="mb-2">{{$item['button_label_eng']}}</a>
                                    </div>
                                    <div class="call-button">
                                        <a href="#"><i class="fa fa-phone"></i> {{$item['phone']}}</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="services" class="our-services section" style="position: relative; top: -80px;" {{ app()->isLocale('ar') ? 'dir=ltr' : 'dir=ltr' }}>
    <div class="services-right-dec">
        <img src="{{URL::asset('assets/site/assets/images/services-right-dec.png')}}" alt="">
    </div>
    <div class="container">
        <div class="services-left-dec">
            <img src="{{URL::asset('assets/site/assets/images/services-left-dec.png')}}" alt="">
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                @if(app()->isLocale('ar'))
                    <h2>نقدم أفضل <em>الخدمات</em> باستخدام <span>أدواتنا</span></h2>
                    <span>خدماتنا</span>
                 @else   
                 <h2>Provide Best <em>Service</em> Using <span>Our Tools</span></h2>
                    <span>Services</span>
                 @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-services">
                    @foreach ($data['services'] as $item)
                        <div class="item" style="height: 300px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                            @if(app()->isLocale('ar'))
                                <h4>{{$item['title']}}</h4>
                                <div class="icon" style="flex-shrink: 0;"><img src="{{ asset($item->image) }}" alt="" style="max-width: 100%; max-height: 100%;"></div>
                                <p>{{$item['description']}}</p>
                            @else 
                                <h4>{{$item['title_eng']}}</h4>
                                <div class="icon" style="flex-shrink: 0;"><img src="{{ asset($item->image) }}" alt="" style="max-width: 100%; max-height: 100%;"></div>
                                <p>{{$item['description_eng']}}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
     </div>
</div>

@if(app()->isLocale('ar'))
<div id="about" class="about-us section" dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-image">
                    <img src="{{URL::asset('assets/site/assets/images/about-left-image.png')}}" alt="Two Girls working together">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="">
                    <div class="row">
                        <h2 class="mb-3">نمِّ صفحتك الإلكترونية باستخدام <span style="color: #03a4ed;">أدوات السيو</span> وإدارة <span style="color: #d00c0d;">المشروعات</span> لدينا</h2>
                        <p>على مدار السنوات، تعاونا مع الشركات العالمية والناشئة، واحتفلنا بنجاحاتهم. اليوم، نواصل مساعدة الشركات الطموحة على تحقيق النجاح والأرباح من خلال أساليب متنوعة.</p>

                        <div class="col-lg-4">
                            <div class="fact-item">
                                <div class="count-area-content">
                                    <div class="icon mb-2">
                                        <img src="{{URL::asset('assets/site/assets/images/social-media.png')}}" alt="">
                                    </div>
                                    <div class="count-title">الإعلان الرقمي</div>
                                    <p>استخدام محركات البحث للوصول إلى نتائج أولى على جوجل وغيرها من الخدمات بمجرد النقر.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fact-item">
                                <div class="count-area-content">
                                    <div class="icon mb-2">
                                        <img src="{{URL::asset('assets/site/assets/images/app-development.png')}}" alt="">
                                    </div>
                                    <div class="count-title">تطوير المواقع الإلكترونية</div>
                                    <p>اختيار الكلمات الرئيسية المناسبة لكل موضوع بناءً على ما يبحث عنه المستخدم.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fact-item">
                                <div class="count-area-content">
                                    <div class="icon mb-2">
                                        <img src="{{URL::asset('assets/site/assets/images/analytics.png')}}" alt="">
                                    </div>
                                    <div class="count-title">أبحاث التسويق</div>
                                    <p>يجب أن تبهر موقع الويب زوارك من اللحظة التي يزورونها فيها.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else

<div id="about" class="about-us section" dir="ltr">
<div class="container">
  <div class="row">
  <div class="col-lg-6 align-self-center">
     <div class="left-image">
            <img src="{{URL::asset('assets/site/assets/images/about-left-image.png')}}" alt="Two Girls working together">
      </div>
    </div>
    <div class="col-lg-6">
      <div class="section-heading">
        <h2>Grow your website with our <em>SEO Tools</em> &amp; <span>Project</span> Management</h2>
        <p>Over the years, we've partnered with international and emerging companies, celebrating their successes. Today, we continue to help ambitious companies achieve success and profits through various methods.</p>
        <div class="row">
          <div class="col-lg-4">
            <div class="fact-item">
              <div class="count-area-content">
                <div class="icon mb-2">
                  <img src="{{URL::asset('assets/site/assets/images/social-media.png')}}" alt="">
                </div>
                <div class="count-title">Digital advertising</div>
                <p>Use search engines to reach the first results on Google and other services upon clicking.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="fact-item">
              <div class="count-area-content">
                <div class="icon mb-2">
                  <img src="{{URL::asset('assets/site/assets/images/app-development.png')}}" alt="">
                </div>
                <div class="count-title">Websites Developments</div>
                <p>Choose the appropriate keywords for each topic based on what the user is searching for.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="fact-item">
              <div class="count-area-content">
                <div class="icon mb-2">
                  <img src="{{URL::asset('assets/site/assets/images/analytics.png')}}" alt="">
                </div>
                <div class="count-title">Marketing research</div>
                <p>Your website should impress your visitors the moment they visit it.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endif





<div id="portfolio" class="our-portfolio section">
    <div class="section-heading">
    @if(app()->isLocale('ar'))
        <h2><em>خطواتنا </em>نحو تحقيق<span><br> النجاح الأكبر</span></h2>
        <span>كيف تبدأ؟</span>
    </div>
    @else
    <h2><em>Our Steps </em>Towards Achieving<span><br> Greater Success</span></h2>
    <span>How To Start?</span>
    @endif







    
    <!-- ======= Features Section ======= -->
    <section id="features" class="features" {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
        <div class="container" data-aos="fade-up" >
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @foreach($data["steps"] as $index => $tab)
                            <li class="nav-item col-6 col-md-4 col-lg-2">
                                <a class="nav-link {{ $index === 0 ? 'active' : '' }}" id="tab-{{ $index }}-tab" data-bs-toggle="tab" data-bs-target="#tab-{{ $index }}">
                                    @if($index === 0)
                                        <i class="bi bi-binoculars color-cyan"></i>
                                    @elseif($index === 1)
                                        <i class="bi bi-box-seam color-indigo"></i>
                                    @elseif($index === 2)
                                        <i class="bi bi-brightness-high color-teal"></i>
                                    @elseif($index === 3)
                                        <i class="bi bi-command color-red"></i>
                                    @elseif($index === 4)
                                        <i class="bi bi-easel color-blue"></i>
                                    @elseif($index === 5)
                                        <i class="bi bi-map color-orange"></i>
                                    @endif

                                    @if(app()->isLocale('ar'))
                                    <h4>{{$tab['title']}}</h4>
                                    @else
                                    <h4>{{$tab['title_eng']}}</h4>
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
            <div id="feature-tab-content" class="tab-content">
                
                <!-- Tabs Content -->
                <div class="tab-content" id="myTabContent">
                    @foreach($data["steps"] as $index => $tab)
                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="tab-{{ $index }}" role="tabpanel" aria-labelledby="tab-{{ $index }}-tab">
                            <div class="row gy-4">
                                <div class="col-lg-8 order-2 order-lg-1 {{ app()->isLocale('ar') ? 'text-end' : 'text-start' }}" data-aos="fade-up" data-aos-delay="100">
                                @if(app()->isLocale('ar'))
                                    <h3>{{ $tab['title'] }}</h3>
                                 @else   
                                 <h3>{{ $tab['title_eng'] }}</h3>
                                @endif

                                    <br>
                                    <br>
                                    <ul>
                                        @foreach($tab->points as $item)

                                        @if(app()->isLocale('ar'))
                                            <li><i class="bi bi-check-circle-fill"></i> {{ $item['title'] }}</li>
                                         @else   
                                        <li><i class="bi bi-check-circle-fill"></i> {{ $item['title_eng'] }}</li>
                                        @endif

                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{ asset($tab->image) }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>

        </div>
    </section>
    <!-- End Features Section -->
</div>


<div id="portfolio" class="our-portfolio section">
    <div class="section-heading">
    @if(app()->isLocale('ar'))
        <h2><em>استكشاف خدماتنا </em>الشاملة<span><br> </span></h2>
        <span>أفضل الخدمات</span>
    @else    
    <h2><em>Explore Our </em>Comprehensive<span><br> Services</span></h2>
    <span>Best Services</span>
    @endif
    </div>

    <!-- ======= Services Section ======= -->
    <section id="more" class="services" {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
        <div class="container" data-aos="fade-up">
            <div class="row gy-5">

            @foreach ($data['more_services'] as $index => $item)
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                @if($index === 0)
                                    <i class="bi bi-activity"></i>
                                @elseif($index === 1)
                                    <i class="bi bi-chat-square-text"></i>
                                @elseif($index === 2)
                                    <i class="bi bi-calendar4-week"></i>
                                @elseif($index === 3)
                                    <i class="bi bi-bounding-box-circles"></i>
                                @elseif($index === 4)
                                    <i class="bi bi-easel"></i>
                                @elseif($index === 5)
                                    <i class="bi bi-broadcast"></i>
                                @else
                                    <i class="bi bi-activity"></i>
                                @endif
                            </div>

                            @if(app()->isLocale('ar'))
                            <a href="#" class="stretched-link">
                                <h3>{{$item['title']}}</h3>
                            </a>
                            <p>{{$item['description']}}</p>
                            @else
                            <a href="#" class="stretched-link">
                                <h3>{{$item['title_eng']}}</h3>
                            </a>
                            <p>{{$item['description_eng']}}</p>
                            @endif

                        </div>
                    </div>
                </div>
                <!-- End Service Item -->
            @endforeach


            </div>

        </div>
    </section>
    <!-- End Services Section -->
</div>


<div id="blogs" class="our-portfolio section" {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <div class="section-heading">
                @if(app()->isLocale('ar'))
                    <h2><em>استكشاف أحدث </em>مدوناتنا<span><br> المدخلات</span></h2>
                    <span>عرض المدونات</span>
                @else    
                <h2><em>Explore Our </em>Latest Blog<span><br> Entries</span></h2>
                <span>View Blogs</span>
                @endif
                </div>
            </div>

            <div class="row">

                @php
                // Get the first 3 items from the collection
                $firstThreeBlogs = $data['blogs']->slice(0, 3);
                @endphp
            
            @foreach ($firstThreeBlogs as $index => $item)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200"  {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
                    <div class="post-box">
                        <div class="post-img">
                            <!-- Use dynamic image source if available in $item -->
                            <img src="{{ URL::asset($item->image ?? 'assets/site/assets/img/default.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="meta">
                            @php
                                // Determine the current locale
                                $locale = app()->getLocale();
            
                                // Format the date based on the current locale
                                $formattedDate = \Carbon\Carbon::parse($item->created_at)
                                                                ->locale($locale)
                                                                ->translatedFormat('l، j F');
                            @endphp
                            <span class="post-date">{{ $formattedDate }}</span>
                        </div>
                        @if(app()->isLocale('ar'))
                        <h3 class="post-title">{{ $item['title'] }}</h3>
                        <p class="ellipsis-5-lines">{!! nl2br(e($item['description'])) !!}</p>
                        <a href="{{ url('/blog/' . $item->id) }}" class="readmore stretched-link">
                            <span>اقرأ المزيد</span><i class="bi bi-arrow-right"></i>
                        </a>
                        @else
                            <h3 class="post-title">{{ $item['title_eng'] }}</h3>
                            <p class="ellipsis-5-lines">{!! nl2br(e($item['description_eng'])) !!}</p>
                            <a href="{{ url('/blog/' . $item->id) }}" class="readmore stretched-link">
                                <span>read more</span><i class="bi bi-arrow-right"></i>
                            </a>
                        @endif
                     </div>
                </div>
            @endforeach
            
            </div>

        </div>

    </section>
    <!-- End Recent Blog Posts Section -->  
</div>
</div>

<div id="portfolio" class="our-portfolio section" {{ app()->isLocale('ar') ? 'dir=ltr' : 'dir=ltr' }}>
<div class="portfolio-left-dec">
    <img src="{{URL::asset('assets/site/assets/images/portfolio-left-dec.png')}}" alt="">
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">      
            @if(app()->isLocale('ar'))
                <h2>آراء <em>العملاء </em> و<span> الشهادات</span></h2>
                <span>عملاؤنا</span>
            @else    
            <h2>Customer <em>Testimonials </em> &amp; and <span>Opinions</span></h2>
            <span>Our clients</span>
            @endif
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="owl-carousel owl-portfolio">
            @foreach ($data['reviews'] as $index => $item)

                <div class="item">
                    <div class="thumb">
                        <img src="{{ URL::asset($item->image)}}" style="height: 350px;" alt="">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
</div>

<div class="fixed-bottom d-flex justify-content-start">
<div class="bg-white p-2 border shadow-sm me-3 mb-3">
    <ul class="list-unstyled mb-0 d-flex">
        @foreach ($data['contacts'] as $index => $item)
            <li class="mx-1">
                <a href="{{$item['url']}}" class="d-inline-block rounded-circle contact-link" style="background-color: #00adef; padding: 10px;">
                    <img src="{{ URL::asset($item->image) }}" class="rounded-circle" style="width: 25px;">
                </a>
            </li>
        @endforeach
    </ul>
</div>
</div>

<style>
.contact-link {
    transition: background-color 0.3s ease;
}
.contact-link:hover {
    background-color: #d00c0d !important;
}
</style>



<div id="contact_form" class="contact-us section" {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <div class="section-heading">
            @if(app()->isLocale('ar'))
                <h2>لا تتردد في <em>التواصل</em> معنا عبر <span>نموذج الاتصال</span></h2>
            @else    
            <h2>Feel free to <em>Contact</em> us via the <span>contact form</span></h2>
            @endif
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2037.7378381864876!2d30.996608372622674!3d30.801151150185397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDQ4JzA0LjIiTiAzMMKwNTknNDcuOSJF!5e0!3m2!1sen!2seg!4v1721568609615!5m2!1sen!2seg" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <div class="info" style="visibility:hidden;">
                    <span><i class="fa fa-phone"></i> <a href="#">010-020-0340<br>090-080-0760</a></span>
                    <span><i class="fa fa-envelope"></i> <a href="#">info@company.com<br>mail@company.com</a></span>
                </div>
            </div>
        </div>
        <div class="col-lg-5 align-self-center">

            <!-- Messages for contact form -->
            <div id="contact-messages" {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            <form id="contact" action="{{ route('messages.create') }}" method="post">
                @csrf
                <input type="text" name="table" id="name" value="messages" style="display:none;">
                <div class="row">
                    <div class="col-lg-12">
                        <fieldset>
                            <input type="text" name="first_name" id="first_name" {{ app()->isLocale('ar') ? "placeholder=الاسم" : "placeholder=name"}} autocomplete="on" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <input type="text" name="last_name" id="last_name" {{ app()->isLocale('ar') ? "placeholder=اسم العائلة" : "placeholder=last name"}} autocomplete="on" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" {{ app()->isLocale('ar') ? "placeholder=البريد الاكتروني" : "placeholder=email"}} required="">
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <input type="text" name="message" id="message" {{ app()->isLocale('ar') ? "placeholder=الرسالة" : "placeholder=message"}} required="">
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <button type="submit" id="form-submit" class="main-button">{{ app()->isLocale('ar') ? 'ارسال الطلب' : 'send' }}</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>

            <script>
                $(document).ready(function() {
                    $('#contact').on('submit', function(event) {
                        event.preventDefault();

                        $.ajax({
                            url: "{{ route('messages.create') }}",
                            method: 'POST',
                            data: $(this).serialize(),
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                $('#contact-messages').html('<div class="alert alert-success">' + response.success + '</div>');
                            },
                            error: function(response) {
                                if (response.responseJSON && response.responseJSON.errors) {
                                    var errors = response.responseJSON.errors;
                                    var errorList = '<ul>';
                                    $.each(errors, function(key, value) {
                                        errorList += '<li>' + value[0] + '</li>';
                                    });
                                    errorList += '</ul>';
                                    $('#contact-messages').html('<div class="alert alert-danger">' + errorList + '</div>');
                                }
                            }
                        });
                    });
                });
            </script>
        </div>
    </div>
</div>
<!--div class="contact-left-dec">
    <img src="{{URL::asset('assets/site/assets/images/contact-left-dec.png')}}" alt="">
</div-->
</div>


@endsection