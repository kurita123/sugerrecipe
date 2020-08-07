<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        return view('post');
    }

    public function create(Request $request)
    {
        //商品情報
        $path = $request->file('imgpath')->store('public/img');
        $recipes = [
            'c_name'=> $request->c_name,
            't_suger' => $request->t_suger,
            'material'   => $request->material,
            'amount'  => $request->amount,
            'recipe'  => $request->recipe,
        ];
        //DB保存
        DB::table('recipes')->insert($recipes);

        return view('postconfirm');
    }
}