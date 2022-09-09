@extends('layout.default')

@section('content')
    <main class="form-signin">
        <div class="container header-profil">
            <div class="row justify-content-start">
                <div class="col-2 back-btn" >
                    <a href="{{ url('/') }}"> <img src="{{ 'Assets/images/close-circle.svg' }}" alt=""></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center" >
                    <h1 class="font-16px tebal biru"> Login</h1>
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

                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        {{-- <h1 class="h3 mb-3 fw-normal">Please sign in</h1> --}}

                        <div class="form-floating">
                            <input type="email" class="form-control form-custom mb-1 @error('email') is-invalid @enderror"
                                id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required
                                autofocus>
                            <label for="email">Alamat Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        Masukkan email yang benar
                                    </strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control form-custom @error('password') is-invalid @enderror"
                                id="password" placeholder="password" name="password" value="{{ old('password') }}"
                                required>
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

                        <button class="w-100 btn btn-lg btn-primary my-4" type="submit"
                            style="background-color:#293881">Masuk</button>
                        {{-- <a href="{{ route('register') }}">Register</a> --}}
                    </form>

                    <div class="justify-content-center my-4">
                        <img src="{{ asset('Assets/images/atau.svg') }}" style="width:100%" alt="">
                        <div class="row justify-content-center my-3">
                            <img src="{{ asset('Assets/images/google.svg') }}" style="width:60px; height:60px" alt="">
                            <img src="{{ asset('Assets/images/facebook.svg') }}" style="width:60px; height:60px " alt="">
                        </div>
                    </div>
                    <small class="d-block text-center">Belum punya akun? <a href="/register">Register</a></small>
                </div>
            </div>
        </div>
    </main>
@endsection
