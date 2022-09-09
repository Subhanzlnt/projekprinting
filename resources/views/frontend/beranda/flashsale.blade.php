@extends('layout.default')

@section('content')
    <style>
        .nav-pills .nav-link:not(.active) {
            background-color: #293881;
            color: white;
        }


        /* active (faded) */
        .nav-pills .nav-link.active {
            background-color: #293881 !important;
            color: white !important;
        }


        #pills-flashsale1-tab,
        #pills-flashsale2-tab,
        #pills-flashsale3-tab {
            border-radius: 0px;
            /* box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1); */

        }

    </style>
    
    <main id="main">
        <div class="container header-profil bg-primary" style="height: 108px; background-color: #293881 !important;">

            <div class="row justify-content-start">
                <div class="col-2 back-btn">
                    <a href="{{ URL::previous() }}"> <img src="{{ asset('Assets/images/arrow-circle-left-white.svg') }}"
                            alt=""></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h1 class="font-16px tebal putih">Flash Sale</h1>
                </div>
            </div>

            <ul class="nav nav-pills nav-fill " id="pills-tab" role="tablist">
                <li class="nav-item p-0" role="presentation">
                    <button class="nav-link active text-center p-1" id="pills-flashsale1-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-flashsale1" type="button" role="tab" aria-controls="pills-flashsale1"
                        aria-selected="true">12:00
                        <h6 class=" font-8px"> Sedang Berjalan</h6>
                    </button>

                </li>
                <li class="nav-item p-0" role="presentation">
                    <button class="nav-link text-center p-1 " id="pills-flashsale2-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-flashsale2" type="button" role="tab" aria-controls="pills-flashsale2"
                        aria-selected="false">15:00
                        <h6 class=" font-8px"> Sedang Berjalan</h6>
                    </button>
                </li>
                <li class="nav-item p-0" role="presentation">
                    <button class="nav-link text-center p-1" id="pills-flashsale3-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-flashsale3" type="button" role="tab" aria-controls="pills-flashsale3"
                        aria-selected="false">18:00
                        <h6 class=" font-8px"> Sedang Berjalan</h6>
                    </button>
                </li>
            </ul>

        </div>

        <div class="clearfix container">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-flashsale1" role="tabpanel"
                    aria-labelledby="pills-flashsale1-tab">
                    <div class="row justify-content-center" style="background-color: #F9FAFB; margin-bottom:30px; ">
                        <div class="col-auto">
                            <h4 class="font-14px tebal biru m-1">BERAKHIR DALAM</h4>
                        </div>

                        <div class=" col-auto">
                            <div class="row">
                                <div class="col-auto p-0">
                                    <div class="bg-biru text-warp text-center" style="border-radius: 2px; width:20px">
                                        <h4 class="font-14px tebal putih open-sans"><span id="jam"></span></h4>
                                    </div>
                                </div>
                                <div class="col-auto" style="padding: 0 7px">
                                    <h4 class="font-14px tebal biru open-sans">:</h4>
                                </div>
                                <div class="col-auto p-0">
                                    <div class="bg-biru text-warp text-center" style="border-radius: 2px; width:20px">
                                        <h4 class="font-14px tebal putih open-sans"><span id="menit"></span></h4>
                                    </div>
                                </div>
                                <div class="col-auto" style="padding: 0 7px">
                                    <h4 class="font-14px tebal biru open-sans">:</h4>
                                </div>
                                <div class="col-auto p-0">
                                    <div class="bg-biru text-warp text-center" style="border-radius: 2px; width:20px">
                                        <h4 class="font-14px tebal putih open-sans"><span id="detik"></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @foreach ($promo as $produk)
                        <div class="">
                            <div class="col-12 mb-3">
                                <div class=" row">
                                    <div class="col-auto">
                                        <img src="{{ asset('storage/' . $produk->image) }}"
                                            style="max-width:86px; border-radius:15px" alt="...">
                                    </div>
                                    <div class="col-8">
                                        <h6 class=" font-14px tebal hitam ">
                                            {{ $produk->name }}
                                        </h6>
                                        <div class="col-12 ">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 30%"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <span class="font-12px tipis hitam">
                                                        189 Terjual
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-12px tipis mb-0">Rp. <strike>
                                                {{ number_format($produk->price, 0, ',', '.') }}</strike>
                                        </p>
                                        <p class="font-14px biru tipis">Rp.
                                            {{ number_format($produk->promo, 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="pills-flashsale2" role="tabpanel" aria-labelledby="pills-flashsale2-tab">
                    <div class="row justify-content-center" style="background-color: #F9FAFB; margin-bottom:30px; ">
                        <div class="col-auto">
                            <h4 class="font-14px tebal biru m-1">BERAKHIR DALAM</h4>
                        </div>

                        <div class=" col-auto">
                            <div class="row">
                                <div class="col-auto p-0">
                                    <div class="bg-biru text-warp text-center" style="border-radius: 2px; width:20px">
                                        <h4 class="font-14px tebal putih open-sans"><span id="jam"></span></h4>
                                    </div>
                                </div>
                                <div class="col-auto" style="padding: 0 7px">
                                    <h4 class="font-14px tebal biru open-sans">:</h4>
                                </div>
                                <div class="col-auto p-0">
                                    <div class="bg-biru text-warp text-center" style="border-radius: 2px; width:20px">
                                        <h4 class="font-14px tebal putih open-sans"><span id="menit"></span></h4>
                                    </div>
                                </div>
                                <div class="col-auto" style="padding: 0 7px">
                                    <h4 class="font-14px tebal biru open-sans">:</h4>
                                </div>
                                <div class="col-auto p-0">
                                    <div class="bg-biru text-warp text-center" style="border-radius: 2px; width:20px">
                                        <h4 class="font-14px tebal putih open-sans"><span id="detik"></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @foreach ($promo as $produk)
                        <div class="">
                            <div class="col-12 mb-3">
                                <div class=" row">
                                    <div class="col-auto">
                                        <img src="{{ asset('storage/' . $produk->image) }}"
                                            style="max-width:86px; border-radius:15px" alt="...">
                                    </div>
                                    <div class="col-8">
                                        <h6 class=" font-14px tebal hitam ">
                                            {{ $produk->name }}
                                        </h6>
                                        <div class="col-12 ">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 30%"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <span class="font-12px tipis hitam">
                                                        189 Terjual
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-12px tipis mb-0">Rp. <strike>
                                                {{ number_format($produk->price, 0, ',', '.') }}</strike>
                                        </p>
                                        <p class="font-14px biru tipis">Rp.
                                            {{ number_format($produk->promo, 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="pills-flashsale3" role="tabpanel" aria-labelledby="pills-flashsale3-tab">
                    <div class="row justify-content-center" style="background-color: #F9FAFB; margin-bottom:30px; ">
                        <div class="col-auto">
                            <h4 class="font-14px tebal biru m-1">BERAKHIR DALAM</h4>
                        </div>

                        <div class=" col-auto">
                            <div class="row">
                                <div class="col-auto p-0">
                                    <div class="bg-biru text-warp text-center" style="border-radius: 2px; width:20px">
                                        <h4 class="font-14px tebal putih open-sans"><span id="jam"></span></h4>
                                    </div>
                                </div>
                                <div class="col-auto" style="padding: 0 7px">
                                    <h4 class="font-14px tebal biru open-sans">:</h4>
                                </div>
                                <div class="col-auto p-0">
                                    <div class="bg-biru text-warp text-center" style="border-radius: 2px; width:20px">
                                        <h4 class="font-14px tebal putih open-sans"><span id="menit"></span></h4>
                                    </div>
                                </div>
                                <div class="col-auto" style="padding: 0 7px">
                                    <h4 class="font-14px tebal biru open-sans">:</h4>
                                </div>
                                <div class="col-auto p-0">
                                    <div class="bg-biru text-warp text-center" style="border-radius: 2px; width:20px">
                                        <h4 class="font-14px tebal putih open-sans"><span id="detik"></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @foreach ($promo as $produk)
                        <div class="">
                            <div class="col-12 mb-3">
                                <div class=" row">
                                    <div class="col-auto">
                                        <img src="{{ asset('storage/' . $produk->image) }}"
                                            style="max-width:86px; border-radius:15px" alt="...">
                                    </div>
                                    <div class="col-8">
                                        <h6 class=" font-14px tebal hitam ">
                                            {{ $produk->name }}
                                        </h6>
                                        <div class="col-12 ">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 30%"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <span class="font-12px tipis hitam">
                                                        189 Terjual
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-12px tipis mb-0">Rp. <strike>
                                                {{ number_format($produk->price, 0, ',', '.') }}</strike>
                                        </p>
                                        <p class="font-14px biru tipis">Rp.
                                            {{ number_format($produk->promo, 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>



    </main>
@endsection


{{-- untuk desain tombol pada checkout --}}
{{-- <link href="{{ asset('Assets/css/page-checkout.css') }}" rel="stylesheet"> --}}
