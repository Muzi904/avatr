<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('website.pages.home');
    }
    public function avatr11()
    {
        return view('website.pages.cars.avatr11');
    }
    public function avatr12()
    {
        return view('website.pages.cars.avatr12');
    }
}
