@extends('layout.default')

@section('content')
    <main id="main">
       
        <div class="clearfix container padding-24">
            <div class="page-profil pt-2">
                <div class="col-sm-12 ">
                    <div class="form-floating">
                        <input type="text" class="form-control form-custom @error('voucher') is-invalid @enderror"
                            id="voucher" name="voucher" placeholder="Punya kode promo? Masukkan di sini">
                        <label for="voucher"> <img src="{{ asset('Assets/images/receipt-disscount.svg') }}" alt=""> Punya
                            kode promo? Masukkan di sini</label>
                        @error('voucher')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    Masukkan Lagi
                                </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="member mt-3">
                        <a href="{{ route ('detail.voucher')}}">
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


        <footer id="footer">
            <div class="container footer-home">
                <div class=" row justify-content-between ">
                    <div class="col-auto mr-auto">
                        <a href="{{ url('/') }}">
                            <img src="{{ 'Assets/images/icon_footer/beranda (2).svg' }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-auto mr-auto">
                        <a href="{{ route('menu') }}">
                            <img src="{{ 'Assets/images/icon_footer/menu (2).svg' }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-auto mr-auto">
                        <a href="/store"> <img src="{{ 'Assets/images/icon_footer/store (2).svg' }}" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="col-auto mr-auto">
                        <a href="/voucher">
                            <img src="{{ 'Assets/images/icon_footer/promo.svg' }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-auto mr-auto">
                        <a href="/profile">
                            <img src="{{ 'Assets/images/icon_footer/akun (2).svg' }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </main>
@endsection
