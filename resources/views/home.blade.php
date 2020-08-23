<div class="wrap">
@extends('layouts.index')

@section('title','糖質制限')

@section('content')
<div class="container">
<div class="row">
    <div class="col">
        <div class = "example">
            <img src="img/top.png">
            <div class="d-flex flex-row flex-wrap">
                @foreach($recipes as $recipe)
                    <div class="col-xs-6 col-sm-4 col-md-4 ">
                        <div class="myrecipe">
                            料理名 : {{$recipe->c_name}}<br>
                            画像 : <img src="{{ asset('/storage/img/'.$recipe->imgpath)}}" alt="" class="inrecipe"><br>
                            糖質量 : {{$recipe->t_suger}}g<br>
                            評価 : {{$recipe->evaluation}}<br>
                            <form action="recipeguest" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$recipe->id}}">
                            <input type="submit" value="詳細" class= 'btn-lg btn-primary'><br>
                            </form>
                        </div>
                    </div>
                @endforeach
                <div style="text-center; width: 200px;margin: 20px auto;">
                    {{ $recipes->appends(request()->input())->links() }} 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection