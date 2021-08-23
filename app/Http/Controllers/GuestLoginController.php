<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestLoginController extends Controller
{
    public function index()
    {
        return view('guestlogin');
    }
}
