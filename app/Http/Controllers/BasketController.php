<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class BasketController extends Controller
{
    public function addGoodBasket(Request $request, $id)
    {
        $request->session()->put('{$id}', $id+10);
        $output = $request->session()->get('{$id}');
        return $output;
    }
}
