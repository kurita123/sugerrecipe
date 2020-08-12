<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class HomeController extends Controller
{   
    public function index(Request $request){
        //レシピ取得
        $recipes = Recipe::orderBy('evalunation','desc')->paginate(6);
        
        return view('home',compact('recipes'));
    }
}
