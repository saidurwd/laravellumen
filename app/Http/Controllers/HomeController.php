<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    public function Index()
    {
        $array = array(
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );
        return response()->json($array);
    }
}
