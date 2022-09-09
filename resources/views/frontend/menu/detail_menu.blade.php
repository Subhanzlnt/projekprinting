@extends('layout.default')

@section('content')
    <main id="main">

        <div class="navbar order-last order-sm">
            <a class="p-0" href="{{ '/menu' }}">
                <img src="{{ asset('Assets/images/arrow-circle-left.svg') }}" alt="">
            </a>
        </div>


        <section id="hero">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                {{-- <div class="tombol-bak-menu">
                    <a href="{{ url('/') }}"> <img src="{{ asset('Assets/images/arrow-circle-left.svg') }}"
                            alt=""></a>
                </div> --}}
                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('../storage/<?php echo $menu->detail_image; ?>')">
                    </div>
                </div>

                {{-- <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> --}}

            </div>
            <br>
        </section><!-- End Hero -->

        <div class="clearfix container p-0">
            <div class="card-detail">
                <div class="card sub-card-detail">
                    <div class="card-body">
                        <div class=" row ">
                            <div class="col-auto col-7 ">
                                <h1 class="font-20px tebal mb-1">{{ $menu->name }}</h1>
                                <h1 class="font-12px tipis"> {{ $menu->description_product }}</h1>
                            </div>
                            @if ($menu->promo > 0)
                                <div class="col-auto col-w5">
                                    <h1 class="font-18px tebal mb-1">
                                        Rp. {{ number_format($menu->promo, 0, ',', '.') }}
                                    </h1>
                                    <h1 class="font-10px tipis ">
                                        Rp. <strike>
                                            {{ number_format($menu->price, 0, ',', '.') }}
                                        </strike>
                                    </h1>
                                </div>
                            @else
                                <div class="col-auto col-5">
                                    <h3 class="font-18px tebal ">
                                        Rp.
                                        {{ number_format($menu->price, 0, ',', '.') }}
                                    </h3>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix container padding-24 ">
            <div class="card card-pilihan">
                <div class="col-sm-12">
                    <form action="">

                        <div class="row mb-2">
                            <div class="col-auto col-w20">
                                <h1 class="font-12px sedang">Suhu</h1>
                            </div>
                            @foreach ($suhu as $opsi)
                                <div class="col-auto px-1">
                                    <input type="radio" name="suhu" value="{{ $opsi }}">
                                    <label for="{{ $opsi }}"
                                        class="text-center font-12px tebal p-1">{{ $opsi }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="row mb-2">
                            <div class="col-auto col-w20">
                                <h1 class="font-12px sedang">Ukuran</h1>
                            </div>
                            @foreach ($ukuran as $opsi2)
                                <div class="col-auto px-1">
                                    <input type="radio" name="size" value="{{ $opsi2 }}">
                                    <label for="{{ $opsi2 }}"
                                        class="text-center font-12px tebal p-1">{{ $opsi2 }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="row mb-2">
                            <div class="col-auto col-w20">
                                <h1 class="font-12px sedang">Gula</h1>
                            </div>
                            @foreach ($gula as $opsi3)
                                <div class="col-auto px-1">
                                    <input type="radio" name="gula" value="{{ $opsi3 }}">
                                    <label for="{{ $opsi3 }}"
                                        class="text-center font-12px tebal p-1">{{ $opsi3 }}</label>
                                </div>
                            @endforeach
                        </div>


                        {{-- hilang --}}
                        {{-- <div id="es-div"> --}}
                        <div class="row mb-2">
                            <div class="col-auto col-w20">
                                <h1 class="font-12px sedang">Es</h1>
                            </div>
                            @foreach ($es as $opsi4)
                                <div class="col-auto px-1">
                                    <input type="radio" name="es" value="{{ $opsi4 }}">
                                    <label for="{{ $opsi4 }}"
                                        class="text-center font-12px tebal p-1">{{ $opsi4 }}</label>
                                </div>
                            @endforeach
                        </div>
                        {{-- </div> --}}

                        <div id="kosong-div">

                        </div>

                    </form>
                </div>
            </div>
        </div>
        <section id="team" class="team section-bg">
            <div class="clearfix container padding-24">
                <div class="card-topping">

                    <h1 class="font-16px tebal">
                        Tambahan Topping
                    </h1>
                    <div class="row col-sm-12 justify-content-between">
                        @foreach ($topping as $opsi5)
                            <div class="col-4 mb-2">
                                <div class="member">
                                    <div class="member-img">
                                        <a href="">
                                            <img src="{{ asset('storage/' . $opsi5->image) }}" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="member-info">
                                        <h6 class="open-sans font-10px sedang biru pt-1 mb-0">
                                            {{ $opsi5->name }}
                                        </h6>

                                        <span class="open-sans font-12px oren tipis">
                                            Rp. {{ $opsi5->price }}
                                        </span>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </section>

        {{-- DESAIN FORM COUNT MAX 30 --}}
        {{-- <div class="clearfix container padding-24">
            <div class="card-topping">
                <div class="row mb-1 ">
                    <div class="col-auto col-w80">
                        <h1 class="font-12px tipis open-sans">
                            Catatan (opsional)
                        </h1>
                    </div>
                    <div class="col-auto p-0 m-0">
                        <h1 class="font-12px tipis open-sans" id="charNum">0
                        </h1>
                    </div>
                    <div class="col-auto p-0 m-0">
                        <h1 class="font-12px tipis open-sans">/30</h1>
                    </div>
                </div>
                <div class="mb-3" id="catatan">
                    <textarea class="form-control catatan" onkeyup="countChar(this)" maxlength="30" name="catatan" rows="5"></textarea>
                </div>
            </div>
        </div> --}}

        <footer id="footer" style="height: 65px">
            <div class="container clearfix padding-24px">
                <div class="col-12">
                    <div class="row">
                        <div class="col-auto col-w10">
                            <button type="button" class=" btn-detail p-0">
                                <img src="{{ asset('Assets/images/minus-square.svg') }}" alt="">
                            </button>
                        </div>
                        <div class="col-auto btn-detail">
                            <h1 class="tebal font-16px " style="color: black;">
                                1
                            </h1>
                        </div>
                        <div class="col-auto col-w10">
                            <button type="button" class="btn-detail p-0">
                                <img src="{{ asset('Assets/images/add-square.svg') }}" alt="">
                            </button>
                        </div>

                        <div class="col-w70 ">
                            <a href="{{ route('checkout.menu', $menu->id) }}">
                                <div class="card card-keranjang1">
                                    <h1 class="tebal font-16px" style="color: white">Keranjang
                                        Rp.0
                                    </h1>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </main>
@endsection

{{-- untuk desain tombol pada menu --}}
@include('layout.addon-menu')
<link href="{{ asset('Assets/css/page-menu.css') }}" rel="stylesheet">
