<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $data = ["aji solehudin", "terbaik", "sedunia"];
        return view('dosen', ['nama'=> $data]);
    }
}
