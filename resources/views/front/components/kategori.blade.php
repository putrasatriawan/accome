<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pt-5"
         id="destination">
    <div class="container">
        <div class="mb-7 text-center">
            {{-- <h5 class="text-secondary">Top Selling </h5> --}}
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize text-start"
                style="color: #1D3752">CATEGORY</h3>
            <hr>
        </div>
        @php
        $kategori = App\Models\Kategori::where('is_active', '1')->get();
        @endphp
        <div class="row row-cols-lg-3 row-cols-md-3 row-cols-2 flex-center">
            @foreach ($kategori as $item)
            <div class="card-deck">
                <div class="col mb-4">
                    <div class="card overflow-hidden shadow">
                        <div class="embed-responsive  embed-responsive-16by9">
                            <img class="card-img-top img-fluid"
                                 src="{{  asset('uploads/' . $item->image) }}"
                                 alt="Rome, Italty" />
                        </div>
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium"><a
                                       class="link-900 text-decoration-none stretched-link"
                                       href="{{ url(
                                        'kategori-talent/'. $item->slug) }}">{{ $item->name }}</a></h4><span
                                      class="fs-1 fw-medium">$5,42k</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="fs-0 fw-medium">{{
                                    $item->desc}}</span>
                                <a href="">
                                    <img src="{{ asset('front/assets_front_home/img/dest/navigation.svg') }}"
                                         style="margin-left: 14px"
                                         width="20"
                                         alt="navigation" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div><!-- end of .container-->
</section>
<!-- <section> close ============================-->
<!-- ============================================-->
@push('styles')
<style>
    .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }
</style>
@endpush