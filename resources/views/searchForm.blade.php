@extends('layouts.master') 
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 rounded-3 shadow p-5 position-relative bg-white searchBox">
                    <h3 class="text-center mb-4">Trouver des donneurs de sang près de chez vous</h3>
                    <form id="donorsSearchForm" method="get" action="{{ route('donorsSearch') }}"
                        class="d-flex flex-column flex-xl-row gap-3" novalidate>
                        <div class="w-100">
                            <select name="BloodGroup" id="bloodGroup" class="form-select form-select-lg" required>
                                <option selected hidden style="display:none" value=""> -- Type de sang --</option>
                                <option value="A+" @if (old('BloodGroup') == 'A+') selected @endif>A+</option>
                                <option value="B+" @if (old('BloodGroup') == 'B+') selected @endif>B+</option>
                                <option value="AB+" @if (old('BloodGroup') == 'AB+') selected @endif>AB+</option>
                                <option value="O+" @if (old('BloodGroup') == 'O+') selected @endif>O+</option>
                                <option value="A-" @if (old('BloodGroup') == 'A-') selected @endif>A-</option>
                                <option value="B-" @if (old('BloodGroup') == 'B-') selected @endif>B-</option>
                                <option value="AB-" @if (old('BloodGroup') == 'AB-') selected @endif>AB-</option>
                                <option value="O-" @if (old('BloodGroup') == 'O-') selected @endif>O-</option>
                                <option value="NA" @if (old('BloodGroup') == 'NA') selected @endif>I dont Know
                                </option>
                            </select>
                            <div class="invalid-feedback">
                                Ville
                            </div>
                        </div>
                        <div class="w-100">
                            <select name="city" id="villeSelect" class="form-select form-select-lg">
                                <option selected hidden style="display:none" value="">--Choisir une ville--</option>
                                <option value="Tanger" @if (old('city') == 'Tanger') selected @endif>Tanger</option>
                                <option value="Tetouan" @if (old('city') == 'Tetouan') selected @endif>Tétouan</option>
                                <option value="Larache" @if (old('city') == 'Larache') selected @endif>Larache</option>
                                <option value="Fes" @if (old('city') == 'Fes') selected @endif>Fes</option>
                                <option value="Meknes" @if (old('city') == 'Meknes') selected @endif>Meknes</option>
                                <option value="Casablanca" @if (old('city') == 'Casablanca') selected @endif>Casablanca
                                </option>
                                <option value="Rabat" @if (old('city') == 'Rabat') selected @endif>Rabat</option>
                                <option value="Marrakech" @if (old('city') == 'Marrakech') selected @endif>Marrakech
                                </option>
                                <option value="Laayoun" @if (old('city') == 'Laayoun') selected @endif>Laayoun</option>
                                <option value="Oujda" @if (old('city') == 'Oujda') selected @endif>Oujda</option>
                                <option value="Other" @if (old('city') == 'Other') selected @endif>Other</option>
                            </select>
                            <div class="invalid-feedback">
                                ddddddddddddddddddddddd
                            </div>
                        </div>
                        <button class="btn btn-danger px-5 searchDonorsBtn" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
