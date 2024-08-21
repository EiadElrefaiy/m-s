
<!DOCTYPE html>
<html lang="ar" dir="rtl">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

    <title>Mands</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('assets/site/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('assets/site/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/site/assets/css/templatemo-onix-digital.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/site/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/site/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/site/assets/css/style.css')}}">
    
        <!-- Variables CSS Files. Uncomment your preferred color scheme -->
        <link href="{{URL::asset('assets/site/assets/css/variables.css')}}" rel="stylesheet">
        <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->
    
        <!-- Template Main CSS File -->
        <link href="{{URL::asset('assets/site/assets/css/main.css')}}" rel="stylesheet">


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
<style>

.ellipsis-5-lines {
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
}
</style>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


@include('components.header')



 @yield('content')



 @include('components.footer')


  <!-- Scripts -->
  <script src="{{URL::asset('assets/site/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('assets/site/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('assets/site/assets/js/owl-carousel.js')}}"></script>
  <script src="{{URL::asset('assets/site/assets/js/animation.js')}}"></script>
  <script src="{{URL::asset('assets/site/assets/js/imagesloaded.js')}}"></script>
  <script src="{{URL::asset('assets/site/assets/js/custom.js')}}"></script>

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
  
</body>
</html>