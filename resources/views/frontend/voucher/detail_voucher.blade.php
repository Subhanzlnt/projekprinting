@extends('layout.default')

@section('content')
    <main id="main">
        <div class="container header-profil">
            <div class="row justify-content-start">
                <div class="col-2 back-btn">
                    <a href="{{ URL::previous() }}"> 
                        <img src="{{ asset('Assets/images/close-circle.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h1 class="font-16px tebal biru">Detail Voucher</h1>
                </div>
            </div>
        </div>

        <div class="clearfix container p-0">
            <div class="page-profil">
                <div class="col-sm-12 ">

                    <div class="member mt-3">
                        <a href="">
                            <div class="member-img">
                                <img src="{{ asset('Assets/images/voucher.png') }}" alt=""
                                    style="width: 100%; border-radius:15px 15px 0px 0px" class="img-fluid">
                            </div>
                            <div class="member-info"
                                style="background-color: #2938810D; border-radius:0px 0px 15px 15px; height: 56px ;">
                                <div class="row justify-content-center px-3 py-2 m-0">
                                    <div class="col-auto col-w40 pt-1">
                                        <div class="row">
                                            <div class="col-auto px-1"><img
                                                    src="{{ asset('Assets/images/detailvoucher1.svg') }}" alt=""
                                                    style="height:20px" class="img-fluid"></div>
                                            <div class="col-auto p-0">
                                                <h6 class="open-sans font-8px tipis biru m-0">
                                                    Berlaku Hingga
                                                </h6>
                                                <h6 class="open-sans font-12px tipis biru m-0">
                                                    20 April 2022
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto col-w40 pt-1">
                                        <div class="row">
                                            <div class="col-auto px-1"><img
                                                    src="{{ asset('Assets/images/detailvoucher2.svg') }}" alt=""
                                                    style="height:20px" class="img-fluid"></div>
                                            <div class="col-auto p-0">
                                                <h6 class="open-sans font-8px tipis biru m-0">
                                                    Min. Transaksi
                                                </h6>
                                                <h6 class="open-sans font-12px tipis biru m-0">
                                                    Rp.100.000
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto col-w20 p-0">
                                        <div class="">
                                            <button type="button" class="btn tombol-pakai" role="button">
                                                pakai
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix container p-0">
            <div class="col-12">
                <div class="teks-voucher">


                    <h6 class="open-sans font-14px tebal">
                        Saturday Free Upsize
                    </h6>
                    <p>Voucher ini hanya berlaku untuk transaksi
                        melalui aplikasi</p>
                    <p>
                        Minumint adalah perusahaan food & beverage
                        yang menjual kopi, teh, coklat dan minuman
                        segar lainnya.
                    </p>
                    <p>
                        Store kami tersebar diaerah surabaya dan
                        sekitarnya yang dapat dikunjungi. melalui
                        apliaksi minumint kamu bisa delivery dari
                        store terdekat kami.
                    </p>
                    <p>
                        Nikmati minuman enak tanpa harus antri sana
                        sini.
                    </p>
                </div>
            </div>

        </div>
        <div class="clearfix container p-0 mb-5 pb-5">
            <button class="accordion">Menu yang berlaku</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Syarat & ketentuan</button>
            <div class="panel">
                <p>1. Voucher ini hanya berlaku untuk pembelian melalui aplikasi</p>
                <p>2. Voucher hanya dapat digunakan hingga tanggal masa berlaku yang tertera</p>
                <p>3. Penggunaan voucher ini hanya untuk satu (1) kali transaksi</p>
                <p>4. Voucher ini hanya berlaku untuk biaya produk dan tidak berlaku untuk biaya antar</p>
                <p>5. Penggunaan voucher ini tidak bisa digabungkan dengan voucher atau promo lainnya</p>
            </div>

            <button class="accordion">Cara Pemesanan</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
            </div>

        </div>


        <footer id="footer" >
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




{{-- untuk desain card accordian --}}
<link href="{{ asset('Assets/css/page-voucher.css') }}" rel="stylesheet">
