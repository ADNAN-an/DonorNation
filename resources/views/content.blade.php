@extends('layouts.master')
<head>
    <link rel="stylesheet" href="{{asset('css/index.css')}}" rel="stylesheet">
</head>
@section("content")
  <body>
      <section id="loginregister">
          <div class="form-box">
              <div class="form-value">
                  <form action="">
                    <h2>LOGIN</h2>
                      <div class="inputbox">
                          <ion-icon name="mail-outline"></ion-icon>
                          <input type="mail" required>
                          <label for="">Email</label>
                      </div>
                      <div class="inputbox">
                          <ion-icon name="lock-closed-outline"></ion-icon>
                          <input type="password" required>
                          <label for="">Password</label>
                      </div>
                      <div class="forget">
                          <label for=""><input type="checkbox">Remember Me  </label>
                          <label> <a href="#">Forget Password</a></label>
                      </div>
                      <button>Log in</button>
                      <div class="register">
                          <p>Don't have a account <a href="register.html">Register</a></p>
                      </div>
                  </form>
              </div>
          </div>
      </section>
      <script type="module" src="{{ asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
      <script nomodule src="{{asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js')}}"></script>
  </body>
@endsection