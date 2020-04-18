<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Good;

class GoodController extends Controller {
    
    public function getGoods(Type $var = null)
    {
        # code...
    }


    public function getGoodPage() {
        return view('goods');
    }
}
