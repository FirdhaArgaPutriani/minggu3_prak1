<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($nm, $psn){
        return view('comment', ['nm' => $nm, 'psn' => $psn]);
    }
}
