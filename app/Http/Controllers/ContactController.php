<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller
{
    public function index(){
        return view("pages.contact");
    }

    public function sendEmail(Request $request)
    {

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^[0-9]+$/|max:11|min:11',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ];
        $this->validate($request, $rules);

        return view("pages.contact", ['success' => 'Message successfully sent.']);;
    }
}
