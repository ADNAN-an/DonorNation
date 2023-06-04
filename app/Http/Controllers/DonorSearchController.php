<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\DonorSearchRequest;

class DonorSearchController extends Controller
{
    public function search(DonorSearchRequest $request)
    {
        $request->flash();

        $donors = User::with('BloodGroup')
            ->where('BloodGroup', $request['BloodGroup'])
            ->where('city', $request['city'])
            ->get();

        $filteredDonors = $donors->filter(function ($donor) {
            return $donor->DateDernierDon <= now()->subDays(56);
        });

        return view('search', [
            'searchedBloodGroup' => $request['BloodGroup'],
            'searchedCity' => $request['city'],
            'donors' => $donors,
            'filteredDonors' => $filteredDonors,
        ]);
    }
}
