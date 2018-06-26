<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;

class HomeController extends Controller
{
    public function index() {
        $projects = Project::all();
        $me = User::find(1);
        return view('index', ['projects' => $projects, 'me' => $me]);
    }
}
