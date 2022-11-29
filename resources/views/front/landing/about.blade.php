@extends('layouts.default_front')

@section('content')
<div class="container"
     style="padding-top: 7rem"></div>

<!-- <section> begin ============================-->
<section id="testimonial">
     <div class="container">
          <div class="row">
               <div class="col-lg-12">
                    <div class="">
                         <h4>ACCOME merupakan platform media digital yang bergerak dalam bidang bisnis dengan menawarkan
                              Penyewaan Jasa MC ( Master of ceremony ), photographer maupun videographer untuk berbagai
                              event.
                              <br>
                              <br>
                              <br>
                              Manusia adalah makhluk sosial yang tak dapat berdiri sendiri dan masih memerlukan
                              komunikasi atau interakasi dengan manusia lainnya sama halnya dengan suatu event yang tak
                              dapat dijalankan sendiri tanpa bantuan dari pemandu acara atau MC . Pada setiap event
                              pasti membutuhkan pemandu agar event yang diadakan menjadi terarah dan tersusun rapi,
                              sehingga mendapatkan perhatian lebih dari publik MC bertanggung jawab atas kelancaran
                              event yang ia pimpin Namun, tentu saja ketika kita hendak mempercayakan event kita kepada
                              MC ada beberapa kriteria khusus yang ingin kita dapatkan dengan cara paling efektif
                         </h4>
                    </div>
                    <div class="row pt-6">
                         <div class="col-lg-4 col-sm-4">
                              <hr class="">
                         </div>
                         <div class="col-lg-4 col-sm-4">
                              <h1 class="text-center">F o u n d e r</h1>
                         </div>
                         <div class="col-lg-4 col-sm-4">
                              <hr>
                         </div>
                    </div>
                    <div class="row pt-6">

                         <div class="col-lg-3 col-md-12">
                              <center>
                                   <img src="{{ asset('front/assets_front_home/img/accome/ica.jpg') }}"
                                        alt=""
                                        width="250px"
                                        height="250px"
                                        style="border-radius: 50%">
                                   <h1 class="font-weight-semi-bold"">Hustler</h1>
                                   <hr>
                              <h2 style="
                                       text-center">Aniza Oktavia Gunawan</h2>
                              </center>
                         </div>
                         <div class="col-lg-3 col-md-12">
                              <center>
                                   <img src="{{ asset('front/assets_front_home/img/accome/putra.jpg') }}"
                                        alt=""
                                        width="250px"
                                        height="250px"
                                        style="border-radius: 50%">
                                   <h1 class="font-weight-semi-bold"">Hacker</h1>
                                        <hr>
                                   <h2 style="
                                       text-center">Tri Putra Satriawan</h2>
                              </center>
                         </div>
                         <div class="col-lg-3 col-md-12">
                              <center>
                                   <img src="{{ asset('front/assets_front_home/img/accome/padil.jpg') }}"
                                        alt=""
                                        width="250px"
                                        height="250px"
                                        style="border-radius: 50%">
                                   <h1 class="font-weight-semi-bold"">Hipster</h1>
                                        <hr>
                                   <h2 style="
                                       text-center">M Fadhil Alamsyah</h2>
                              </center>
                         </div>
                         <div class="col-lg-3 col-md-12">
                              <center>
                                   <img src="{{ asset('front/assets_front_home/img/accome/ina.jpg') }}"
                                        alt=""
                                        width="250px"
                                        height="250px"
                                        style="border-radius: 50%">
                                   <h1 class="font-weight-semi-bold"">Hustler</h1>
                                        <hr>
                                   <h2 style="
                                       text-center">Ina Listiani</h2>
                              </center>
                         </div>
                    </div>
               </div>
          </div>
     </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->


{{-- @include('front.components.advantages') --}}
@endsection

@push('styles')
<style>
     .founder {
          border-radius: 100%
     }
</style>

@endpush