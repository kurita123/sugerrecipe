@extends('layouts.temple')

@section('title','糖質制限')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h2>投稿しました。</h2>
                        @foreach($recipes as $recipe)
                        {{$recipe}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection