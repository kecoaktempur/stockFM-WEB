<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('sesi.homepage');
    }
    public function storepage() {
        return view('sesi.storepage');
    }
    public function aboutus() {
        return view('sesi.about-us');
    }
    public function addproduct() {
        return view('admin.addproduct');
    }
}
