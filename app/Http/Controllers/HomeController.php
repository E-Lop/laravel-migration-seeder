<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class HomeController extends Controller
{
    public function home() {
        $travels = Travel::where('is_available', '=', 1)->orderBy('price')->limit(3)->get();

        $data = [
            'travels' => $travels
        ];
        return view('home', $data);
    }
}
