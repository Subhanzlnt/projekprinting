{{-- DINAMIS FOOTER BUT NOT FINISHED YET :) --}}
{{-- <footer id="footer">
    <div class="container footer-home">
        <div class=" row justify-content-between ">
            <div class="col-auto mr-auto">
                @if (\Request::is('/'))
                    <a href="{{ url('/') }}" class="active">
                        <img src="{{ 'Assets/images/icon_footer/beranda.svg' }}" class="img-fluid" alt="">
                    </a>
                @else
                    <a href="{{ url('/') }}">
                        <img src="{{ 'Assets/images/icon_footer/beranda (2).svg' }}" class="img-fluid" alt="">
                    </a>
                @endif
            </div>
            <div class="col-auto mr-auto">
                @if (\Request::is('/menu'))
                    <a href="{{ url('/menu') }}" class="active">
                        <img src="{{ 'Assets/images/icon_footer/menu.svg' }}" class="img-fluid" alt="">
                    </a>
                @else
                    <a href="{{ url('/menu') }}">
                        <img src="{{ 'Assets/images/icon_footer/menu (2).svg' }}" class="img-fluid" alt="">
                    </a>
                @endif
            </div>
            <div class="col-auto mr-auto">
                @if (\Request::is('/store'))
                    <a href="{{ url('/store') }}">
                        <img src="{{ 'Assets/images/icon_footer/store.svg' }}" class="img-fluid" alt="">
                    </a>
                @else
                    <a href="{{ url('/store') }}"> 
                        <img src="{{ 'Assets/images/icon_footer/store (2).svg' }}" class="img-fluid" alt="">
                    </a>
                @endif

            </div>
            <div class="col-auto mr-auto">
                @if (\Request::is('/voucher'))
                    <a href="{{ url('/voucher') }}">
                        <img src="{{ 'Assets/images/icon_footer/promo.svg' }}" class="img-fluid" alt="">
                    </a>
                @else
                    <a href="{{ url('/voucher') }}">
                        <img src="{{ 'Assets/images/icon_footer/promo (2).svg' }}" class="img-fluid" alt="">
                    </a>
                @endif

            </div>
            <div class="col-auto mr-auto">
                @if (\Request::is('/profile'))
                    <a href="{{ url('/profile') }}">
                        <img src="{{ 'Assets/images/icon_footer/akun.svg' }}" class="img-fluid" alt="">
                    </a>
                @else
                    <a href="{{ url('/profile') }}">
                        <img src="{{ 'Assets/images/icon_footer/akun (2).svg' }}" class="img-fluid" alt="">
                    </a>
                @endif

            </div>
        </div>
    </div>
</footer> --}}

<!-- End Footer -->

<script src="{{ asset('Company/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('Company/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Company/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('Company/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('Company/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('Company/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('Company/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('Company/assets/js/main.js') }}"></script>

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("tombol-menu");
    var tombols = header.getElementsByClassName("tombol");
    for (var i = 0; i < tombols.length; i++) {
        tombols[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#fav1").click(function() {
            $("#fav").appendTo($("#atas"));
            $("#refresher").prependTo($("#bawah"));
            $("#choco").prependTo($("#bawah"));
            $("#tea").prependTo($("#bawah"));
            $("#cof").prependTo($("#bawah"));
            $("#promo").prependTo($("#bawah"));

        });
        $("#promo1").click(function() {
            $("#promo").appendTo($("#atas"));
            $("#refresher").prependTo($("#bawah"));
            $("#choco").prependTo($("#bawah"));
            $("#tea").prependTo($("#bawah"));
            $("#cof").prependTo($("#bawah"));
            $("#fav").prependTo($("#bawah"));
        });
        $("#coffe1").click(function() {
            $("#cof").appendTo($("#atas"));
            $("#refresher").prependTo($("#bawah"));
            $("#choco").prependTo($("#bawah"));
            $("#tea").prependTo($("#bawah"));
            $("#promo").prependTo($("#bawah"));
            $("#fav").prependTo($("#bawah"));
        });
        $("#tea1").click(function() {
            $("#tea").appendTo($("#atas"));
            $("#refresher").prependTo($("#bawah"));
            $("#choco").prependTo($("#bawah"));
            $("#cof").appendTo($("#bawah"));
            $("#promo").prependTo($("#bawah"));
            $("#fav").prependTo($("#bawah"));
        });
        $("#choco1").click(function() {
            $("#choco").appendTo($("#atas"));
            $("#refresher").prependTo($("#bawah"));
            $("#tea").prependTo($("#bawah"));
            $("#cof").prependTo($("#bawah"));
            $("#promo").prependTo($("#bawah"));
            $("#fav").prependTo($("#bawah"));
        });
        $("#refresher1").click(function() {
            $("#refresher").appendTo($("#atas"));
            $("#choco").prependTo($("#bawah"));
            $("#tea").prependTo($("#bawah"));
            $("#cof").appendTo($("#bawah"));
            $("#promo").prependTo($("#bawah"));
            $("#fav").prependTo($("#bawah"));
        });
    });
</script>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
