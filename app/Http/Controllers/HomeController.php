<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data['meta_title'] = 'Best bpo outsourcing company in UK  | Allianze Digital';
        $data['meta_keywords'] = 'BPO outsourcing company UK, business process outsourcing services UK, outsourcing company UK, offshore BPO services, data entry outsourcing UK, virtual assistant services UK, healthcare BPO services UK, insurance outsourcing UK, image editing outsourcing services, BPO company Nottingham, affordable data entry outsourcing UK, business process outsourcing for small business UK';
        $data['meta_description'] = 'digital marketing, SEO, PPC, social media, content marketing, web design, Allianze Digital';
        return view('home', $data);
    }
}
