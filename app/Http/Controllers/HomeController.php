<?php

namespace App\Http\Controllers;

use App\Trains;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        // SELECT * FROM `trains`
        $trains = Trains::all();
        return view('guest.home', compact('trains'));
    }

}
