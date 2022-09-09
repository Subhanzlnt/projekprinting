@extends('layout.default')

@section('content')
    <main id="main">
        <div class="navbar order-last order-sm">
            <a class="p-0" href="{{ ('/menu') }}">
                <img src="{{ asset('Assets/images/arrow-circle-left.svg') }}" alt="">
            </a>
        </div>


        <section id="hero">
            <div id="heroCarousel" data-bs-interval="" class="carousel slide carousel-fade" data-bs-ride="carousel">
                {{-- <div class="tombol-bak-menu">
                    <a href="{{ url('/') }}"> <img src="{{ asset('Assets/images/arrow-circle-left.svg') }}"
                            alt=""></a>
                </div> --}}
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active"
                        style="background-image: url('../../../Assets/images/greentea.jpg'); background-size:200px 200px;">

                    </div>
                </div>



                {{-- <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> --}}

            </div>
            <br>
        </section><!-- End Hero -->

        <div class="clearfix container p-0">
            <div class="card-detail">
                <div class="card sub-card-detail padding-24">

                    <ul class="nav nav-pills nav-fill my-4 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item p-0" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Pickup</button>
                        </li>
                        <li class="nav-item p-0" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Delivery</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="container ">
                                <h6 class="hitam tipis font-12px"> Ambil pesanan Kamu </h6>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                                    <div class="card card-checkout">
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-auto col-8">
                                                    <h3 class="font-14px tebal biru">Minumint Kertajaya</h3>
                                                    <h6 class="font-10px tipis">Jl. Kertajaya no.72, Kec. Gubeng...</h6>
                                                </div>
                                                <div class="col-auto col-4 ">
                                                    <h3 class="font-14px tebal biru">- KM</h3>
                                                    <h6 class="font-10px tipis">Dari Lokasimu</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('Assets/images/maps.svg') }}" alt="" style="width:100%">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="container clearfix  ">
                                <h6 class="hitam tipis font-12px"> Pesananmu dikirim dari </h6>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                    <div class="card card-checkout">
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-auto col-8">
                                                    <h3 class="font-14px tebal biru">Minumint Kertajaya</h3>
                                                    <h6 class="font-10px tipis">Jl. Kertajaya no.72, Kec. Gubeng...</h6>
                                                </div>
                                                <div class="col-auto col-4 ">
                                                    <h3 class="font-14px tebal biru">- KM</h3>
                                                    <h6 class="font-10px tipis">Dari Lokasimu</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                                    <div class="card card-checkout">
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-auto col-8">
                                                    <h3 class="font-14px tebal biru">Username</h3>
                                                    <h6 class="font-10px tipis">Jl. Kertajaya no.300, Kec. Gubeng...</h6>
                                                </div>
                                                <div class="col-auto col-4 ">
                                                    <h3 class="font-14px tebal biru">-- min</h3>
                                                    <h6 class="font-10px tipis">Estimasi</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('Assets/images/maps.svg') }}" alt=""
                                    style="width:100%; margin-bottom:90px">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" style="z-index: 3">
            <div class="container clearfix p-0">
                <div class="d-grid gap-2 mx-auto  col-12">
                    <a href="{{ route('payment.menu', $menu->id) }}" class="btn btn-footer py-4 " role="button">
                        Konfirmasi
                    </a>
                </div>

            </div>
        </footer>



    </main>
@endsection


{{-- untuk desain tombol pada checkout --}}
<link href="{{ asset('Assets/css/page-checkout.css') }}" rel="stylesheet">
