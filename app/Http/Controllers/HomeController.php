<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    private function Index()
    {
        $array = array("Volvo", "BMW", "Toyota");
        return response()->json($array);
    }
}





