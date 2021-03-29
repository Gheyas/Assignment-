<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ContactRequest;
Use App\Models\Contact;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $contacts = Contact::all();
        return view('back.contact.index', compact('contacts'));
    }

    public function destroy(Contact $contact){
        $contact->delete();
        return redirect()->back();
    }
}
