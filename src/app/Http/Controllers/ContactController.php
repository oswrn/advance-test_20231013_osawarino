<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('index');
    }

    public function confirm(ContactRequest $request) {
        $contact = $request->only([
            'last_name',
            'first_name',
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion'
        ]);

        $lastname = $contact['last_name'];
        $firstname = $contact['first_name'];
        $fullname = $lastname . ' ' . $firstname;

        $contact_for_db = [
            'fullname' => $fullname,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion,
            ];
            
        //dd($contact_for_db);
        return view('confirm', compact('contact_for_db'));
    }

    public function store(ContactRequest $request) {
        $contact_for_db = $request->only([
            'fullname',
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion'
        ]);
        Contact::create($contact_for_db);
        return view('thanks');
    }
}

