@extends('layouts.default_front')
@section('content')
<div class="container"
     style="padding-top: 160px;">
    <div class="row ">
        <div class="d-flex justify-content-between">
            <div style="text-align: start">
                <a href="{{ '/' }}"><i class="fas fa-home"></i></a>
                <div class="separator"></div>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle rounded"
                        type="button"
                        style="#D9D9D9"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                    TAG CATEGORY
                </button>
                <ul class="dropdown-menu">
                    @foreach ($tags as $item)
                    <li><a class="dropdown-item"
                           href="{{ url(
                            'tags-talent/'. $item->id) }}">{{
                            $item->name
                            }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@include('front.components.bannerup')
<div class="container">
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
                                   href="{{ route('detailtalent.show' ,$item->id) }}"></a>{{
                                $item->name }} </h5>
                            <p class="fs--1 mb-3 fw-medium">{{
                                $item->domisili->nama_domisili }} |
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
                                                        <div style="margin-right: 10px">
                                                            <img class="rounded-circle"
                                                                 src="{{ asset('front/assets_front_home/img/steps/favorite-placeholder.png') }}"
                                                                 width="50"
                                                                 alt="favorite" />
                                                        </div>
                                                        <div>
                                                            <h5 class="fw-medium mb-3">Aku
                                                                Bisa </h5>
                                                            @foreach ($item->tags as $tag )
                                                            <p class="fs--1 mb-1 fw-medium">
                                                                {{ $tag->name }}
                                                            </p>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
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


@include('front.components.advantages')

@endsection

@push('styles')
<style>
    .linkhead {
        color: #1D3752
    }

    .wrapper {
        space
    }
</style>

@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
@endpush