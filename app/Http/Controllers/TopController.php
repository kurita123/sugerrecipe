<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
      
    public function index(Request $request){
        //レシピ取得
        $recipes = Recipe::orderBy('updated_at','asc')->paginate(12);

        foreach($recipes as $val){
            $recipe_id[$val->id] = $val ->id;
        }
        
        $evaluation = DB::table('reviews')->whereRaw('id',$recipe_id)->get(['recipe_id','stars']);

        return view('top',compact('recipes'));
    }
}
