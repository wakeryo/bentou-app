<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index() {
        $days = ['月','火','水','木','金','土','日'];
        $now = new DateTime();
        return view('index',compact('days','now'));
    }
}
