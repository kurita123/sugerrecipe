<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Models\Inquiry;

class RecipeController extends Controller
{
    public function index(Request $request){
        //レシピ取得
        $recipes = Recipe::orderBy('evalunation','desc')->paginate(10);
        
        return view('top',compact('recipes'));
    }
}
