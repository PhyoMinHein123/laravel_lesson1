<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return "this is controller";
    }
    public function show() {
        return view('hello');
    }
}
