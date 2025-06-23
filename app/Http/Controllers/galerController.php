<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galerController extends Controller
{
    public function index(){
        return view('galery',[
            "judul" => 'galery | page',
        ]);
    }
}
