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
                     src="{{ asset('front/assets_front_home/img/accome/tagline.png') }}"
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
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="row row-cols-lg-4 row-cols-md-4 row-cols-2 flex-center">
                @foreach ($talent as $item)
                <div class="card-deck">
                    <div class="col">
                        <div class="card position-relative shadow"
                             style="max-width: 370px;">
                            <div class="position-absolute z-index--1 me-10 me-xxl-0"
                                 style="right:-160px;top:-210px;"> <img
                                     src="{{ asset('front/assets_front_home/img/steps/bg.png') }}"
                                     style="max-width:550px;"
                                     alt="shape" /></div>
                            <div class="card-body p-3">
                                <img class="mb-4 mt-2 rounded-2 w-100"
                                     style="max-height: 250px; max-width:250px"
                                     src="{{  asset('uploads/' . $item->picture) }}"
                                     alt="booking" />
                                <div>
                                    <h5 class="fw-medium"><a class="link-900 text-decoration-none stretched-link"
                                           href="{{ route('detailtalent.show' ,$item->id) }}"></a>{{ $item->name }}
                                    </h5>
                                    <p class="fs--1 mb-3 fw-medium">{{ $item->domisili->nama_domisili }} |
                                        @currency($item->rate)
                                        /Project
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center justify-content-between mt-3">
                                                <div class="show-onhover position-absolute">
                                                    <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3"
                                                         style="width: 260px;border-radius:18px;">
                                                        <div class="card-body py-3">
                                                            <div class="d-flex">
                                                                <div style="margin-right: 10px"> <img
                                                                         class="rounded-circle"
                                                                         src="{{ asset('front/assets_front_home/img/steps/favorite-placeholder.png') }}"
                                                                         width="50"
                                                                         alt="favorite" /></div>
                                                                <div>
                                                                    <h5 class="fw-medium mb-3">Aku Bisa </h5>
                                                                    @foreach ($item->tags as $tag )
                                                                    <p class="fs--1 mb-1 fw-medium">{{ $tag->name }}
                                                                    </p>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                         class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                                        <button class="
                                                         btn"> <i class="icon-tag"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="col-lg-4">
            <div class="container">
                <div class="py-4 px-5 position-relative text-center"
                     style="background-color: #EBEBEB;border-radius: 20px 20px 20px 20px;">
                    {{-- <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img
                             src="{{ asset('front/assets_front_home/img/cta/send.png') }}"
                             style="max-width:70px;"
                             alt="send icon" /></div> --}}
                    <h1>Tag Category</h1>
                    <br>
                    <br>
                    @foreach ($tags as $item)
                    <a href="{{ url(
                                         'tags-talent/'. $item->id) }}">{{
                        $item->name
                        }}</a>
                    <hr style="color: black">
                    @endforeach
                </div>
            </div><!-- end of .container-->
        </div>
    </div>
</div>
@include('front.components.advantages')


@endsection