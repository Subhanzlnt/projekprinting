@extends('layout.default')

@section('content')
    <main id="main">
        @auth
            <div class="container header-profil">
                <div class="row justify-content-start">
                    <div class="col-2 back-btn" >
                        <a href="{{ url('/') }}"> <img src="{{ 'Assets/images/close-circle.svg' }}" alt=""></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 text-center">
                        <h1 class="font-16px tebal biru"> Akun</h1>
                    </div>
                </div>
            </div>

            <div class="clearfix container padding-24">
                <div class="page-profil">
                    <div class="col-sm-12 ">
                        <div class="row justify-content-center text-center">
                            <img src="{{ asset('Assets/images/default_profile.svg') }}" style="width : 80px; height: 80px;"
                                alt="">
                            <h1 class="font-16px tebal "> {{ auth()->user()->name }}</h1>
                        </div>
                        <div class="row card-loyalitas">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <h1 class="tipis font-12px putih" > Loyalitas Status :</h1>
                                    <h1 class="tebal font-16px putih" >Karyawan </h1>
                                </div>
                                <div class="col-auto">
                                    <h1 class="tipis font-12px putih" > Point :</h1>
                                    <h1 class="tebal font-16px putih" > 21 </h1>

                                </div>
                            </div>
                        </div>

                        @can('admin')
                            <a href="/administrator/main" class="" role="button">
                                <div class="row justify-content-center mt-3">
                                    <div class="col-w10">
                                        {{-- <img src="{{ asset('Assets/images/route-square.svg') }}" alt=""> --}}
                                    </div>
                                    <div class="col-w90">
                                        <div class="btn-profile">
                                            <h1 class="tipis font-12px biru"> Dashboard Admin </h1>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan

                        <div class="">
                            <a href="" class="" role="button">
                                <div class="row justify-content-center mt-4">
                                    <div class="col-w10">
                                        <img src="{{ asset('Assets/images/document.svg') }}" alt="">
                                    </div>
                                    <div class="col-w90">
                                        <div class="btn-profile">
                                            <h1 class="tipis font-12px biru"> Riwayat Pemesanan</h1>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="" role="button">
                                <div class="row justify-content-center mt-3">
                                    <div class="col-w10">
                                        <img src="{{ asset('Assets/images/route-square.svg') }}" alt="">
                                    </div>
                                    <div class="col-w90">
                                        <div class="btn-profile">
                                            <h1 class="tipis font-12px biru"> Alamat Tersimpan</h1>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="" role="button">
                                <div class="row justify-content-center mt-3">
                                    <div class="col-w10">
                                        <img src="{{ asset('Assets/images/card.svg') }}" alt="">
                                    </div>
                                    <div class="col-w90">
                                        <div class="btn-profile">
                                            <h1 class="tipis font-12px biru"> Riwayat Pemesanan</h1>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="" role="button">
                                <div class="row justify-content-center mt-3">
                                    <div class="col-w10">
                                        {{-- <img src="{{ asset('Assets/images/card.svg') }}" alt=""> --}}
                                    </div>
                                    <div class="col-w90">
                                        <div class="btn-profile">
                                            <h1 class="tipis font-12px biru"> Kopi Gratis</h1>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <a href="" class="" role="button">
                                <div class="row justify-content-center mt-3">
                                    <div class="col-w10">
                                        {{-- <img src="{{ asset('Assets/images/route-square.svg') }}" alt=""> --}}
                                    </div>
                                    <div class="col-w90">
                                        <div class="btn-profile">
                                            <h1 class="tipis font-12px biru"> Pusat Bantuan </h1>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <a href="" class="" role="button">
                                <div class="row justify-content-center mt-3">
                                    <div class="col-w10">
                                        {{-- <img src="{{ asset('Assets/images/route-square.svg') }}" alt=""> --}}
                                    </div>
                                    <div class="col-w90">
                                        <div class="btn-profile">
                                            <h1 class="tipis font-12px biru"> Tentang Kami </h1>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <form action="/logout" method="post">
                                @csrf
                                {{-- <a  class="" role="button" type="submit"> --}}
                                <button type="submit" class=" p-0"
                                    style="display:inline-block; width:100%; background-color:transparent; border:none;">
                                    <div class="row  mt-3">
                                        <div class="col-w10">
                                            <img src="{{ asset('Assets/images/route-square.svg') }}" alt="">
                                        </div>
                                        <div class="col-w90">
                                            <div class="btn-profile text-start">
                                                <h1 class="tipis font-12px biru"> Logout </h1>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                                {{-- </a> --}}

                            </form>


                        </div>


                    </div>

                </div>
            </div>
        @else
            @include('frontend.login.login')
            {{-- {{ route('login') }} --}}

        @endauth




    </main>
@endsection
