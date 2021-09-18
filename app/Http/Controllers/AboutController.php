<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about', ['nim' => '2031710171', 'nama' => 'Firdha Arga Putriani']);
    }
}
