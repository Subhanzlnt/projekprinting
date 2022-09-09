@extends('layout.default')

@section('content')
    <main class="form-signin">
        <div class="container header-profil">
            <div class="row justify-content-start">
                <div class="col-2" style="z-index: 3 !important; position:absolute">
                    <a href="{{ url('/') }}"> <img src="{{ 'Assets/images/close-circle.svg' }}" alt=""></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h1 class="font-16px tebal biru"> Register</h1>
                </div>
            </div>
        </div>

        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @elseif(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="clearfix container padding-24">
            <div class="page-profil">
                <div class="col-sm-12 ">
                    <div class="row justify-content-center text-center">
                        <img src="{{ asset('Assets/images/logo.svg') }}" style="width : 80px; height: 80px;" alt="">
                        <h1 class="font-16px tebal "> </h1>
                    </div>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        {{-- <h1 class="h3 mb-3 fw-normal">Sign Up</h1> --}}
                        <div class="form-floating">
                            <input type="text" class="form-control form-custom @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Nama" required autofocus value="{{ old('name') }}">
                            <label for="name">Nama</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        @if ($message == 'validation.regex')
                                            Masukan nama dengan benar
                                        @else
                                            Nama terlalu pendek
                                        @endif
                                    </strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control form-custom @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Email" required value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        Email sudah ada
                                    </strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control form-custom @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Kata Sandi" required value="{{ old('password') }}">
                            <label for="password">Kata Sandi</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        Password terlalu pendek
                                    </strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div> --}}
                        <button class="w-100 btn btn-lg btn-primary my-4" type="submit"   style="background-color:#293881">Daftar</button>
                        {{-- <a href="{{ route('login') }}">Login</a> --}}
                    </form>

                    <div class="justify-content-center my-4">
                        <img src="{{ asset('Assets/images/atau.svg') }}" style="width:100%" alt="">
                        <div class="row justify-content-center my-3">
                            <img src="{{ asset('Assets/images/google.svg') }}" style="width:60px; height:60px" alt="">
                            <img src="{{ asset('Assets/images/facebook.svg') }}" style="width:60px; height:60px " alt="">
                        </div>
                    </div>
                    <small class="d-block text-center">Sudah punya akun? <a href="/login">Login</a></small>


                </div>
            </div>
        </div>

    </main>
@endsection
