@extends('layouts.master')

@section('content')
<section class="h-100 h-custom" style="background-color: #8fc4b7;"><section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Welcome</h2>
                <p class="text-center mt-5 mb-0">Hi {{session('name')}}, you are logged in as {{session('role')}}.
                  <a href="/logout" class="fw-bold text-body"><u>Logout</u></a>
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>