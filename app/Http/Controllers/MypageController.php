<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

class MypageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mypage(Request $request){
        $user_id  = Auth::id();
        $name = DB::table('users')->where('id',$user_id)->get('name');
        $recipes = DB::table('recipes')->where('user_id',$user_id)->get();

        return view('mypage',compact('recipes','name'));
    }
}