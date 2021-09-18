<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function mi(){
        return view('mi', ['prodi' => 'Manajemen Informatika']);
    }

    public function ti(){
        return view('ti', ['prodi' => 'Teknik Informatika']);
    }
}
