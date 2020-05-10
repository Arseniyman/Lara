<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;

class CartController extends Controller
{
    public function addGoodCart(Request $request, $id) {
        
        if ($request->session()->has("{$id}")) {
            
            $numOfCurrGood = $request->session()->get("{$id}");
            $numOfCurrGood++;
        } else {
            $numOfCurrGood = 1;
        }

        $request->session()->put("{$id}", $numOfCurrGood);
        
        return ($request->session()->all());
    }

    public function getCartPage(Request $request) {
        
        $numGoodsCart = $request->session()->all();
        $goods = Good::all();
        return view("cart", [
            "goods" => $goods,
            "numGoodsCart" => $numGoodsCart 
        ]);
    }
}