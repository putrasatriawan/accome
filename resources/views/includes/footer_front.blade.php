<!-- ============================================-->
<!-- <section> begin ============================-->
<div class="footer-area">
    <section class="pb-0 pb-lg-4 footer-area">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4"
                         src="{{ asset('front/assets_front_home/img/accome/logobu.png') }}"
                         width="150"
                         alt="jadoo" />
                    <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social"
                           id="facebook"
                           href="#!"><i class="fab fa-facebook-f"> </i></a><a
                           class="text-decoration-none icon-item shadow-social"
                           id="instagram"
                           href="https://www.instagram.com/accome.id/?next=%2F&hl=id"><i class="fab fa-instagram">
                            </i></a><a class="text-decoration-none icon-item shadow-social"
                           id="twitter"
                           href="#!"><i class="fab fa-twitter"> </i></a></div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
                    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Company</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                               href="{{ route('about.index') }}">About</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                               href="{{ route('contact.index') }}">Contact</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                               href="{{ route('testimony.index') }}">Testimony</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
                    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Category</h4>
                    <ul class="list-unstyled mb-0">
                        @php
                        $kategori = App\Models\Kategori::where('is_active', '1')->get();
                        @endphp
                        @foreach ($kategori as $item)

                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                               href="{{ url(
                                'kategori-talent/'. $item->slug) }}">{{ $item->name }}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
                    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                               href="/">Home</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
                    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3">
                        <strong>ARS University</strong> <br>
                        Jl. Sekolah internasional No. 1-2
                        Kel. Cicaheum Kec. Kiaracondong
                        Kota Bandung
                        app
                    </h4>
                    <br>
                    <h3 class="footer-heading-color fw-bold font-sans-serif">accome@gmail.com</h3>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <div class="py-5 text-center">
        <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved@Accome</p>
    </div>
</div>