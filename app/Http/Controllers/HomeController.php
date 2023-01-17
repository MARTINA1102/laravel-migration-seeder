<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('guest.home');
    }

    public function list() {

        // SELECT * FROM `trains`
        $books = Train::all();
        return view('guest.home', compact('trains'));
    }
}
