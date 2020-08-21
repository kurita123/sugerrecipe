<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use App\Models\Inquiry;
use App\Http\Requests\ReviewRequest;
use Illuminate\Validation\Rule;


class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $id = $request->id;

        $recipes = DB::table('recipes')->where('id',$id)->get();

        foreach($recipes as $val){
            $users_id[$val->id] = $val ->user_id;
        }
        
        $name = DB::table('users')->where('id',$users_id)->get('name');

        return view('recipe',compact('recipes','name'));
    }

    public function review(ReviewRequest $request){
        $review = [
            'user_id'=> Auth::id(),
            'recipe_id' => $request->recipe_id,
            'comment'   => $request->comment,
            'stars'  => $request->stars,
        ];
    
        DB::table('reviews')->insert($review);

        return view('review');
    }
}
