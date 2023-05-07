<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index() {
        return view('index');
    }

    public function announce() {
        return view('events.announce');
    }
}
