@extends('layouts.temple')

@section('title','糖質制限')

@section('content')
<h1 style="color:#555555; text-align:center; font-size:2em; padding:24px 0px; font-weight:bold;">レシピ投稿</h1>
<div class="d-flex flex-row flex-wrap">
    <div class="recipe">
        <form action="create" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <p>料理名：　　　<input type="text" name="c_name"></p>
            <p>総糖質量：　　<input type="number" name="t_suger"></p>
            <p>食材＆調味料：<input type="text" name="material"></p>
            <p>１人前の量：　<input type="number" name="amount"></p>
            <p>作り方：　　　<input type="text" name="recipe"></p>
            <input type="file" class="form-control" name="imgpath">
            <hr>
            <button class="btn btn-success">登録</button>
        </form>
    </div>
</div>

@endsection