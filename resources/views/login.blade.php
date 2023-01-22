@extends('layouts.master')

@section('content')
<section class="h-100 h-custom" style="background-color: #8fc4b7;"><section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login</h2>

              <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8">
                @csrf

                <div class="form-outline mb-4">
                  @if(!empty($message))
                    <p class='text-danger'>{{$message}}</p>
                  @endif
                  <input type="text" id="email" class="form-control form-control-lg" name="email" required/>
                  <label class="form-label" for="email">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control form-control-lg" name="password" required/>
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="/register"
                    class="fw-bold text-body"><u>Signup here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>