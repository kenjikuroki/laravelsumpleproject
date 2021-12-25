@extends('layouts.layout')
 
@section('title', 'インデックスページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', 'インデックスページの説明文です')
@section('pageCss')
<link href="/css/index.css" rel="stylesheet">
@endsection
 
@include('layouts.header')
 
@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center main-row">
    <div class="col shadow main-col bg-white">
      <div class="row bg-primary text-white">
        <div class="col  p-2">
          <h4>Todo App</h4>
        </div>
      </div>
      <div class="row justify-content-between text-white p-2">
        <div class="form-group flex-fill mb-2">
          <input id="todo-input" type="text" class="form-control" value="">
        </div>
        <button type="button" onclick="CreateTodo();" class="btn btn-primary mb-2 ml-2">Add todo</button>
      </div>
      <div class="row" id="todo-container">
      </div>
    </div>
  </div>
  <script src="{{ asset('js/mainContainer.js') }}"></script>
</div>
@endsection
 
 
@include('layouts.footer')

@section('script')

@endsection