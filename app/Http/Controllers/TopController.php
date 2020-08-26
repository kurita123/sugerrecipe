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
        $param = ['recipes'=>$recipes,'sort'=>$sort];
        
        return view('top',compact('sort','recipes'));
    }

}
