<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VottingController extends Controller
{
    public function index(){
        return view('showVotting');
    }
}
