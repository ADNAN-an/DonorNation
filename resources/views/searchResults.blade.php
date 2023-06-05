@extends('layouts.master')

@section('content')
    @include('searchForm')
    <section>
        <div class="searchResult container d-flex flex-wrap gap-4 justify-content-center">
            <!-- Loop over $donors and display the search results -->
            @if ($filteredDonors ->isEmpty())
                <div class="alert alert-danger text-center" role="alert">
                    No donors found.
                </div>
                
            @else
             <!-- Debug output -->
             <pre>{{ var_dump($filteredDonors) }}</pre>
             <!-- End of debug output -->
                @foreach ($filteredDonors as $donor)
                    <div class="container shadow-lg donorCard d-flex flex-column">
                        <div class="donorInfo px-3 py-3 row">
                            <div class="infos col-9">
                                <span class="text-danger fs-4"><strong class="text-dark">Nom:</strong>
                                    {{ $donor->name }}</span>
                                <br>
                                <span class="text-danger fs-4"><strong class="text-dark">Prenom:</strong>
                                    {{ $donor->prenom }}</span>
                                <br>
                                <span class="text-danger fs-4"><strong class="text-dark">Ville:</strong>
                                    {{ $donor->city }}</span>
                            </div>

                            <div class="bloodGroup col-3 d-flex align-items-center">
                                <span class="text-danger">{{ $donor->BloodGroup }}</span>
                            </div>
                        </div>

                        <div class="donorPhone bg-danger p-3 bg-light row">
                            <a class="col-4 d-lg-none" href="tel:{{ $donor->phone_number }}">
                                <button class="btn btn-success w-100" type="button">
                                    <svg class="d-lg-inline bg-success rounded-circle phoneIcon"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z">
                                        </path>
                                    </svg>
                                </button>
                            </a>
                            <strong
                                class="align-items-center justify-content-center d-flex col-8 col-lg-12 text-lg-center text-success fs-4"
                                style="user-select: all;">
                                <span><i class="fa-solid fa-phone"></i>&ensp;{{ $donor->phone_number }}</span>
                            </strong>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
