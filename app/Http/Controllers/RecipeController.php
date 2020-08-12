<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use App\Models\Inquiry;

class RecipeController extends Controller
{
    public function index(Request $request){
        $id = $request->id;

        $recipes = DB::table('recipes')->where('id',$id)->get();

        foreach($recipes as $val){
            $users_id[$val->id] = $val ->user_id;
        }
        
        $name = DB::table('users')->where('id',$users_id)->get('name');
        
        return view('recipe',compact('recipes','name'));
    }
}
