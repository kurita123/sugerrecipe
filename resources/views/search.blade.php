@extends('layouts.recipe')

@section('title','糖質制限')

@section('content')
<div class="container">
    <div class="row">
        <div id="main">
            <h1 style="color:red; text-align:center; font-size:2em; padding:30px 0px 0px 0px; font-weight:bold;">検索結果レシピ一覧</h1>
            <div class="d-flex flex-row flex-wrap">
                @foreach($recipes as $recipe)
                <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="myrecipe">
                        <p>料理名 : {{$recipe->c_name}}</p>
                        <img src="{{ asset('/storage/img/'.$recipe->imgpath)}}" alt="" class="inrecipe"><br>
                        <p>糖質量 : {{$recipe->t_suger}}g</p>
                        <p>評価 : {{$recipe->evaluation}}</p>
                        <form action="recipe" method="get">
                        @csrf
                        <input type="hidden" name="id" value="{{$recipe->id}}">
                        <input type="submit" value="詳細" class= 'btn-lg btn-primary'><br>
                        </form>
                    </div>
                </div>
                @endforeach                    
            </div>
        </div>
    </div>
</div>
@endsection