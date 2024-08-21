@extends('layouts.app')

@section('content')

    <!-- ***** Main Banner Start ***** -->
    <div id="top" {{ app()->isLocale('ar') ? 'dir=ltr' : 'dir=ltr' }}>
        <div id="portfolio" class="our-portfolio section" {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
            <!-- ======= Recent Blog Posts Section ======= -->
            <section id="recent-blog-posts" class="recent-blog-posts">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200" {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
                            <div class="post-box">
                                <div class="post-img">
                                    <img src="{{ URL::asset($data['blogs']->image ?? 'assets/site/assets/img/default.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200" {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
                            <div class="post-box">
                                <div class="meta">
                                    @php
                                    $locale = app()->getLocale();
                                    $formattedDate = \Carbon\Carbon::parse($data['blogs']->created_at)
                                    ->locale($locale)
                                    ->translatedFormat('l، j F');
                                    @endphp
                                    <span class="post-date">{{ $formattedDate }}</span>
                                </div>
                                @if(app()->isLocale('ar'))
                                <h3 class="post-title">{{ $data['blogs']->title }}</h3>
                                <p>{!! nl2br(e($data['blogs']->description)) !!}</p>
                                @else
                                <h3 class="post-title">{{ $data['blogs']->title_eng }}</h3>
                                <p>{!! nl2br(e($data['blogs']->description_eng)) !!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection