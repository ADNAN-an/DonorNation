@extends('layouts.master')
<head>
    <link rel="stylesheet" href="{{asset('css/index.css')}}" rel="stylesheet">
</head>
@section("content")
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                   <h2>REGISTER</h2>
                    <div class="inputbox">
                        <!-- <ion-icon name="mail-outline"></ion-icon> -->
                        <input type="text" class="@error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                        <label for="">Nom</label>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="inputbox">
                        <!-- <ion-icon name="name-outline"></ion-icon> -->
                        <input type="text" class="@error('name') is-invalid @enderror"  required autocomplete="name" autofocus>
                        <label for="">Prenom</label>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" class="@error('email') is-invalid @enderror" required autocomplete="email">
                        <label for="">Email</label>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" class="@error('password') is-invalid @enderror" required autocomplete="new-password">
                        <label for="">Password</label>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    
                    <!-- <div class="forget">
                        <label for=""><input type="checkbox">Remember Me </label>
                        <label> <a href="#">Forget Password</a></label>
                      
                    </div> -->
                    <button>Registrer</button>
                    <div class="register">
                        <p>You have an account <a href="{{asset('login')}}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="{{ asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
    <script nomodule src="{{asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js')}}"></script>
</body>
@endsection