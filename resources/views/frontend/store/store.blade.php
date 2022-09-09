@extends('layout.default')

@section('content')
    <main id="main">
        <div class="clearfix container padding-24">
            <div class="page-profil pt-2">
                <div class="col-sm-12 ">
                    <div class="form-floating">
                        <input type="text" class="form-control form-custom @error('voucher') is-invalid @enderror"
                            id="voucher" name="voucher" placeholder="Punya kode promo? Masukkan di sini">
                        <label for="voucher"> <img src="{{ asset('Assets/images/location.svg') }}" alt=""> Cari
                            store</label>
                        @error('voucher')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    Masukkan Lagi
                                </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="member mt-3">
                        <a href="{{ route('store.detail') }}">
                            <div class="member-img">
                                <img src="{{ asset('Assets/images/gambarstore.svg') }}" alt=""
                                    style="width: 100%; border-radius:15px 15px 0px 0px" class="img-fluid">
                            </div>
                            <div class="member-info"
                                style="background-color: white; box-shadow: 0 1px 5px rgba(0,0,0,0.1); border-radius:0px 0px 15px 15px; height: 135px ;">
                                <div class="col-12  p-3">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <h6 class="font-16px tebal biru">Uspace</h6>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="font-12px tipis biru">2.4 km </h6>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-auto">
                                            <h6 class="font-12px tebal biru">Buka </h6>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="font-12px tebal biru">12.00 - 22.00 </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <h6 class="font-12px tipis">Minumint kertajaya - Jl. kertajaya no.72, kec.
                                                gubeng, kota surabaya</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-center " style="padding: 22px 18px 80px;">
            <img src="{{ asset('Assets/images/kemitraan.svg') }}" alt="" class="" style="width: 100%">
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
                        <a href="/store"> <img src="{{ 'Assets/images/icon_footer/store.svg' }}" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="col-auto mr-auto">
                        <a href="/voucher">
                            <img src="{{ 'Assets/images/icon_footer/promo (2).svg' }}" class="img-fluid" alt="">
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
