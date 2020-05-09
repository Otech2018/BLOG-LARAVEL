<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('Pages.index');
    }

    public function about(){
        return view('Pages.about');
    }


    public function services(){
        return view('Pages.services');
    }
}
