<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function about()
    {
        return view('Abouts.about');
    }

    public function privacypolicy()
    {
        return view('Abouts.privacypolicy');
    }

    public function termscondition()
    {
        return view('Abouts.terms&condition');
    }

    public function returnrefund()
    {
        return view('Abouts.return&refund');
    }
}
