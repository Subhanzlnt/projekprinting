@extends('layout.default')

@section('content')
<style>
    @media screen and (min-width: 0px) and (max-width: 1200px) {
        #mobile {
            display: block;
        }

        #website {
            display: none;
        }

        /* tampilan mobile*/

    }

    @media screen and (min-width: 1201px) and (max-width: 2048px) {
        #mobile {
            display: none;
        }

        #website {
            display: block;
        }


        /* tampilan web */
    }

</style>

<div id="mobile">
    <nav id="navbar" class="navbar order-last order-sm">
        <ul>
            <li><a href="http://about.minumint.com/mitra">Kemitraan</a></li>
            <li><a href="http://about.minumint.com/tentang-kami">Tentang Kami</a></li>
            <li><a href="http://about.minumint.com/karir">Karir</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

    <!-- ======= Hero Section ======= -->
    <div class="content">
        <section id="hero">
            <div id="heroCarousel" data-bs-interval="4000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                        style="background-image: url('../Company/assets/img/slide/gambar1.JPG')">

                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('../Company/assets/img/slide/gambar2.png')">

                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('../Company/assets/img/slide/gambar3.png')">

                    </div>

                    <!-- Slide 4 -->
                    <div class="carousel-item" style="background-image: url('../Company/assets/img/slide/gambar4.png')">

                    </div>

                </div>

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            </div>
            <br>
        </section><!-- End Hero -->

        <main id="main">
            <section id="team" class="team section-bg">
                <div class="clearfix container padding-24">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card card-saldo ">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-auto col-w80">
                                        <h6 class="card-subtitle font-12px tipis">Saldo :</h6>
                                        <h3 class="font-18px tebal biru">Rp. ---.---,-- </h3>
                                    </div>
                                    <div class="col-auto col-w20">
                                        <button class="btn tombol-topup font-12px tipis" type="submit">Top Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card card-lokasi">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-auto col-w65">
                                        <h3 class="font-14px tebal biru">Minumint Kertajaya</h3>
                                        <h6 class="font-10px tipis">Jl. Kertajaya no.72, Kec. Gubeng...</h6>
                                    </div>
                                    <div class="col-auto col-w35 ">
                                        <h3 class="font-14px tebal biru">- KM</h3>
                                        <h6 class="font-10px tipis">Dari Lokasimu</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <a class="btn tombol-pesan" href="#" role="button">Pesan Sekarang</a>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-auto ">
                            <h5 class="font-14px tebal biru"> Order & koleksi Star (0/5)</h5>
                        </div>
                        <div class="col">
                            <h6 class="font-10px tipis text-end"> Berakhir -- --- ----</h6>
                        </div>
                        <div class="col-lg-12 col-md-12 d-flex justify-content-center">
                            <div class="col-md-2 p-1">
                                <img src="{{ 'Assets/images/star1.svg' }}" class="img-fluid" alt="">

                            </div>
                            <div class="col-md-2 p-1">
                                <img src="{{ 'Assets/images/star2.svg' }}" class="img-fluid" alt="">

                            </div>
                            <div class="col-md-2 p-1">
                                <img src="{{ 'Assets/images/star2.svg' }}" class="img-fluid" alt="">

                            </div>
                            <div class="col-md-2 p-1">
                                <img src="{{ 'Assets/images/star2.svg' }}" class="img-fluid" alt="">

                            </div>
                            <div class="col-md-2 p-1">
                                <img src="{{ 'Assets/images/star2.svg' }}" class="img-fluid" alt="">

                            </div>
                            <div class="col-md-2 p-1">
                                <img src="{{ 'Assets/images/star3.svg' }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="row mb-1 ">
                        <div class="col-auto ">
                            <h4 class="font-14px tebal biru">FLASH SALE</h4>
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
                        <div class="col ">
                            <a href="{{ route('menu') }}">
                                <h6 class="font-10px tipis text-end">Lihat Semua</h6>
                            </a>
                        </div>
                    </div>
                    <?php
                    

                    // SET VARIABEL WAKTU FLASHSALE
                    // INTERVAL FLASHSALE ADALAH 1 JAM
                    // $databasetime DIGUNAKAN UNTUK MEMFILTER FLASHSALE YANG BERJALAN
                    
                    $databasetime1 = strtotime('12:00:00');
                    $databasetime2 = strtotime('13:00:00');
                    $databasetime3 = strtotime('15:00:00');
                    $databasetime4 = strtotime('16:00:00');
                    $databasetime5 = strtotime('18:00:00');
                    $databasetime6 = strtotime('19:00:00');
                    $curtime = time();
                    
                    // $curtime ADALAH WAKTU SEKARANG
                    // HASIL OUTPUT DARI $databasetime DAN $curtime ADALAH STRING JADI GAMPANG UNTUK DIBANDINGKAN
                  
                    ?>
                 
                    <div class="row col-sm-12" style="padding-bottom: 70px" id="demo">
                        @foreach ($promo as $produk)
                            @if ($produk->time_countdown == null && $produk->day_countdown == null)
                                {{-- CEK PRODUK JIKA TIDAK ADA FLASHSALE --}}
                            @else
                                {{-- CEK PRODUK JIKA ADA FLASHSALE --}}
                                <?php
                                $day = date('l');
                                ?>
                                @if ($produk->day_countdown == $day)
                                {{-- CEK HARI FLASHSALE JIKA SAMA DENGAN HARI INI --}}
                                
                                    @if ($curtime < $databasetime1)
                                    {{-- PRA FLASHSALE 1 ATAU SEBELUM JAM 12 --}}
                                    {{-- PRA FLASHSALE 1 PRODUK TIDAK BISA DI KLIK --}}
                                    {{-- JAM 12 MASUK DALAM PHASE 1, JAM 15 MASUK PHASE 2, JAM 18 MASUK PHAE 3 --}}
                                    {{-- $produk->phase_countdown DIGUNAKAN UNTUK MEMFILTER PRODUK PADA JAM TERTENTU --}}
                                        @if ($produk->phase_countdown == '1')
                                            <?php
                                            // unset($waktu);
                                            // $waktu ADALAH BATAS COUNTDOWN
                                            $waktu = '12:00:00';
                                            
                                            ?>

                                            <div class="col-auto col-w33 d-flex align-items-stretch mb-2">
                                                <div class="member">
                                                    {{-- LINK HREF DIHILINGKAN AGAR TIDAK BISA DIKLIK --}}
                                                    {{-- <a href="{{ route('show.menu', $produk->id) }}" class="pe-none" tabindex="-1" aria-disabled="true"> --}}
                                                    <div class="member-img">
                                                        <img src="{{ asset('storage/' . $produk->image) }}"
                                                            class="img-fluid " alt="{{ $produk->name }}">

                                                    </div>
                                                    <div class="member-info" style="height: 50px !important">
                                                        <h6 class="open-sans font-10px sedang biru pt-1 mb-0">
                                                            {{ $produk->name }}
                                                        </h6>
                                                        <span class="open-sans font-8px tipis">Rp. <strike>
                                                                {{ number_format($produk->price, 0, ',', '.') }}</strike></span>

                                                        <span class="open-sans font-10px hitam tipis">Rp.
                                                            {{ number_format($produk->promo, 0, ',', '.') }}</span>
                                                    </div>
                                                    {{-- </a> --}}
                                                </div>
                                            </div>
                                        @else
                                            {{-- KOSONG --}}
                                        @endif
                                    @elseif ($curtime >= $databasetime1 && $curtime < $databasetime2)
                                    {{-- FLASHSALE PHASE 1, LEBIH DARI JAM 12 --}}
                                    {{-- FLASHSALE PHASE 1 BISA DIKLIK --}}
                                    {{-- BERAKHIR SAMPAI JAM 13.00 --}}
                                        @if ($produk->phase_countdown == '1')
                                            <?php
                                            // unset($waktu);
                                            // $waktu ADALAH BATAS COUNTDOWN
                                            $waktu = '13:00:00';
                                            ?>

                                            <div class="col-auto col-w33 d-flex align-items-stretch mb-2">
                                                <div class="member">
                                                    <a href="{{ route('show.menu', $produk->id) }}"
                                                        class="pe-none" tabindex="-1" aria-disabled="true">
                                                        <div class="member-img">
                                                            <img src="{{ asset('storage/' . $produk->image) }}"
                                                                class="img-fluid " alt="{{ $produk->name }}">

                                                        </div>
                                                        <div class="member-info" style="height: 50px !important">
                                                            <h6 class="open-sans font-10px sedang biru pt-1 mb-0">
                                                                {{ $produk->name }}
                                                            </h6>
                                                            <span class="open-sans font-8px tipis">Rp. <strike>
                                                                    {{ number_format($produk->price, 0, ',', '.') }}</strike></span>

                                                            <span class="open-sans font-10px hitam tipis">Rp.
                                                                {{ number_format($produk->promo, 0, ',', '.') }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @else
                                            {{-- KOSONG --}}
                                        @endif
                                    @elseif ($curtime < $databasetime3)
                                    {{-- PRA FLASHSALE 2,SEBELUM JAM 15.00 DAN SESUDAH JAM 13.00 --}}
                                    {{-- PRODUK TIDAK BISA DIKLIK --}}
                                        @if ($produk->phase_countdown == '2')
                                       
                                            <?php
                                            // unset($waktu);
                                            $waktu = '15:00:00';
                                            ?>

                                            <div class="col-auto col-w33 d-flex align-items-stretch mb-2">
                                                <div class="member">
                                                    {{-- <a href="{{ route('show.menu', $produk->id) }}"> --}}
                                                        <div class="member-img">
                                                            <img src="{{ asset('storage/' . $produk->image) }}"
                                                                class="img-fluid " alt="{{ $produk->name }}">
                                                        </div>
                                                        <div class="member-info" style="height: 50px !important">
                                                            <h6 class="open-sans font-10px sedang biru pt-1 mb-0">
                                                                {{ $produk->name }}
                                                            </h6>
                                                            <span class="open-sans font-8px tipis">Rp. <strike>
                                                                    {{ number_format($produk->price, 0, ',', '.') }}</strike></span>

                                                            <span class="open-sans font-10px hitam tipis">Rp.
                                                                {{ number_format($produk->promo, 0, ',', '.') }}</span>
                                                        </div>
                                                    {{-- </a> --}}
                                                </div>
                                            </div>
                                        @else
                                            {{-- kosong --}}
                                        @endif
                                    @elseif ($curtime >= $databasetime2 && $curtime <= $databasetime3)
                                    {{-- FLASHSALE PHASE 2, SESUDAH JAM 15.00, SAMPAI JAM 16.00 --}}
                                        @if ($produk->phase_countdown == '2')
                                            <?php
                                            // unset($waktu);
                                            $waktu = '16:00:00';
                                            ?>

                                            <div class="col-auto col-w33 d-flex align-items-stretch mb-2">
                                                <div class="member">
                                                    <a href="{{ route('show.menu', $produk->id) }}">
                                                        <div class="member-img">
                                                            <img src="{{ asset('storage/' . $produk->image) }}"
                                                                class="img-fluid " alt="{{ $produk->name }}">

                                                        </div>
                                                        <div class="member-info" style="height: 50px !important">
                                                            <h6 class="open-sans font-10px sedang biru pt-1 mb-0">
                                                                {{ $produk->name }}
                                                            </h6>
                                                            <span class="open-sans font-8px tipis">Rp. <strike>
                                                                    {{ number_format($produk->price, 0, ',', '.') }}</strike></span>

                                                            <span class="open-sans font-10px hitam tipis">Rp.
                                                                {{ number_format($produk->promo, 0, ',', '.') }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @else
                                            {{-- kosong --}}
                                        @endif
                                    @elseif ($curtime < $databasetime5)
                                    {{-- PRA FLASHSALE 3 --}}
                                    {{-- SEBELUM JAM 18.00 --}}
                                    {{-- PRODUK TIDAK BISA DIKLIK --}}
                                        @if ($produk->phase_countdown == '3')
                                            <?php
                                            // unset($waktu);
                                            $waktu = '18:00:00';
                                            ?>
                                            <div class="col-auto col-w33 d-flex align-items-stretch mb-2">
                                                <div class="member">
                                                    {{-- <a href="{{ route('show.menu', $produk->id) }}"> --}}
                                                        <div class="member-img">
                                                            <img src="{{ asset('storage/' . $produk->image) }}"
                                                                class="img-fluid " alt="{{ $produk->name }}">

                                                        </div>
                                                        <div class="member-info" style="height: 50px !important">
                                                            <h6 class="open-sans font-10px sedang biru pt-1 mb-0">
                                                                {{ $produk->name }}
                                                            </h6>
                                                            <span class="open-sans font-8px tipis">Rp. <strike>
                                                                    {{ number_format($produk->price, 0, ',', '.') }}</strike></span>

                                                            <span class="open-sans font-10px hitam tipis">Rp.
                                                                {{ number_format($produk->promo, 0, ',', '.') }}</span>
                                                        </div>
                                                    {{-- </a> --}}
                                                </div>
                                            </div>
                                        @else
                                            {{-- kosong --}}
                                        @endif
                                    @elseif ($curtime <= $databasetime4 || $curtime > $databasetime5)
                                    {{-- FLASHSALE PHASE 3, SESUDAH JAM 18.00,SAMPAI JAM 19.00 --}}
                                        @if ($produk->phase_countdown == '3')
                                            <?php
                                            // unset($waktu);
                                            $waktu = '19:00:00';
                                            ?>
                                            <div class="col-auto col-w33 d-flex align-items-stretch mb-2">
                                                <div class="member">
                                                    <a href="{{ route('show.menu', $produk->id) }}">
                                                        <div class="member-img">
                                                            <img src="{{ asset('storage/' . $produk->image) }}"
                                                                class="img-fluid " alt="{{ $produk->name }}">

                                                        </div>
                                                        <div class="member-info" style="height: 50px !important">
                                                            <h6 class="open-sans font-10px sedang biru pt-1 mb-0">
                                                                {{ $produk->name }}
                                                            </h6>
                                                            <span class="open-sans font-8px tipis">Rp. <strike>
                                                                    {{ number_format($produk->price, 0, ',', '.') }}</strike></span>

                                                            <span class="open-sans font-10px hitam tipis">Rp.
                                                                {{ number_format($produk->promo, 0, ',', '.') }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @else
                                            {{-- kosong --}}
                                        @endif
                                    @elseif ($curtime > $databasetime6)
                                    {{-- FLASHSALE BERAKHIR --}}
                                    
                                        <?php
                                        // unset($waktu);
                                        // $waktu = '19:00:00';
                                        ?>
                                        phaseberakhir
                                        <script>
                                            // clearInterval(jam);
                                            // clearInterval(f);
                                            // clearInterval(waktu);
                                        </script>
                                    @else
                                    {{-- kosong --}}
                                    
                                    @endif

                                @else
                                    {{-- kosong --}}
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        </main><!-- End #main -->
    </div>

    <footer id="footer">
        <div class="container footer-home">
            <div class=" row justify-content-between ">
                <div class="col-auto mr-auto">
                    <a href="{{ url('/') }}">
                        <img src="{{ 'Assets/images/icon_footer/beranda.svg' }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-auto mr-auto">
                    <a href="/menu">
                        <img src="{{ 'Assets/images/icon_footer/menu (2).svg' }}" class="img-fluid" alt="">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        
        // SET TANGGAL 
        const a = new Date();

        // MENGAMBIL var jam dari $waktu
        var jam = "<?php echo $waktu; ?>";

        var tahun = a.getFullYear();
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
            "November", "December"
        ];
        var bulan = months[a.getMonth()];
        var tanggal = a.getDate();

        // MENGAMBIL TAHUN BULAN TANGGAL MANUAL 
        // OUTPUT var f YANG DIHARAPKAN 'May 1, 2022 12:00:00'
        var f = bulan + ' ' + tanggal + ', ' + tahun + ' ' + jam;



        // console.log(f);
        // const a = ;
        // var k = d.setHours(a);
        // d.setHours(15)

        // const d = new Date();
        // var l = d.setHours(15);
        // console.log(r);
        // var r = k.getTime();
        // var countDownDate = d.getTime();

        // const d = new Date();
        //d.setHours(15);

         // OUTPUT var f 'May 1, 2022 12:00:00' DIGUNAKAN UNTUK COUNTDOWN
        var countDownDate = new Date(f).getTime();
        // delete countDownDate;
        // console.log(countDownDate);

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            // document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            // minutes + "m " + seconds + "s ";
            document.getElementById("jam").innerHTML = hours;
            document.getElementById("menit").innerHTML = minutes;
            document.getElementById("detik").innerHTML = seconds;


            // If the count down is over, write some text
            if (distance < 0) {
                // JIKA FLASH SALE TELAH SELESAI
                // MENGGUNAKAN FUNGSI RELOAD PAGE AGAR FLASHSALE SELANJUTNYA TAMPIL
                window.location.reload();
                location.reload();
                // FATAL ERROR
                // JIKA FLASHSALE BERKAKHIR SAMPE FLASHSALE PHASE 3 MAKA WEB AKAN MEREFRESH TERUS MENERUS LOOPING


               
                
                // FATAL ERROR 
                // COMMENT DIBAWAH ADALAH SOLUSI DARI WEB YANG LOOPING REFRESH
                // TAPI AKAN MENAMPILKAN ERROR UNDEFINED $waktu KARNA FUNGSI DIBAWAH MENGHAPUS VARIABEL WAKTU

                // clearInterval(x);
                // delete jam;
                // delete F;
                // clearInterval(jam);
                // clearInterval(f);
                // clearInterval(waktu);
                // delete waktu;
                // delete countDownDate;

                document.getElementById("demo").innerHTML = "FLASH SALE TELAH BERAKHIR";
                document.getElementById("jam").innerHTML = "00";
                document.getElementById("menit").innerHTML = "00";
                document.getElementById("detik").innerHTML = "00";
            }
        }, 1000);
    </script>
</div>
<div id="website"> 
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    <span>Minumint</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="user.html" class="nav-link">
                            <i class="link-icon" data-feather="user"></i>
                            <span class="link-title">User</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="briefcase"></i>
                            <span class="link-title">Kategori</span>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="produk.html" class="nav-link">
                            <i class="link-icon" data-feather="coffee"></i>
                            <span class="link-title">Produk</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="voucher.html" class="nav-link">
                            <i class="link-icon" data-feather="gift"></i>
                            <span class="link-title">Voucher</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="transaksi.html" class="nav-link">
                            <i class="link-icon" data-feather="dollar-sign"></i>
                            <span class="link-title">Transaksi</span>
                        </a>
                    </li>
                   
                </ul>
            </div>
        </nav>
        <nav class="settings-sidebar">
            <div class="sidebar-body">
                <a href="#" class="settings-sidebar-toggler">
                    <i data-feather="settings"></i>
                </a>
                <h6 class="text-muted mb-2">Sidebar:</h6>
                <div class="mb-3 pb-3 border-bottom">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                            value="sidebar-light" checked>
                        <label class="form-check-label" for="sidebarLight">
                            Light
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                            value="sidebar-dark">
                        <label class="form-check-label" for="sidebarDark">
                            Dark
                        </label>
                    </div>
                </div>
                <div class="theme-wrapper">
                    <h6 class="text-muted mb-2">Light Theme:</h6>
                    <a class="theme-item active" href="../demo1/dashboard.html">
                        <img src="../assets/images/screenshots/light.jpg" alt="light theme">
                    </a>
                    <h6 class="text-muted mb-2">Dark Theme:</h6>
                    <a class="theme-item" href="../demo2/dashboard.html">
                        <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
                    </a>
                </div>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-text">
                                <i data-feather="search"></i>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span
                                    class="ms-1 me-1 d-none d-md-inline-block">English</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us"
                                        title="us" id="us"></i> <span class="ms-1"> English </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr"
                                        title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de"
                                        title="de" id="de"></i> <span class="ms-1"> German </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt"
                                        title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es"
                                        title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p class="mb-0 fw-bold">Web Apps</p>
                                    <a href="javascript:;" class="text-muted">Edit</a>
                                </div>
                                <div class="row g-0 p-1">
                                    <div class="col-3 text-center">
                                        <a href="pages/apps/chat.html"
                                            class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i
                                                data-feather="message-square" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Chat</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="pages/apps/calendar.html"
                                            class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i
                                                data-feather="calendar" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Calendar</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="pages/email/inbox.html"
                                            class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i
                                                data-feather="mail" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Email</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="pages/general/profile.html"
                                            class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i
                                                data-feather="instagram" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Profile</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p>9 New Messages</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="p-1">
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="d-flex justify-content-between flex-grow-1">
                                            <div class="me-4">
                                                <p>Leonardo Payne</p>
                                                <p class="tx-12 text-muted">Project status</p>
                                            </div>
                                            <p class="tx-12 text-muted">2 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="d-flex justify-content-between flex-grow-1">
                                            <div class="me-4">
                                                <p>Carl Henson</p>
                                                <p class="tx-12 text-muted">Client meeting</p>
                                            </div>
                                            <p class="tx-12 text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="d-flex justify-content-between flex-grow-1">
                                            <div class="me-4">
                                                <p>Jensen Combs</p>
                                                <p class="tx-12 text-muted">Project updates</p>
                                            </div>
                                            <p class="tx-12 text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="d-flex justify-content-between flex-grow-1">
                                            <div class="me-4">
                                                <p>Amiah Burton</p>
                                                <p class="tx-12 text-muted">Project deatline</p>
                                            </div>
                                            <p class="tx-12 text-muted">2 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="d-flex justify-content-between flex-grow-1">
                                            <div class="me-4">
                                                <p>Yaretzi Mayo</p>
                                                <p class="tx-12 text-muted">New record</p>
                                            </div>
                                            <p class="tx-12 text-muted">5 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p>6 New Notifications</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="p-1">
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="gift"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>New Order Recieved</p>
                                            <p class="tx-12 text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="alert-circle"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Server Limit Reached!</p>
                                            <p class="tx-12 text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <img class="wd-30 ht-30 rounded-circle"
                                                src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>New customer registered</p>
                                            <p class="tx-12 text-muted">2 sec ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="layers"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Apps are ready for update</p>
                                            <p class="tx-12 text-muted">5 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="download"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Download completed</p>
                                            <p class="tx-12 text-muted">6 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                    alt="profile">
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80"
                                            alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="tx-16 fw-bolder">Amiah Burton</p>
                                        <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        <a href="pages/general/profile.html" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">

                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                            <span class="input-group-text input-group-addon bg-transparent border-primary"><i
                                    data-feather="calendar" class=" text-primary"></i></span>
                            <input type="text" class="form-control border-primary bg-transparent">
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="printer"></i>
                            Print
                        </button>
                        <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                            Download Report
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-xl-12 stretch-card">
                        <div class="row flex-grow-1">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">New Customers</h6>
                                            <div class="dropdown mb-2">
                                                <button class="btn p-0" type="button" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="eye"
                                                            class="icon-sm me-2"></i> <span class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="edit-2"
                                                            class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="trash"
                                                            class="icon-sm me-2"></i> <span class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="printer"
                                                            class="icon-sm me-2"></i> <span class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="download"
                                                            class="icon-sm me-2"></i> <span class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">3,897</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span>+3.3%</span>
                                                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">New Orders</h6>
                                            <div class="dropdown mb-2">
                                                <button class="btn p-0" type="button" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="eye"
                                                            class="icon-sm me-2"></i> <span class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="edit-2"
                                                            class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="trash"
                                                            class="icon-sm me-2"></i> <span class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="printer"
                                                            class="icon-sm me-2"></i> <span class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="download"
                                                            class="icon-sm me-2"></i> <span class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">35,084</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-danger">
                                                        <span>-2.8%</span>
                                                        <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Growth</h6>
                                            <div class="dropdown mb-2">
                                                <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="eye"
                                                            class="icon-sm me-2"></i> <span class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="edit-2"
                                                            class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="trash"
                                                            class="icon-sm me-2"></i> <span class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="printer"
                                                            class="icon-sm me-2"></i> <span class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="download"
                                                            class="icon-sm me-2"></i> <span class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">89.87%</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span>+2.8%</span>
                                                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-12 col-xl-12 grid-margin stretch-card">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                                    <h6 class="card-title mb-0">Revenue</h6>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton3"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="trash" class="icon-sm me-2"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="printer" class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="download" class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col-md-7">
                                        <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business
                                            has from its normal business activities, usually from the sale of goods and
                                            services to customers.</p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-md-end">
                                        <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-outline-primary">Today</button>
                                            <button type="button"
                                                class="btn btn-outline-primary d-none d-md-block">Week</button>
                                            <button type="button" class="btn btn-primary">Month</button>
                                            <button type="button" class="btn btn-outline-primary">Year</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="revenueChart"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline mb-2">
                                    <h6 class="card-title mb-0">Monthly sales</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton4"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="trash" class="icon-sm me-2"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="printer" class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="download" class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted">Sales are activities related to selling or the number of goods or
                                    services sold in a given time period.</p>
                                <div id="monthlySalesChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Cloud storage</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton5"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="trash" class="icon-sm me-2"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="printer" class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="download" class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="storageChart"></div>
                                <div class="row mb-3">
                                    <div class="col-6 d-flex justify-content-end">
                                        <div>
                                            <label
                                                class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Total
                                                storage <span
                                                    class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
                                            <h5 class="fw-bolder mb-0 text-end">8TB</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label
                                                class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span
                                                    class="p-1 me-1 rounded-circle bg-primary"></span> Used
                                                storage</label>
                                            <h5 class="fw-bolder mb-0">~5TB</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary">Upgrade storage</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline mb-2">
                                    <h6 class="card-title mb-0">Inbox</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton6"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="trash" class="icon-sm me-2"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="printer" class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="download" class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
                                        <div class="me-3">
                                            <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35"
                                                alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-body mb-2">Leonardo Payne</h6>
                                                <p class="text-muted tx-12">12.30 PM</p>
                                            </div>
                                            <p class="text-muted tx-13">Hey! there I'm available...</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                                        <div class="me-3">
                                            <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35"
                                                alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-body mb-2">Carl Henson</h6>
                                                <p class="text-muted tx-12">02.14 AM</p>
                                            </div>
                                            <p class="text-muted tx-13">I've finished it! See you so..</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                                        <div class="me-3">
                                            <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35"
                                                alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-body mb-2">Jensen Combs</h6>
                                                <p class="text-muted tx-12">08.22 PM</p>
                                            </div>
                                            <p class="text-muted tx-13">This template is awesome!</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                                        <div class="me-3">
                                            <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35"
                                                alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-body mb-2">Amiah Burton</h6>
                                                <p class="text-muted tx-12">05.49 AM</p>
                                            </div>
                                            <p class="text-muted tx-13">Nice to meet you</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                                        <div class="me-3">
                                            <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35"
                                                alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                                                <p class="text-muted tx-12">01.19 AM</p>
                                            </div>
                                            <p class="text-muted tx-13">Hey! there I'm available...</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline mb-2">
                                    <h6 class="card-title mb-0">Projects</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton7"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="trash" class="icon-sm me-2"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="printer" class="icon-sm me-2"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="download" class="icon-sm me-2"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="pt-0">#</th>
                                                <th class="pt-0">Project Name</th>
                                                <th class="pt-0">Start Date</th>
                                                <th class="pt-0">Due Date</th>
                                                <th class="pt-0">Status</th>
                                                <th class="pt-0">Assign</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>NobleUI jQuery</td>
                                                <td>01/01/2021</td>
                                                <td>26/04/2021</td>
                                                <td><span class="badge bg-danger">Released</span></td>
                                                <td>Leonardo Payne</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>NobleUI Angular</td>
                                                <td>01/01/2021</td>
                                                <td>26/04/2021</td>
                                                <td><span class="badge bg-success">Review</span></td>
                                                <td>Carl Henson</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>NobleUI ReactJs</td>
                                                <td>01/05/2021</td>
                                                <td>10/09/2021</td>
                                                <td><span class="badge bg-info">Pending</span></td>
                                                <td>Jensen Combs</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>NobleUI VueJs</td>
                                                <td>01/01/2021</td>
                                                <td>31/11/2021</td>
                                                <td><span class="badge bg-warning">Work in Progress</span>
                                                </td>
                                                <td>Amiah Burton</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>NobleUI Laravel</td>
                                                <td>01/01/2021</td>
                                                <td>31/12/2021</td>
                                                <td><span class="badge bg-danger">Coming soon</span></td>
                                                <td>Yaretzi Mayo</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>NobleUI NodeJs</td>
                                                <td>01/01/2021</td>
                                                <td>31/12/2021</td>
                                                <td><span class="badge bg-primary">Coming soon</span></td>
                                                <td>Carl Henson</td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom">3</td>
                                                <td class="border-bottom">NobleUI EmberJs</td>
                                                <td class="border-bottom">01/05/2021</td>
                                                <td class="border-bottom">10/11/2021</td>
                                                <td class="border-bottom"><span class="badge bg-info">Pending</span>
                                                </td>
                                                <td class="border-bottom">Jensen Combs</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

            </div>

            <!-- partial:partials/_footer.html -->
            <footer
                class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-muted mb-1 mb-md-0">Copyright © 2021 <a href="https://www.nobleui.com"
                        target="_blank">NobleUI</a>.</p>
                <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm"
                        data-feather="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>
</div>
    
@endsection
