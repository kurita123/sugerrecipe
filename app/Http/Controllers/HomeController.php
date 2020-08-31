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
        $recipes = Recipe::orderBy($sort,'desc')->Paginate(12);
        }elseif($sort == 'id'){
        $recipes = Recipe::orderBy($sort,'asc')->Paginate(12);
        }else{
        $recipes = Recipe::orderBy($sort,'desc')->Paginate(12);
        };
        
        return view('home',compact('sort','recipes'));
    }
}
