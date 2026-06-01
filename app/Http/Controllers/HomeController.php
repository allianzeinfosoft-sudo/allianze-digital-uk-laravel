<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data['meta_title'] = 'Allianze Digital - Your Trusted Digital Marketing Partner';
        $data['meta_keywords'] = 'digital marketing, SEO, PPC, social media, content marketing, web design, Allianze Digital';
        return view('home', $data);
    }
}
