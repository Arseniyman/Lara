<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class GoodController extends Controller {
    
    public function getGoods() {
        return view('goods');
    }
}
