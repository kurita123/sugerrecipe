<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class HomeController extends Controller
{   
    public function index(Request $request){
        $sort = $request->sort;
        if (is_null($sort)) {
            $sort = 'id';
           }
        if($sort =='evaluation'){
        $recipes = Recipe::orderBy($sort,'desc')->simplePaginate(12);
        }elseif($sort == 'id'){
        $recipes = Recipe::orderBy($sort,'asc')->simplePaginate(12);
        }else{
        $recipes = Recipe::orderBy($sort,'desc')->simplePaginate(12);
        };
        
        return view('home',compact('sort','recipes'));
    }
}
