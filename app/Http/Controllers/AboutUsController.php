<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index()
    {
        $data['meta_title'] = 'Top bpo agency in UK  | Allianze Digital';
        $data['meta_keywords'] = 'Best bpo services in UK, best backoffice outsourcing in uk , best call center service in UK, case data entry, data digitization service , Allianze Digital';
        $data['meta_description'] = 'Allianze Digital provides the best back office outsourcing company in UK, including data entry, data processing service, secure document review, and legal records management solutions.';
        return view('who-we-are', $data);
    }
}
