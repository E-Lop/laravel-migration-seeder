<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class HomeController extends Controller
{
    public function home() {
        $travels = Travel::all()->sortBy('price');

        $data = [
            'travels' => $travels
        ];
        return view('home', $data);
    }
}
