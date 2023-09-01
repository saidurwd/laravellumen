<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function Index()
    {
        $countries  = Country::all();
        // $countries =  app('db')->select("SELECT * FROM os_country");
        return response()->json($countries);
    }

    public function createCountry(Request $request)
    {

        $country = Country::create($request->all());

        return response()->json($country);
    }

    public function updateCountry(Request $request, $id)
    {

        $country  = Country::find($id);
        $country->title = $request->input('title');
        $country->country_2_code = $request->input('country_2_code');
        $country->country_3_code = $request->input('country_3_code');
        $country->status = $request->input('status');
        $country->save();

        return response()->json($country);
    }

    public function deleteCountry($id)
    {
        $country  = Country::find($id);
        $country->delete();

        return response()->json('Removed successfully.');
    }
}
