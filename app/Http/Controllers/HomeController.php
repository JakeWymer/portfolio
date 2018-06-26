<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use App\Mail\Contacted;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() {
        $projects = Project::all();
        $me = User::find(1);
        return view('index', ['projects' => $projects, 'me' => $me]);
    }

    public function contact(Request $request) {
        $me = User::find(1);
        Mail::to($me->email)->send(new Contacted($request));
        return redirect()->back();
    }
}
