<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view("pages.contact");
    }

    public function sendEmail(Request $request)
    {
        $validator = $request->validate([
            'user_name' => 'required | regex:/^[a-zA-Z]',
            'user_email' => 'required | email',
            'user_phone' => 'required | regex:/^[0-9]',
            'user_subject' => 'required | regex:/^[a-zA-Z]',
            'user_message' => 'required | regex:/^[a-zA-Z]',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
}
