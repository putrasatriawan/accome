<!DOCTYPE html>
<html lang="en-US"
      dir="ltr">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible"
            content="IE=edge">
      <meta name="viewport"
            content="width=device-width, initial-scale=1">


      <!-- ===============================================-->
      <!--    Document Title-->
      <!-- ===============================================-->
      <title>Accome | The Best Profesional Talent</title>

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
              integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
              crossorigin="anonymous"></script>

      <!-- ===============================================-->
      <!--    Favicons-->
      <!-- ===============================================-->
      <link rel="apple-touch-icon"
            sizes="180x180"
            href="{{ asset('front/assets_front_home/img/accome/headeraccome.png') }}">
      <link rel="icon"
            type="image/png"
            sizes="32x32"
            href="{{ asset('front/assets_front_home/img/accome/headeraccome.png') }}">
      <link rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{ asset('front/assets_front_home/img/accome/headeraccome.png') }}">
      <link rel="shortcut icon"
            type="image/x-icon"
            href="{{ asset('front/assets_front_home/img/accome/headeraccome.png')}}">
      <link rel="
            manifest"
            href="{{ asset('front/assets_front_home/img/accome/headeraccome.png')}}">
      <meta name="
            msapplication-TileImage"
            content="{{ asset('front/assets_front_home/img/accome/headeraccome.png')}}">
      <meta name="theme-color"
            content="#ffffff">


      <!-- ===============================================-->
      <!--    Stylesheets-->
      <!-- ===============================================-->
      <link href="{{ asset('front/assets_front_home/css/theme.css') }}"
            rel="stylesheet" />
      {{-- <script>
            WebFont.load({
                            google: {"families":["Lato:300,400,700,900"]},
                            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['back/assets/css/fonts.min.css']},
                            active: function() {
                                  sessionStorage.fonts = true;
                            }
                      });
      </script> --}}
      <link rel="stylesheet"
            href="{{ asset('back/assets/css/fonts.min.css')}}">
      @stack('styless')
      @stack('styles')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
              crossorigin="anonymous"></script>

</head>

<body>
      <main class="main"
            id="top">
            @include('includes.header_front')
            @yield('content')
            @include('includes.js_front')
            @include('includes.footer_front')
      </main>
      @stack('scriptss')
</body>

</html>