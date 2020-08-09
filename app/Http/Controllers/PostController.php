<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        return view('post');
    }

    public function complete(PostRequest $request)
    {
        //入力情報
        $user_id  = Auth::id();
        $c_name = $request->c_name;
        $path = $request->file('imgpath')->store('public/img');
 
        $recipes = [
            'user_id'  => $user_id,
            'c_name'   => $request->c_name,
            't_suger'  => $request->t_suger,
            'material' => $request->material,
            'amount'   => $request->amount,
            'recipe'   => $request->recipe,
            'imgpath'  => str_replace('public/img/','',$path),
        ];
         //DB保存
        DB::table('recipes')->insert($recipes);
        // //レシピからIDと料理名で検索
        // $recipes = DB::table('recipe')->where('user_id',$user_id)
        //                               ->where('c_name',$c_name)
        //                             ->whereRaw('datetime >= ? and datetime <=?',[$date_first,$date_last])
        //                             ->orderBy('datetime','asc')
        //                             ->get();
        return view('postcomplete',compact('recipes'));
    }
}