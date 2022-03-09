<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    public function welcome() {
        $users = User::all();

        return view('welcome')->with([
            'users' => $users, 
        ]);
    }
}
