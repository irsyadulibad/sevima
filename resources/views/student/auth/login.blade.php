@extends('layouts.student.auth')

@section('content')
<div class="row justify-content-center form-bg-image" data-background-lg="/img/illustrations/signin.svg">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
            <div class="text-center text-md-center mb-4 mt-md-0">
                <h1 class="mb-0 h3">Masuk ke platform kami</h1>
            </div>
            <form action="{{ route('admin.login') }}" class="mt-4" method="post">
                @csrf
                <div class="form-group mb-4">
                    <label for="email">Email Anda</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                        </span>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@company.com" id="email" name="email" value="{{ old('email') }}" autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>  
                </div>
                <!-- End of Form -->
                <div class="form-group">
                    <!-- Form -->
                    <div class="form-group mb-4">
                        <label for="password">Kata sandi</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon2">
                                <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                            </span>
                            <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">

                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>  
                    </div>
                    <!-- End of Form -->
                    <div class="d-flex justify-content-between align-items-top mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember" @checked(old('remember'))>
                            <label class="form-check-label mb-0" for="remember">
                              Ingat saya
                            </label>
                        </div>
                        <div><a href="/" class="small text-right">Lupa kata sandi?</a></div>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-gray-800">Masuk</button>
                </div>
            </form>
            {{-- <div class="d-flex justify-content-center align-items-center mt-4">
                <span class="fw-normal">
                    Not registered?
                    <a href="./sign-up.html" class="fw-bold">Create account</a>
                </span>
            </div> --}}
        </div>
    </div>
</div>
@endsection