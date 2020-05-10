<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Good;
use App\Http\Requests\GoodRequest;

class GoodController extends Controller {

    public function getGoodPage() {
        
        $goods = Good::all();

        return view("good", compact("goods"));
    }

    public function addGoodView() {
        
        return view("addGood");
    }

    public function addGood(GoodRequest $request) {
         
        $good = $request->only(["name", "description", "photo", "price"]);

        Good::create($good);

        return redirect()->route("addGood");
    }

    public function deleteGood(Request $request) {
        
        $id = $request->input("good_id");
        
        $request->session()->forget("{$id}");

        Good::find($id)->delete();

        return redirect()->route("addGood");
    }
}