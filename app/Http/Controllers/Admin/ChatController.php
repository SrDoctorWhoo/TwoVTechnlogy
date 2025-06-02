<?php

// app/Http/Controllers/Admin/ContactController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contatos = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contatos'));
    }
}
