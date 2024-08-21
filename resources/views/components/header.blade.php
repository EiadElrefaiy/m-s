    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="{{ URL::asset('assets/site/assets/images/our_logo.png') }}" style="width: 90px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
                            @if(app()->isLocale('ar'))
                                <li class="scroll-to-section"><a href="{{ route('locale.switch', 'en') }}" style="font-weight: bold;">En</a></li> 
                            @else
                                <li class="scroll-to-section"><a href="{{ route('locale.switch', 'ar') }}" style="font-weight: bold;">العربية</a></li> 
                            @endif

                            @foreach ($data['header'] as $item)
                                @if(app()->isLocale('ar'))
                                    @if($item['call'] == 'item')
                                        <li class="scroll-to-section"><a href="{{ $item['url'] }}" style="font-weight: bold;">{{ $item['label'] }}</a></li>
                                    @else
                                        <li class="scroll-to-section"><div class="main-red-button-hover"><a href="{{ $item['url'] }}" style="font-weight: bold;">{{ $item['label'] }}</a></div></li> 
                                    @endif
                                @else
                                    @if($item['call'] == 'item')
                                        <li class="scroll-to-section"><a href="{{ $item['url'] }}" style="font-weight: bold;">{{ $item['label_eng'] }}</a></li>
                                    @else
                                        <li class="scroll-to-section"><div class="main-red-button-hover"><a href="{{ $item['url'] }}" style="font-weight: bold;">{{ $item['label_eng'] }}</a></div></li> 
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                        <!-- ***** Menu End ***** -->
                        <a class='menu-trigger'>
                            <span>القائمة</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

