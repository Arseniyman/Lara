<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function getHomePage() {
        return view('home');
    }
}