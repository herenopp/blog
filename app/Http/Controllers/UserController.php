<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return 'Hello Controller ';
    }

    public function show() {
        return view('create.home')
        ->with('name', 'Noppakorn Witchaya')
        ->with('title', 'Laravel tutorial');
    }
}
