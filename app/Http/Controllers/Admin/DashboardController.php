<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $novasMensagens = Contact::latest()->take(5)->get(); // <-- Essa linha é essencial

        return view('admin.dashboard', compact('novasMensagens'));
    }
}
