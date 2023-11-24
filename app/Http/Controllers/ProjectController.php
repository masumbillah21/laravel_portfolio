<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();

        $midpoint = count($projects) / 2;

        
        $left = array_slice($projects->toArray(), 0, $midpoint);
        $right = array_slice($projects->toArray(), $midpoint);

        return view("pages.projects", compact("left","right"));
    }
}
