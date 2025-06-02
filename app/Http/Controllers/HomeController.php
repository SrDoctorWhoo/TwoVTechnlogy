<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Service;
use App\Models\Client;
use App\Models\Testimonial;
// use App\Models\Testimonial; // Descomente se for usar depoimentos

class HomeController extends Controller
{
public function index()
{
    $services = Service::all();
    $clients = Client::all();
    $testimonials = Testimonial::latest()->take(6)->get();

    return view('home', compact('services', 'clients', 'testimonials'));
}
}
