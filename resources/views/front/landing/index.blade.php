@extends('layouts.default_front')

@section('content')
<section style="padding-top: 7rem;">
    <div class="bg-holder"
         style="background-image:url(front/img/hero/hero-bg.svg);">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
                <img class="pt-7 pt-md-0 hero-img"
                     src="{{ asset('front/assets_front_home/img/accome/landingvektor.jpg') }}"
                     alt="hero-header" />
            </div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                <h1 class="hero-title">Hire the best professional Talent
                </h1>
                <h4 class="fw-bold text-danger mb-3"> To achieve the best work
                    with accome for your solution</h4>
                <p class="mb-4 fw-medium">Built Wicket longer admire do barton vanity itself do in it.<br
                        class="d-none d-xl-block" />Preferred to sportsmen it engrossed listening. Park gate<br
                        class="d-none d-xl-block" />sell they west hard for the.</p>
                <div class="text-center text-md-start"> <a
                       class="btn btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
                       href="{{ route('listtalent.index') }}"
                       role="button"
                       style="background-color: #EBEBEB">Lihat Semua Talent</a>
                    {{-- <div class="w-100 d-block d-md-none">
                    </div><a href="#!"
                       role="button"
                       data-bs-toggle="modal"
                       data-bs-target="#popupVideo"><span
                              class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img
                                 src="assets/img/hero/play.svg"
                                 width="15"
                                 alt="paly" /></span></a><span class="fw-medium">Play Demo</span>
                    <div class="modal fade"
                         id="popupVideo"
                         tabindex="-1"
                         aria-labelledby="popupVideo"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <iframe class="rounded"
                                        style="width:100%;max-height:500px;"
                                        height="500px"
                                        src="https://www.youtube.com/embed/_lhdhL4UDIo"
                                        title="YouTube video player"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.components.kategori')
@include('front.components.advantages')





<div class="container">
    <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
        <div class="col">
            <div class="card shadow-hover mb-4"
                 style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid"
                         src="{{ asset('front/assets_front_home/img/partner/1.png') }}"
                         alt="" /></div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-hover mb-4"
                 style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid"
                         src="{{ asset('front/assets_front_home/img/partner/2.png') }}"
                         alt="" /></div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-hover mb-4"
                 style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid"
                         src="{{ asset('front/assets_front_home/img/partner/3.png') }}"
                         alt="" /></div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-hover mb-4"
                 style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid"
                         src="{{ asset('front/assets_front_home/img/partner/4.png') }}"
                         alt="" /></div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-hover mb-4"
                 style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid"
                         src="{{ asset('front/assets_front_home/img/partner/5.png') }}"
                         alt="" /></div>
            </div>
        </div>
    </div>
</div>
@endsection