@extends('layouts.custom')
@section('title', 'Login')
@section('content')
<div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              {{-- <img src="assets/img/stisla-fill.svg" alt="logo" class="" style="max-width: 56px; height: auto;"> --}}
              <h2><strong>LIBMAN</strong></h2>

            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{--route('login')--}}" class="needs-validation" novalidate="">
                    @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email')
                        is-invalid
                    @enderror"
                    name="email" tabindex="1" autofocus>

                    @error('email')
                     <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  </div>
                    @enderror


                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" tabindex="2">

                      @error('password')
                          <div class="invalid-feedback">
                            {{$message}}
                            </div>
                      @enderror

                  </div>



                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>




            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
@endsection
