@extends('home')
@section('register')
  <div class="register-form col-6">
    <form action="/admin/register" class="mb-3" method="POST">
      @csrf
      <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-person"></i></span>
      <input type="text" class="form-control" placeholder="Email" name="email">
      </div>
      <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-lock"></i></span>
      <input type="password" class="form-control" placeholder="Password" name="password">
      </div>
      <div class="input-group mb-3 col-xl-12">
      <div class="row w-100">
        <div class="col-lg-12 register">
        <button type="submit" class="btn btn-success btn-register">Register</button>
        </div>
      </div>
      </div>
    </form>
    <div class="row">
      <div class="col-4 btn-facebook">
        <a href="#" class="btn btn-primary btn-lg"><i class="bi bi-facebook"></i> Facebook</a>
      </div>
      <div class="col-4 btn-google">
        <a href="#" class="btn btn-primary btn-lg"><i class="bi bi-google"></i> Google</a>
      </div>
      <div class="col-4 btn-twitter">
        <a href="#" class="btn btn-primary btn-lg"><i class="bi bi-twitter"></i> Twitter</a>
      </div>
    </div>
  </div>
@endsection


