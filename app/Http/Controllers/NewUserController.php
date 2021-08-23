<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewUserController extends Controller
{
    public function NewUser()
    {
        return view('new-user');
    }
}
