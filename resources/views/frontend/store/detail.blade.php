@extends('layout.default')

@section('content')
    <main id="main">
        <div class="navbar order-last order-sm">
            <a class="p-0" href="{{ URL::previous() }}">
                <img src="{{ asset('Assets/images/arrow-circle-left.svg') }}" alt="">
            </a>
        </div>

        <section id="hero">
            <div id="heroCarousel" class="carousel  carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url('../Assets/images/gambarstore.svg')">
                    </div>
                </div>
            </div>
            <br>
        </section><!-- End Hero -->

        <div class="clearfix container p-0">
            <div class="card-detail">
                <div class="card sub-card-detail padding-24 pt-3" style="border-bottom: 0">
                    <div class="">
                        <div class="col-auto">
                            <div class="row">
                                <div class=" col-w10">
                                    <img src="{{ asset('Assets/images/location.svg') }}
                                                                            " alt="">
                                </div>
                                <div class=" col-w50 pb-0">
                                    <h1 class="font-14px tebal biru m-0"> 2.4 KM</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto mt-3">
                            <h3 class="font-14px tebal " style="color: black">
                                Pickup & Delivery
                            </h3>
                        </div>
                        <div class="col-auto mt-3">
                            <h3 class="font-14px tipis " style="color: black">
                                Minumint kertajaya - Jl. kertajaya no.72, kec. gubeng, kota surabaya
                            </h3>
                        </div>
                        <div class="row pb-4">
                            <div class="col-auto">
                                <img src="{{ asset('Assets/images/lokasi.svg') }}" alt="">
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('Assets/images/pesan.svg') }}" alt="">
                            </div>
                        </div>
                        <img src="{{ asset('Assets/images/maps.svg') }}" alt="" style="width:100%">
                        <div class="col-auto pt-4" style="border-bottom: 1px solid grey">
                            <h3 class="font-14px tebal">Jam Operasional </h3>
                        </div>
                        <div class="col-12 pt-3" style="padding-bottom:70px">
                            <div class="justify-content-between row">
                                <div class="col-auto">
                                    <h3 class="font-14px tipis">Senin</h3>
                                    <h3 class="font-14px tipis">Selasa</h3>
                                    <h3 class="font-14px tipis">Rabu</h3>
                                    <h3 class="font-14px tipis">Kamis</h3>
                                    <h3 class="font-14px tipis">Jumat</h3>
                                    <h3 class="font-14px tipis">Sabtu</h3>
                                    <h3 class="font-14px tipis">Minggu</h3>

                                </div>
                                <div class="col-auto">
                                    <h3 class="font-14px tipis">07.00 - 23.00</h3>
                                    <h3 class="font-14px tipis">07.00 - 23.00</h3>
                                    <h3 class="font-14px tipis">07.00 - 23.00</h3>
                                    <h3 class="font-14px tipis">07.00 - 23.00</h3>
                                    <h3 class="font-14px tipis">07.00 - 23.00</h3>
                                    <h3 class="font-14px tipis">07.00 - 23.00</h3>
                                    <h3 class="font-14px tipis">07.00 - 23.00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" style="box-shadow: 0; z-index:3;">
            <div class="container clearfix p-0">
                <div class="d-grid gap-2 mx-auto col-12">
                    <button class="btn btn-footer" type="button">
                        Gunakan Sekarang
                    </button>
                </div>
            </div>
        </footer>

    </main>
@endsection
