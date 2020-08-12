<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class TopController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
      
    public function index(Request $request){
        //レシピ取得
        $recipes = Recipe::orderBy('evalunation','desc')->paginate(12);
        
        return view('top',compact('recipes'));
    }
}
