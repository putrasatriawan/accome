@extends('layouts.default')

@section('content')

<div class="row mt--2">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                            <i class="flaticon-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">User</p>
                            <h4 class="card-title">10</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="flaticon-interface-6"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Artikel</p>
                            <h4 class="card-title">10</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="flaticon-graph"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Kategori</p>
                            <h4 class="card-title">10</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-secondary bubble-shadow-small">
                            <i class="flaticon-success"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Video</p>
                            <h4 class="card-title">10</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Materi & Artikel</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center"
                id="pills-tab-with-icon"
                role="tablist">
                <li class="nav-item">
                    <a class="nav-link active"
                       id="pills-home-tab-icon"
                       data-toggle="pill"
                       href="#pills-home-icon"
                       role="tab"
                       aria-controls="pills-home-icon"
                       aria-selected="true">
                        <i class="flaticon-home"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       id="pills-profile-tab-icon"
                       data-toggle="pill"
                       href="#pills-profile-icon"
                       role="tab"
                       aria-controls="pills-profile-icon"
                       aria-selected="false">
                        <i class="flaticon-user-4"></i>
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       id="pills-contact-tab-icon"
                       data-toggle="pill"
                       href="#pills-contact-icon"
                       role="tab"
                       aria-controls="pills-contact-icon"
                       aria-selected="false">
                        <i class="flaticon-mailbox"></i>
                        Contact
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3"
                 id="pills-with-icon-tabContent">
                <div class="tab-pane fade show active"
                     id="pills-home-icon"
                     role="tabpanel"
                     aria-labelledby="pills-home-tab-icon">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                        Semantics, a large language ocean.</p>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="tab-pane fade"
                     id="pills-profile-icon"
                     role="tabpanel"
                     aria-labelledby="pills-profile-tab-icon">
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                        decided to leave for the far World of Grammar.</p>
                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild
                        Question Marks and devious Semikoli, but the Little Blind Text didnâ€™t listen. She packed
                        her seven versalia, put her initial into the belt and made herself on the way.
                    </p>
                </div>
                <div class="tab-pane fade"
                     id="pills-contact-icon"
                     role="tabpanel"
                     aria-labelledby="pills-contact-tab-icon">
                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she
                        met a copy. The copy warned the Little Blind Text, that where it came from it would have
                        been rewritten a thousand times and everything that was left from its origin would be the
                        word "and" and the Little Blind Text should turn around and return to its own, safe country.
                    </p>

                    <p> But nothing the copy said could convince her and so it didnâ€™t take long until a few
                        insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her
                        into their agency, where they abused her for their</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection