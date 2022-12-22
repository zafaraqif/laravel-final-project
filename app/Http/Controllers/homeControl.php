<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\User;

class homeControl extends Controller
{
    public function index() {
        
        if(Auth::user() == False) {
            return view("home");
        } elseif (Auth::user()->usertype == '1') {
            return redirect("/projects");
        } else {
            return redirect("/supervisee");
        } 
    }

    public function redirectFunc() {
        $typeuser=Auth::user()->usertype;

        if ($typeuser == '1') {
            return redirect("/projects");
        } else {
            return redirect("/supervisee");
        }
    }
    
}
