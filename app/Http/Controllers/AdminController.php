<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function admin()
    {
        $me = User::find(1);
        return view('admin', ['me' => $me]);
    }

    public function updateCopy(Request $request) {
        $me = User::find(1);

        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);

        $me->tagline = $request->input('tagline');
        $me->image = $name;
        $me->par_one = $request->input('par_one');
        $me->par_two = $request->input('par_two');

        $me->save();
    }
}
