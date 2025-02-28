<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        return view('website.pages.landing');
    }
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
    public function about()
    {
        return view('website.pages.about');
    }
    public function contact()
    {
        return view('website.pages.contact');
    }
    public function testDrive()
    {
        return view('website.pages.test-drive');
    }
    public function models()
    {
        return view('website.pages.models');
    }
    public function models2()
    {
        return view('website.pages.models2');
    }
    public function showrooms()
    {
        return view('website.pages.showrooms');
    }
    public function requestQuote()
    {
        return view('website.pages.request-quote');
    }
    public function experienceAvatr()
    {
        return view('website.pages.experience-avatr');
    }
    public function ownership()
    {
        return view('website.pages.ownership');
    }
    public function discover()
    {
        return view('website.pages.discover');
    }
    public function news()
    {
        return view('website.pages.news');
    }
}
