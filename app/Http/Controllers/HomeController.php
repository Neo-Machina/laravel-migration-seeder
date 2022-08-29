<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class HomeController extends Controller
{
    public function index() {
        $travels = Travel::where('id', '>', 9)->get();

        $data = [
            'travels' => $travels
        ];

        return view('home', $data);
    }
}
