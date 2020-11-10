<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        return view('frontend.index', compact('main'));
    }

    public function dashboard(){
        return view('backend.dashboard');
    }

    



}
