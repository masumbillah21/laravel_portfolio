<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $services = [
            ['title' => 'Pixel Perfect Design', 'desc' => 'Top-notch quality at your disposal. We’ll design a site that maximizes sharpness and is implemented to deliver maximum fidelity in the final product.'],
            ['title' => 'Plugin Development', 'desc' => 'Custom Build Plugin development with stripe gateway integration so that, you can easily accept online payments'],
            ['title' => 'Theme Development', 'desc' => 'Custom Build Theme to achive your custom design, that you have dreamt about.'],
            ['title' => 'Minimalistic Approach', 'desc' => 'With focus on simplicity and functionality. By stripping away unnecessary elements and focusing on the content the site visitor wants,'],
            ['title' => 'Responsive Design', 'desc' => 'Mobile friendly design and development that respond to the user\'s behavior and environment based on screen size, platform and orientation'],
            ['title' => 'User Experience (UX) Design', 'desc' => 'We build sites that emphasizes User experience (UX) design. We create sites that provide meaningful and relevant experiences to users.'],
        ];
        return view("pages.home", ["services"=> $services]);
    }
}
