@extends('layouts.auth')
@section('content')
    <!-- Page content -->
    <section class="position-relative h-100 pt-5 pb-4">

        <!-- Sign in form -->
        <div class="container d-flex flex-wrap justify-content-center  h-100 pt-5">
            <div class="w-100  pt-1 pt-md-4 pb-4" style="max-width: 526px;">
                <h1 class="text-center text-xl-end mb-5">ورود</h1>
                {{-- <p class="text-center text-xl-end pb-3 mb-3">Don’t have an account yet? <a
                        href="account-signup.html">Register here.</a></p> --}}
                <form action="{{ route('login') }}" method="post" class="mb-2">
                    @csrf
                    <div class="position-relative mb-4">
                        <label for="email" class="form-label fs-base">ایمیل</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" required>
                        {{-- <div class="invalid-feedback position-absolute start-0 top-100">Please enter a valid email address!
                        </div> --}}
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fs-base">رمز عبور</label>
                        <div class="password-toggle">
                            <input type="password" name="password" id="password" class="form-control form-control-lg"
                                required>
                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox">
                                <span class="password-toggle-indicator"></span>
                            </label>
                            {{-- <div class="invalid-feedback position-absolute start-0 top-100">
                                Please enter your password!
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="mb-4">
                        <div class="form-check">
                            <input type="checkbox" id="remember" class="form-check-input">
                            <label for="remember" class="form-check-label fs-base">Remember me</label>
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary shadow-primary btn-lg w-100">ادامه</button>
                </form>
                {{-- <a href="#" class="btn btn-link btn-lg w-100">Forgot your password?</a> --}}
                <hr class="my-4">
                {{-- <h6 class="text-center mb-4">Or sign in with your social network</h6> --}}
                {{-- <div class="row row-cols-1 row-cols-sm-2">
                    <div class="col mb-3">
                        <a href="#" class="btn btn-icon btn-secondary btn-google btn-lg w-100">
                            <i class="bx bxl-google fs-xl me-2"></i>
                            Google
                        </a>
                    </div>
                    <div class="col mb-3">
                        <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg w-100">
                            <i class="bx bxl-facebook fs-xl me-2"></i>
                            Facebook
                        </a>
                    </div>
                </div> --}}
            </div>

        </div>
    </section>
@endsection
