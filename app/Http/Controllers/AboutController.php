<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about');
    }
    
    public function education(){
        return view('education');
    }
    
    public function self_education(){
        return view('self_education');
    }

    public function about_site(){
        return view('about_site');
    }
}
