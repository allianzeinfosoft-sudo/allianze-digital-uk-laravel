<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index()
    {
        $data['meta_title'] = 'About Us - Allianze Digital';
        $data['meta_keywords'] = 'about us, Allianze Digital, digital marketing, SEO, PPC, social media, content marketing, web design';
        return view('who-we-are', $data);
    }
}
