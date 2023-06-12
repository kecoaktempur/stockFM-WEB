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
    public function product() {
        return view('product');
    }
    public function product1() {
        return view('product');
    }
    public function product2() {
        return view('product');
    }
    public function product3() {
        return view('product');
    }
    public function product4() {
        return view('product');
    }
    public function product5() {
        return view('product');
    }
    public function product6() {
        return view('product');
    }
}
