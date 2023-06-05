<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DonorSearchRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DonorSearchController extends Controller
{
    public function index(Request $request)
    {
        $request->flush();

        return view('searchResults', ['allReadyToGiveDonors' => User::getReadyDonors()]);
    }

    public function search(DonorSearchRequest $request)
    {
        $request->flash();

        $donors = User::where('BloodGroup', $request['BloodGroup'])
            ->where('city', $request['city'])
            ->paginate(10);

        $donors = $donors->filter(function ($donor) {
            return $donor->DateDernierDon <= now()->subDays(56);
        });

        return view('searchResults', [
            'searchedBloodGroup' => $request['BloodGroup'],
            'searchedCity' => $request['city'],
            'donors' => $donors,
            // 'filteredDonors' => $filteredDonors,
            'otherDonors' => User::getOtherDonorsCanDonateTo($request['BloodGroup'], $request['city']),
        ]);
    }
}
