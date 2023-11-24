<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $educations = [
            ["year" => 2014,"name"=> "Secondary School Certificate (SSC)","place"=> "Jessore Board"],
            ["year" => 2016,"name"=> "Higher Secondary Certificate (HSC)","place"=> "Jessore Board"],
            ["year" => 2020,"name"=> "Bachelor of Science In Computer Science & Engineering (CSE)","place"=> "Islamic University"],
            ["year" => 2021,"name"=> "Master of Science In Computer Science & Engineering (CSE)","place"=> "Islamic University"],
        ];

        $skills = [
            ['name' => 'HTML/HTML5', 'range' => 95],
            ['name' => 'CSS', 'range' => 90],
            ['name' => 'Bootstrap', 'range' => 80],
            ['name' => 'JavaScript', 'range' => 70],
            ['name' => 'PHP', 'range' => 90],
            ['name' => 'MySQL', 'range' => 95],
            ['name' => 'Laravel', 'range' => 60],
            ['name' => 'Flutter', 'range' => 70],
        ];

        $workExperience = [
            ["year" => 2010,"name"=> "Full Stack Web Developer","place"=> "Upwork"],
            ["year" => 2016,"name"=> "Analyst Programmer","place"=> "Source & Solution"],

        ];

        return view("pages.about", compact("educations","skills", 'workExperience'));
    }
}
