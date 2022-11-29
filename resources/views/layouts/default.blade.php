<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge" />
    <title>Admin | Accome</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no'
          name='viewport' />
    <link rel="icon"
          href="{{ asset('front/assets_front_home/img/accome/headeraccome.png')}}"
          type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="{{ asset('back/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['back/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
    </script>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
          crossorigin="anonymous">
    <!-- CSS Files -->
    <link rel="stylesheet"
          href="{{ asset('back/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('back/assets/css/atlantis.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('back/assets/css/fonts.min.css')}}">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet"
          href="{{ asset('back/assets/css/demo.css') }}">
    @stack('styles')
</head>

<body>
    <div class="wrapper">
        @include('includes.header')
        @include('includes.sidebar')
        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                                <h5 class="text-white op-7 mb-2">Accome</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    @yield('content')
                </div>
            </div>
            @include('includes.js')
            @include('includes.footer')
        </div>
        <!-- End Custom template -->
    </div>
    @stack('scripts')
    <!--   Core JS Files   -->
</body>

</html>