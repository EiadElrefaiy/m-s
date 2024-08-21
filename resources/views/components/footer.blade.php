
<div class="footer-dec">
    <img src="{{URL::asset('assets/site/assets/images/footer-dec.png')}}" alt="">
  </div>

  <footer {{ app()->isLocale('ar') ? 'dir=rtl' : 'dir=ltr' }}>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="about footer-item">
                    <div class="logo">
                        <a href="#"><img src="{{URL::asset('assets/site/assets/images/our_logo.png')}}" style="width: 230px;" alt="Onix Digital TemplateMo"></a>
                    </div>
                    <a href="#">info@company.com</a>
                    <ul>
                    @foreach ($data['contacts'] as $index => $item)
                        <li><a href="{{$item['url']}}"><img src="{{ URL::asset($item->image) }}" style="width: 17px; align-items: center; justify-content: center;"></a></li>
                     @endforeach
                    </ul>
                </div>
                
            </div>
            <div class="col-lg-3">
                <div class="services footer-item">
                @if(app()->isLocale('ar'))
                    <h4>الخدمات</h4>
                @else
                    <h4 href="#">Services</h4>
                @endif

                    <ul>
                    @foreach ($data['footer_services'] as $index => $item)
                    @if(app()->isLocale('ar'))
                        <li><a href="#">{{$item['label']}}</a></li>
                    @else
                    <li><a href="#">{{$item['label_eng']}}</a></li>
                    @endif

                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="subscribe-newsletters footer-item">
                <div id="messages">
            <!-- Initial server-side messages -->
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

        <form id="newsletter-form" action="{{ route('newsletter.create') }}" method="post" dir="ltr">
            @csrf
            <button type="submit" id="form-submit" class="main-button"><i class="fa fa-paper-plane-o"></i></button>
            <input type="text" style="display:none;" value="newsletter" name="table">
            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" {{ app()->isLocale('ar') ? "placeholder=البريد الاكتروني" : "placeholder=email"}} required="">
        </form>
    </div>

        <script>
            $(document).ready(function() {
                $('#newsletter-form').on('submit', function(event) {
                    event.preventDefault();

                    $.ajax({
                        url: $(this).attr('action'),
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function(response) {
                            $('#messages').html('<div class="alert alert-success">' + response.success + '</div>');
                        },
                        error: function(response) {
                            if (response.responseJSON.errors) {
                                var errors = response.responseJSON.errors;
                                var errorList = '<ul>';
                                $.each(errors, function(key, value) {
                                    errorList += '<li>' + value[0] + '</li>';
                                });
                                errorList += '</ul>';
                                $('#messages').html('<div class="alert alert-danger">' + errorList + '</div>');
                            }
                        }
                    });
                });
            });
        </script>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright">
                @if(app()->isLocale('ar'))
                    <p>حقوق الطبع والنشر © 2021 شركة أونيكس الرقمية. جميع الحقوق محفوظة. <br> تصميم <a rel="nofollow" href="https://templatemo.com" title="قوالب CSS مجانية">TemplateMo</a></p>
                @else
                <p>Copyright © 2021 Onix Digital Co., Ltd. All Rights Reserved. <br> Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a></p>
                @endif
              </div>
            </div>
        </div>
    </div>
</footer>
