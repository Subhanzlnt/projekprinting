@extends('layout.default')

@section('content')
    <main id="main">
        <div class="container header-menu">

            <ul class="nav subheader-menu" id="tombol-menu">
                <li class="p-0">

                    <button class="tombol active" id="fav1">
                        <img src="{{ 'Assets/images/fav.svg' }}" alt="" class="">
                    </button>

                </li>
                <li class="p-0">

                    <button class="tombol" id="promo1">
                        <img src="{{ 'Assets/images/promo2.svg' }}" alt="" class="">
                    </button>

                </li>
                <li class="p-0">

                    <button class="tombol" id="coffe1">
                        <img src="{{ 'Assets/images/logocoffee.svg' }}" alt="" class="">
                    </button>

                </li>
                <li class="p-0">
                    <button class="tombol" id="tea1">
                        <img src="{{ 'Assets/images/logotea.svg' }}" alt="" class="">
                    </button>
                </li>
                <li class="p-0">
                    <button class="tombol" id="choco1">
                        <h1 class="tipis font-10px biru">Chocolate </h1>
                        {{-- <img src="{{ 'Assets/images/fav.svg' }}" alt="" class=""> --}}
                    </button>
                </li>
                <li class="p-0">
                    <button class="tombol" id="refresher1">
                        <h1 class="tipis font-10px biru">Refresher </h1>
                        {{-- <img src="{{ 'Assets/images/fav.svg' }}" alt="" class=""> --}}
                    </button>
                </li>
            </ul>

        </div>

        <section id="team" class="team section-bg">
            <div class="clearfix container padding-24">
                <div class="page-menu">
                    <div id="atas">
                        <div class="subpage-menu" id="fav">
                            <h1 class="open-sans font-16px sedang biru">
                                Favorite
                            </h1>
                            <div class="row col-sm-12">
                                @foreach ($promo as $produk)
                                    <div class="col-auto col-6 align-items-stretch"
                                        style="padding: 0px 8px !important; margin-bottom:18px !important">
                                        <div class="member">
                                            <div class="member-img">
                                                <a href="{{ route('show.menu', $produk->id) }}">
                                                    <img src="{{ asset('storage/' . $produk->image) }}"
                                                        class="img-fluid " alt="">
                                                </a>

                                            </div>
                                            <div class="member-info pb-1">
                                                <h6 class="open-sans font-16px sedang biru pt-1 mb-0">
                                                    {{ $produk->name }}
                                                </h6>

                                                @if ($produk->harga_promo > 0)
                                                    <span class="open-sans font-12px tipis">
                                                        Rp. <strike>
                                                            {{ number_format($produk->price, 0, ',', '.') }}
                                                        </strike>
                                                    </span>
                                                    <span class="open-sans font-16px hitam tipis">
                                                        Rp. {{ number_format($produk->promo, 0, ',', '.') }}
                                                    </span>
                                                @else
                                                    <span class="open-sans font-16px hitam tipis mt-3">
                                                        Rp.
                                                        {{ number_format($produk->price, 0, ',', '.') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="bawah">
                        <div class="subpage-menu" id="promo">
                            <h1 class="open-sans font-16px sedang biru">
                                Promo
                            </h1>
                            <div class="row col-sm-12">
                                @foreach ($promo as $produk)
                                    @if ($produk->promo == null)
                                        {{-- kosong --}}
                                    @else
                                        <div class="col-auto col-6 align-items-stretch"
                                            style="padding: 0px 8px !important; margin-bottom:18px !important">
                                            <div class="member">
                                                <div class="member-img">
                                                    <a href="{{ route('show.menu', $produk->id) }}">
                                                        <img src="{{ asset('storage/' . $produk->image) }}"
                                                            class="img-fluid" alt="">
                                                    </a>

                                                </div>
                                                <div class="member-info">
                                                    <h6 class="open-sans font-16px sedang biru pt-1 mb-0">
                                                        {{ $produk->name }}
                                                    </h6>
                                                    <span class="open-sans font-12px tipis">
                                                        Rp. <strike>
                                                            {{ number_format($produk->price, 0, ',', '.') }}
                                                        </strike>
                                                    </span>
                                                    <span class="open-sans font-16px tipis hitam">
                                                        Rp. {{ number_format($produk->promo, 0, ',', '.') }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="subpage-menu" id="cof">
                            <h1 class="open-sans font-16px sedang biru">
                                Coffe
                            </h1>
                            <div class="row col-sm-12">
                                @foreach ($coffe as $produk)
                                    <div class="col-auto col-6 align-items-stretch"
                                        style="padding: 0px 8px !important; margin-bottom:18px !important">
                                        <div class="member">
                                            <div class="member-img">
                                                <a href="{{ route('show.menu', $produk->id) }}">
                                                    <img src="{{ asset('storage/' . $produk->image) }}"
                                                        class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="member-info">
                                                <h6 class="open-sans font-16px sedang biru pt-1 mb-0">
                                                    {{ $produk->name }}
                                                </h6>
                                                @if ($produk->price > 0)
                                                    <span class="open-sans font-12px tipis">
                                                        Rp. <strike>
                                                            {{ number_format($produk->price, 0, ',', '.') }}
                                                        </strike>
                                                    </span>
                                                    <span class="open-sans font-16px tipis hitam">
                                                        Rp. {{ number_format($produk->promo, 0, ',', '.') }}
                                                    </span>
                                                @else
                                                    <span class="open-sans font-16px tipis hitam mt-3">
                                                        Rp.
                                                        {{ number_format($produk->price, 0, ',', '.') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="subpage-menu" id="tea">
                            <h1 class="open-sans font-16px sedang biru">
                                Tea
                            </h1>
                            <div class="row col-sm-12">
                                @foreach ($tea as $produk)
                                    <div class="col-auto col-6 align-items-stretch"
                                        style="padding: 0px 8px !important; margin-bottom:18px !important">
                                        <div class="member">
                                            <div class="member-img">
                                                <a href="{{ route('show.menu', $produk->id) }}">
                                                    <img src="{{ asset('storage/' . $produk->image) }}"
                                                        class="img-fluid " alt="">
                                                </a>
                                            </div>
                                            <div class="member-info">
                                                <h6 class="open-sans font-16px sedang biru pt-1 mb-0">
                                                    {{ $produk->name }}
                                                </h6>
                                                @if ($produk->promo > 0)
                                                    <span class="open-sans font-12px tipis">
                                                        Rp. <strike>
                                                            {{ number_format($produk->price, 0, ',', '.') }}
                                                        </strike>
                                                    </span>
                                                    <span class="open-sans font-16px hitam tipis">
                                                        Rp. {{ number_format($produk->promo, 0, ',', '.') }}
                                                    </span>
                                                @else
                                                    <span class="open-sans font-16px hitam tipis mt-3">
                                                        Rp.
                                                        {{ number_format($produk->price, 0, ',', '.') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="subpage-menu" id="choco">
                            <h1 class="open-sans font-16px sedang biru">
                                Chocolate
                            </h1>
                            <div class="row col-sm-12">
                                @foreach ($choco as $produk)
                                    <div class="col-auto col-6 align-items-stretch"
                                        style="padding: 0px 8px !important; margin-bottom:18px !important">
                                        <div class="member">
                                            <div class="member-img">
                                                <a href="{{ route('show.menu', $produk->id) }}">
                                                    <img src="{{ asset('storage/' . $produk->image) }}"
                                                        class="img-fluid " alt="">
                                                </a>
                                            </div>
                                            <div class="member-info">
                                                <h6 class="open-sans font-16px sedang biru pt-1 mb-0">
                                                    {{ $produk->name }}
                                                </h6>
                                                @if ($produk->promo > 0)
                                                    <span class="open-sans font-12px tipis">
                                                        Rp. <strike>
                                                            {{ number_format($produk->price, 0, ',', '.') }}
                                                        </strike>
                                                    </span>
                                                    <span class="open-sans font-16px hitam tipis">
                                                        Rp. {{ number_format($produk->promo, 0, ',', '.') }}
                                                    </span>
                                                @else
                                                    <span class="open-sans font-16px hitam tipis mt-3">
                                                        Rp.
                                                        {{ number_format($produk->price, 0, ',', '.') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="subpage-menu" id="refresher">
                            <h1 class="open-sans font-16px sedang biru">
                                Refresher
                            </h1>
                            <div class="row col-sm-12">
                                @foreach ($refresher as $produk)
                                    <div class="col-auto col-6 align-items-stretch"
                                        style="padding: 0px 8px !important; margin-bottom:18px !important"">
                                                    <div class="   member">
                                        <div class="member-img">
                                            <a href="{{ route('show.menu', $produk->id) }}">
                                                <img src="{{ asset('storage/' . $produk->image) }}"
                                                    class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="member-info">
                                            <h6 class="open-sans font-16px sedang biru pt-1 mb-0">
                                                {{ $produk->name }}
                                            </h6>
                                            @if ($produk->promo > 0)
                                                <span class="open-sans font-12px tipis">
                                                    Rp. <strike>
                                                        {{ number_format($produk->price, 0, ',', '.') }}
                                                    </strike>
                                                </span>
                                                <span class="open-sans font-16px hitam tipis">
                                                    Rp. {{ number_format($produk->promo, 0, ',', '.') }}
                                                </span>
                                            @else
                                                <span class="open-sans font-16px hitam tipis mt-3">
                                                    Rp.
                                                    {{ number_format($produk->price, 0, ',', '.') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
          

        </section>
    </main>

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
                        <img src="{{ 'Assets/images/icon_footer/menu.svg' }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-auto mr-auto">
                    <a href="/store"> <img src="{{ 'Assets/images/icon_footer/store (2).svg' }}" class="img-fluid"
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

    {{-- ////////////////////////////////////// --}}
    {{-- footer aktif jika ada barang dikeranjang --}}

    {{-- <footer id="footer"
        style="border: 0; box-shadow:  0 0px 0px 0 rgb(0 0 0 / 0%) !important; background-color:transparent ;bottom:70px;">
        <div class="clearfix container">
            <a href="">
                <div class="card-keranjang3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-auto col-w40">
                                <div class="">
                                    <h1 class="tipis font-12px" style="color: white">0 item</h1>
                                    <h1 class="tebal font-14px" style="color: white">Rp.0</h1>
                                </div>
                            </div>
                            <div class="col-auto col-w40 mt-3">
                                <h1 class="tebal font-14px" style="color: white">
                                    Rp. <strike>0</strike>
                                </h1>
                            </div>
                            <div class="col-auto col-w20 mt-2">
                                <img src="{{ 'Assets/images/bag-2.svg' }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </footer> --}}
@endsection
