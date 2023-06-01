@extends('layouts.master')
<head>
    <link rel="stylesheet" href="{{asset('css/index.css')}}" rel="stylesheet">
</head>
@section("content")
<body>
    <section>
        <div class="form-boxR">
            <div class="form-value">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                   <h2>REGISTER</h2>
                    <div class="inputbox">
                        <!-- <ion-icon name="mail-outline"></ion-icon> -->
                        <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                        <label for="name">Nom</label>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="inputbox">
                        <!-- <ion-icon name="name-outline"></ion-icon> -->
                        <input type="text" id="prenom" name="prenom" class="@error('name') is-invalid @enderror"  required autocomplete="name" autofocus>
                        <label for="prenom">Prenom</label>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="inputbox">
                        <input type="text"   maxlength="10"  id="phone_number" required="">
                        <label for="phone-number">Numéro de téléphone</label>
                    </div>
                    <div class="inputboxF">
                        <label class="m-0   color-dark" for="city">Ville</label><br>
                        <select class="form-controlx" name="city" id="city" onchange="selectingCity(event)" required="">
                          <option disabled="" selected="" value=""> -- selectionner une ville -- </option>
                          <option value="Tanger">Tanger</option>
                          <option value="Tetouan">Tétouan</option>
                          <option value="Larache">Larache</option>
                          <option value="Fes">Fes</option>
                          <option value="Meknes">Meknes</option>
                          <option value="Casablanca">Casablanca</option>
                          <option value="Rabat">Rabat</option>
                          <option value="Marrakech">Marrakech</option>
                          <option value="Laayoun">Laayoun</option>
                          <option value="Oujda">Oujda</option>
                          <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="inputboxF">
                        <label class="m-0  color-dark" for="Type-de-sang">Type de sang</label><br>
                        <select class="form-controlx" name="bg" id="bg" onchange="selectingbg(event)" required="">
                          <option disabled="" selected="" value=""> -- selectionner une type de sang -- </option>
                          <option value="A+">A+</option>
                          <option value="B+">B+</option>
                          <option value="AB+">AB+</option>
                          <option value="O+">O+</option>
                          <option value="A-">A-</option>
                          <option value="B-">B-</option>
                          <option value="AB-">AB-</option>
                          <option value="O-">O-</option>
                          <option value="NA">I dont Know</option>
                        </select>
                    </div>
                    <div class="inputboxF">
                        <label class="m-0 not-required color-dark" for="Date-dernier-DON">Date du dernier DON</label><br>
                       <input type="date" class="form-controlx" id="dod">  
                   </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" required autocomplete="email">
                        <label for="email">Email</label>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror" required autocomplete="new-password">
                        <label for="password">Password</label>
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