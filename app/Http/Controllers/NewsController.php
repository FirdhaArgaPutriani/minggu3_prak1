<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($hal){
        return view('news', ['hal' => $hal]);
    }
}
