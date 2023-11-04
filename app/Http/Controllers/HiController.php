<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiController extends Controller
{
    public function hi(){
        return "Hi Controller HI";
    }
    public function hello(){
        return "Hello Controlelr";
    }
    public function view(){
        return view('hi');
    }
}
