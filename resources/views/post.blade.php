@extends('layouts.index')

@section('title','糖質制限')

@section('content')
<h1>画像登録画面</h1>
<form action="{{ url('create') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" class="form-control" name="image_file">
    <hr>
    <button class="btn btn-success">登録</button>
</form>

@endsection