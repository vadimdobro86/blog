<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawController extends Controller
{
    public function index(){
        return view('law.index');
    }
}
