<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ContactRequest;
use App\Models\Contact;
use App\Models\About;
use App\Models\Info;

class ContactController extends Controller
{
    public function index(){
        $abouts = About::all();
        $info = Info::all()->first();
        return view('front.contact.index', compact(['info', 'abouts']));
    }
    public function submit(ContactRequest $request){
        $contact_data = $request->validated();
        Contact::create($contact_data);
        return redirect(route('contact.index'))->with('message', 'sent');
    }
}
