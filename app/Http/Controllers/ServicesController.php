<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function about ()
    {
        return view('services/about');
    }
    public function airTransport ()
    {
        return view('services/airTransport');
    }
    public function cargoTransport ()
    {
        return view('services/cargoTransport');
    }
    public function oceanFreight ()
    {
        return view('services/oceanFreight');
    }
    public function railTransport ()
    {
        return view('services/railTransport');
    }
    public function roadTransport ()
    {
        return view('services/roadTransport');
    }
    public function services ()
    {
        return view('services/services');
    }
    public function warehousing ()
    {
        return view('services/warehousing');
    }
    
}