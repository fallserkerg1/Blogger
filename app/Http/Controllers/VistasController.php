<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        return view('blogger.contact');
    }

    public function Qsomos(){
        
        return view('blogger.about');
    }

    public function Dalgo(){
        
        return view('blogger.donation');
    }
}
