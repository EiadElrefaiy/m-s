
@extends('layouts.app')

@section('content')

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

            @foreach ($data['blogs'] as $index => $item)
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
 
@endsection