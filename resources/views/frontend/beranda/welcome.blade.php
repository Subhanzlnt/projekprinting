@extends('layout.default')

@section('content')
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
@endsection
