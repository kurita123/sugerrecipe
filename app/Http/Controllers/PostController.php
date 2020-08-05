<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){
        return view('post');
    }

    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
 
            $path = $request->file('image_file')->store('public/img');
 
            Item::create(['file_name' => basename($path)]);
 
            return redirect('/')->with(['success'=> 'ファイルを保存しました']);
        }
        // GET
        return view('item.create');
    }
}
