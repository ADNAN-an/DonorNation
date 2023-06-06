<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonorSearchRequest;
use App\Models\BloodGroup;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class DonorSearchController extends Controller
{


    public function index(Request $request)
    {
        $request->flush();
        $cities = City::all();
        $bloodGroups = BloodGroup::all();
        $allReadyToGiveDonors = User::getReadyDonors();

        return view('searchForm', compact('cities', 'bloodGroups', 'allReadyToGiveDonors'));
    }


    public function search(DonorSearchRequest $request)
{
    $request->flash();

    $query = User::with('city', 'bloodGroup')
        ->filter(request(['blood_group', 'city']))
        ->inRandomOrder();

    $donors = $query->paginate(10);

    dump($donors);

    return view('pages.donors', [
        'searchedBloodGroup' => BloodGroup::find($request['blood_group'])->bloodGroup,
        'searchedCity' => City::find($request['city'])->name,
        'donors' => $donors,
        'otherDonors' => User::getOtherDonorsCanDonateTo($request['blood_group'], $request['city']),
    ]);
}


    public function showDonors()
{
    $donors = User::getAllReadyToGiveDonors();
    
    return view('donors', compact('donors'));
}
}
