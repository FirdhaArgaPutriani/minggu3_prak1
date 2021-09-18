<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor(){
        return view('kantor', ['sarana' => 'Kantor']);
    }

    public function lab(){
        return view('lab', ['sarana' => 'Lab']);
    }

    public function kelas(){
        return view('kelas', ['sarana' => 'Kelas']);
    }

    public function kantin(){
        return view('kantin', ['sarana' => 'Kantin']);
    }
}
