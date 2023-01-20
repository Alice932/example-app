<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts', compact('contacts'));
        // $contact = Contact::find(2);
        // $name = $contact->name;

        // return $name;
    }
}
