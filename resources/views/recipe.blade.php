@extends('layouts.recipe')

@section('title','糖質制限')

@section('content')
@if (count($errors) >0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
<div class="row">
    <div class="col">
    <div id="main">
        <div class = "name">
        @foreach($name as $nam)
            <p>{{$nam->name}}さんのレシピ</p>
        @endforeach
        </div>
            @foreach($recipes as $recipe)
                <div class="myrecipe">
                    <div class="myrecipe-coo">
                        <p><span style="color:red">料理名</p></span>{{$recipe->c_name}}<br>
                    </div>
                        <img src="{{ asset('/storage/img/'.$recipe->imgpath)}}" alt="" class="example"><br><br>
                        <div class="myrecipe-su">
                            <span style="color:red">材料</p></span>{{$recipe->material}}<br><br>
                            <span style="color:red">作り方</p></span>{{$recipe->recipe}}<br><br>
                            <span style="color:red">糖質量</p></span>{{$recipe->t_suger}}g<br><br>
                            <span style="color:red">１人前の量</p></span>{{$recipe->amount}}g<br><br>
                            <span style="color:red">評価</p></span>{{$recipe->evaluation}}<br><br>
                            <span style="color:#33CCCC">あなたの評価</span></p>
                            <form action="review" mecthod="post">
                            @csrf
                            <span class="star-rating">
                            <input type="radio" name="stars" value="1"><i></i>
                            <input type="radio" name="stars" value="2"><i></i>
                            <input type="radio" name="stars" value="3"><i></i>
                            <input type="radio" name="stars" value="4"><i></i>
                            <input type="radio" name="stars" value="5"><i></i>
                            </span>
                            <span style="color:#33CCCC"><p>コメント</p></span>
                            <input type="hidden" name="recipe_id" value="{{$recipe->id}}">
                            <textarea type="text"  name="comment" rows="10" >{{ old('recipe') }}</textarea><br>
                            <div class="button">
                                <input type="submit" value="確認" class= 'btn-lg btn-primary'>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection