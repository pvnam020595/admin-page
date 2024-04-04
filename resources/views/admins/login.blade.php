@extends('admins.home')
@section('login')
    <div class="signin-form col-lg-6">
        <h1 class="text-center">Login Admin</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.login') }}" class="mb-3" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" placeholder="Email" value="{{ old('email') }}" name="email">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                    placeholder="Password">
            </div>
            <div class="input-group mb-3 col-xl-12">
                <div class="row w-100">
                    <div class="col-lg-6 text-center">

                        <label>
                            <input type="checkbox" name="remember_login" id="remember_login" value="1">
                            {{ __('app.remember_me') }}
                        </label>
                    </div>
                    <div class="col-lg-6 text-center">
                        <a href="{{ route('admin.forgot_password') }}" class="text-decoration-none">
                            {{ __('app.forgot_password') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-success w-100">{{ __('app.login') }}</button>
            </div>
        </form>
        <div class="row">
            <div class="col-lg-12 text-center">
                <span>Not a member ?</span> <a href="{{ route('admin.register') }}">{{ __('app.regiter') }}</a>
            </div>
        </div>
        <div class="row">
            <h6 class="text-center">or login with:</h6>
        </div>
        <div class="row">
            <div class="col-lg-4 btn-facebook">
                <a href="#" class="btn btn-primary btn-lg w-100"><i class="bi bi-facebook"></i>
                    {{ __('app.facebook') }}</a>
            </div>
            <div class="col-lg-4 btn-google">
                <a href="#" class="btn btn-danger btn-lg w-100"><i class="bi bi-google"></i> {{ __('app.google') }}</a>
            </div>
            <div class="col-lg-4 btn-twitter">
                <a href="#" class="btn btn-info btn-lg w-100"><i class="bi bi-twitter"></i> {{ __('app.twitter') }}</a>
            </div>
        </div>
    </div>
@endsection
