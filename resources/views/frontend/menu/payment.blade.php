@extends('layout.default')

@section('content')
    <main id="main">
        <div class="container header-profil">
            <div class="row justify-content-start">
                <div class="col-2 back-btn">
                    <a href="{{ URL::previous() }}"> <img src="{{ asset('Assets/images/arrow-circle-left.svg') }}"
                            alt=""></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h1 class="font-16px tebal biru">Konfirmasi Pembayaran</h1>
                </div>
            </div>
        </div>
        <div class="clearfix container padding-24 mt-4">
            <h6 class="hitam tipis font-12px"> Ambil pesanan Kamu </h6>
            <div class="col-sm-12   mb-4">
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
        </div>
        <div class="col-sm-12" style="background: rgba(229, 229, 229, 0.5); height: 65px;">
            <div class="padding-24 py-2">
                <div class="justify-content-between row">
                    <div class="col-auto">
                        <h3 class="font-14px tebal">Tersedia Pada Pukul</h3>
                        <h3 class="font-14px tipis">
                            <?php
                            echo date('D, d M Y');
                            ?>
                        </h3>
                    </div>
                    <div class="col-auto">
                        <h3 class="font-14px tebal">12.00</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1); height:65px;">
            <div class="padding-24 py-4">
                <div class="justify-content-between row">
                    <div class="col-auto">
                        <h3 class="font-14px tebal">Pesan</h3>

                    </div>
                    <div class="col-auto">
                        <a href="#">
                            <h3 class="font-14px tebal">Tambah Lagi</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix container padding-24 py-4">
            <div class="col-sm-12" style="height:190; ">
                <div class="row">
                    <div class="col-5">
                        <img src="{{ asset('Assets/images/greentea.jpg') }}" style="width: 100%; border-radius:15px "
                            alt="">
                    </div>
                    <div class="col-auto">
                        <div class="">
                            <div class="">
                                <h5 class="font-16px biru tebal">Nama Produk</h5>
                                <h5 class="font-12px tipis">deskripsi</h5>
                                <h5 class="font-12px tipis">harga produk</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between mt-3">
                    <div class="col">
                        <img src="{{ asset('Assets/images/edit.svg') }}" alt="">
                    </div>
                    <div class="col">
                        <div class="row ">
                            <div class="col p-0 text-end">
                                <img src="{{ asset('Assets/images/add-square.svg') }}" alt="">
                            </div>
                            <div class="col p-0 text-center">1</div>
                            <div class="col p-0  text-start"><img src="{{ asset('Assets/images/minus-square.svg') }}"
                                    alt=""></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <button class="accordion accordion2"> <img src="{{ asset('Assets/images/pembayaran.svg') }}" alt="">
                Pembayaran</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
            </div>

            <button class="accordion accordion2"><img src="{{ asset('Assets/images/pembayaran2.svg') }}"
                    alt="">Voucher</button>
            <div class="panel">
                <p>1. Voucher ini hanya berlaku untuk pembelian melalui aplikasi</p>
                <p>2. Voucher hanya dapat digunakan hingga tanggal masa berlaku yang tertera</p>
                <p>3. Penggunaan voucher ini hanya untuk satu (1) kali transaksi</p>
                <p>4. Voucher ini hanya berlaku untuk biaya produk dan tidak berlaku untuk biaya antar</p>
                <p>5. Penggunaan voucher ini tidak bisa digabungkan dengan voucher atau promo lainnya</p>
            </div>

        </div>
        <div class="col-sm-12 py-3 padding-24 " style="background: rgba(229, 229, 229, 0.5); height: 156px;">

            <div class="btn-group btn-group-toggle " style=" width:100%; " data-toggle="buttons">

                <label class="btn btn-secondary text-start py-3" style="display: inline-block;
                                                                background: #ffffff;
                                                                border: 0;
                                                                border-radius:15px;
                                                                box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
                                                                height: 60px;
                                                                color:#B0B0B0;
                                                                ">
                    <input class="form-check-input" type="checkbox" style="border-radius:30px !important;">
                    <label for="" style="margin-left: 3px">Gunakan Point</label>
                    <label for="" style="margin-left: 40%">10pts</label>
                </label>
            </div>
            <div class="col-sm-12 px-2 mt-2">
                <div class="row">
                    <div class="col-auto">
                        <img src="{{ asset('Assets/images/info-circle.svg') }}" alt="">
                    </div>
                    <div class="col p-0">
                        <p class="font-12px tipis">Tidak bisa menggunakan voucher dan
                            point secara bersamaan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1); height:65px;">
            <div class="padding-24 py-4">
                <h3 class="font-14px tebal hitam">Detail Pembayaran </h3>
            </div>
        </div>
        <div class="col-sm-12" style=" height:80px; margin-bottom:80px">
            <div class="padding-24 py-4">
                <div class="justify-content-between row">
                    <div class="col-auto">
                        <h3 class="font-14px tipis">Harga</h3>
                        <h3 class="font-14px tipis">Total Pembayaran</h3>

                    </div>
                    <div class="col-auto">
                        <h3 class="font-14px tipis">Rp. 000.000,00</h3>
                        <h3 class="font-14px tipis">Rp. 000.000,00</h3>
                    </div>
                </div>
            </div>
        </div>

        <footer id="">
            <div class="container clearfix p-0">
                <div class="d-grid gap-2 mx-auto col-12">
                    {{-- <a href="{{ route('payment.menu', $menu->id) }}"> --}}
                    <button class="btn btn-footer" type="button">
                        Konfirmasi
                    </button>
                    {{-- </a> --}}
                </div>

            </div>
        </footer>



    </main>
@endsection


{{-- untuk desain tombol pada checkout --}}
<link href="{{ asset('Assets/css/page-checkout.css') }}" rel="stylesheet">
<link href="{{ asset('Assets/css/page-voucher.css') }}" rel="stylesheet">
