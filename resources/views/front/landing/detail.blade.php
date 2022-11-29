@extends('layouts.default_front')

@section('content')
<!-- Shop Detail Start -->

<div class="container"
     style="padding-top: 160px;">
    <div class="card position-lg-relative shadow"
         style="background-color: #EBEBEB">
        <div class="row px-xl-5 pt-6">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel"
                     class="carousel slide"
                     data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100"
                                 src="{{ asset('uploads/' . $talent->picture) }}"
                                 alt="Image">
                        </div>
                        @foreach ($talent->image as $item)
                        <div class="carousel-item">
                            <img class="w-100 h-100"
                                 src="{{ asset('images/' .$item->image) }}"
                                 alt="Image">
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev"
                       href="#product-carousel"
                       data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next"
                       href="#product-carousel"
                       data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <div class="containter">
                    <h3 class="font-weight-semi-bold"
                        style="color: #1D3752; padding-left:1rem"> {{ $talent->name }}</h3>
                    <hr style="color: black">

                    <h3 style=" padding-left:1rem"> @currency($talent->rate)/Project</h3>
                    <hr style="color: black">
                    <h3 class="font-weight-semi-bold"
                        style=" padding-left:1rem"><i class="
                icon-location-pin"> {{ $talent->domisili->nama_domisili }}</i>
                    </h3>
                    <hr style="color: black">
                    {{-- <p class="mb-4">Desck{!! $talent->body !!}
                    </p> --}}


                    <div class="rounded text-center shadow-lg">
                        <a class="btn px-3"
                           href="/"
                           style="background-color: #EBEBEB">
                            <center> <i class="fa fab fa-whatsapp mr-1"></i> WHATSAPP US FOR DETAIL</center>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-xl-5"
         style="padding-top: 2rem; padding-bottom: 3rem">
        <div class="card position-lg-relative shadow"
             style="background-color: #EBEBEB">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active"
                       data-toggle="tab"
                       href="#tab-pane-1">Description</a>
                    <a class="nav-item nav-link"
                       data-toggle="tab"
                       href="#tab-pane-2">Information</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active"
                         id="tab-pane-1">
                        <h4 class="mb-3">Hi, Ini Diriku</h4>
                        <h3 class="font-weight-semi-bold"
                            style="color: black">
                            {!! $talent->body !!}
                        </h3>
                    </div>
                    <div class="tab-pane fade"
                         id="tab-pane-2">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h4 class="mb-3">Additional Information</h4>
                                <p>Download CV</p>
                                <a href="{{ asset('uploads/'.
                        $talent->cv) }}"><button class="btn btn-primary"
                                            download=""
                                            type="button">Download</button></a>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-6 pt-5">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle rounded"
                                            type="button"
                                            style="#D9D9D9"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        Tag
                                    </button>
                                    <ul class="dropdown-menu">
                                        @foreach ($talent->tags as $tag )
                                        <li><a class="dropdown-item"
                                               href="#">{{
                                                $tag->name
                                                }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade"
                         id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4">1 review for "Colorful Stylish Shirt"</h4>
                                <div class="media mb-4">
                                    <img src="img/user.jpg"
                                         alt="Image"
                                         class="img-fluid mr-3 mt-1"
                                         style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                        <div class="text-primary mb-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum
                                            et no
                                            at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Leave a review</h4>
                                <small>Your email address will not be published. Required fields are marked *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Your Review *</label>
                                        <textarea id="message"
                                                  cols="30"
                                                  rows="5"
                                                  class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your Name *</label>
                                        <input type="text"
                                               class="form-control"
                                               id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email *</label>
                                        <input type="email"
                                               class="form-control"
                                               id="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit"
                                               value="Leave Your Review"
                                               class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Shop Detail End -->


@endsection


@push('scriptss')
<script>
    <link href="{{ asset('front/assets_front_home/lib/owlcarousel/assets/owl.carousel.min.css') }}"
      rel="stylesheet">
<link href="{{ asset('front/assets_front_home/css/style.css') }}"
      rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('front/assets_front_home/easing/easing.min.js') }}"></script>
<script src="{{ asset('front/assets_front_home/lib/owlcarousel/owl.carousel.min.js') }}"></script>


<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>


<script src="{{ asset('front/assets_front_home/js/main.js') }}"></script>
</script>
@endpush