<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $students=[
            "name"=>"Masud Alam",
            "age"=>32
            ];
        return view('aboutus',$students);
    }
}
