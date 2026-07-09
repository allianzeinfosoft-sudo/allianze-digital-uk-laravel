<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data['meta_title'] = 'Best bpo outsourcing company in UK  | Allianze Digital';
        $data['meta_keywords'] = 'Best bpo services in UK, best backoffice outsourcing in uk , best call center service in UK, case data entry, secure legal data management, Allianze Digital';
        $data['meta_description'] = 'digital marketing, SEO, PPC, social media, content marketing, web design, Allianze Digital';
        return view('home', $data);
    }
}
