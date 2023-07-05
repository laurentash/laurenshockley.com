<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class Page3ContactController extends Controller
{
    public function index() {
        return view('contact');
    } 

    public function page() {
        return view('resumecontact');
    } 

    public function sendmail(Request $details) {
        $details->validate([
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'message' => 'required'
        ]);

        Contact::create($details->all());
        return view('mailconfirmed');
    }

    public function resumeinfo(Request $details) {
        $details->validate([
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'message' => 'required'
        ]);

        Contact::create($details->all());
        return view('thankyou');
    }

}


