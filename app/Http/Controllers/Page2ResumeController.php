<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page2ResumeController extends Controller
{
    public function index() {
        return view('resume');
    } 
}