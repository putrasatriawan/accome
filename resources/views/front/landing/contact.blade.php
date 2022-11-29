@extends('layouts.default_front')

@section('content')
<div class="container"
     style="padding-top: 7rem"></div>

<!-- <section> begin ============================-->
<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-sm-12">
                <center>
                    <b>
                        <h1 class="font-weight-bold">GET MORE DETAIL</h1>
                    </b>
                    <p>Information by contacting customer service</p>
                    <div class="text-center"> <a class="btn btn-lg me-md-4 mb-3 mb-md-0 border-0 "
                           href="#"
                           role="button"
                           style="background-color: #0E3852; color:#FFBF2B"><b>GET CONTACT</b></a>
                        {{-- <img class==src="{{ asset('front/assets_front_home/img/accome/contakkiri.png') }}"
                             alt=""> --}}
                </center>
            </div>
            <div class="col-lg-12 col-sm-12 pt-7">
                <center>
                    <b>
                        <h1 class="font-weight-bold">GET REGISTER A TALENT</h1>
                    </b>
                    {{-- <p>Information by contacting customer service</p> --}}
                    <div class="text-center"> <a class="btn btn-lg me-md-4 mb-3 mb-md-0 border-0 "
                           href="#"
                           role="button"
                           style="background-color: #0E3852; color:#FFBF2B"><b>GET CONTACT</b></a>
                        {{-- <img class==src="{{ asset('front/assets_front_home/img/accome/contakkiri.png') }}"
                             alt=""> --}}
                </center>
            </div>
        </div>
    </div>
</section><!-- <section> close ============================-->
<!-- ============================================-->


{{-- @include('front.components.advantages') --}}
@endsection