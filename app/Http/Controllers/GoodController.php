<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Good;

class GoodController extends Controller {
    
    public function getGoods() {
        
        $good = Good::all();
        return view('good', compact('good'));
    }


    public function getGoodPage() {
        
        $goods = Good::all();

        return view('good');
    }
}