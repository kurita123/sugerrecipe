<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $recipes = DB::table('recipes')->where('c_name','like','%'.$search.'%')
                                       ->orWhere('material','like','%'.$search.'%')
                                       ->inRandomOrder()
                                       ->get();

        return view('search',compact('recipes'));
    }
}
