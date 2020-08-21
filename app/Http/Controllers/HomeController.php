<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class HomeController extends Controller
{   
    public function index(Request $request){
        //レシピ取得
        $recipes = Recipe::orderBy('updated_at','asc')->paginate(12);
        
        return view('home',compact('recipes'));
    }
}
