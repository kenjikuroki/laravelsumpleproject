@extends('layouts.layout')
 
@section('title', 'インデックスページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', 'インデックスページの説明文です')
@section('pageCss')
<link href="/css/ditail.css" rel="stylesheet">
@endsection
 
@include('layouts.header')
 
@section('content')
    <p>このページはインデックスページです。</p>
    <p>kokoに書いていきます</p>
    <a href="https://laravel.com/docs"><button class='btn btn-default'>Docs</button></a>
        <a href="https://laracasts.com"><button class='btn btn-primary'>Laracasts</button></a>
        <a href="https://laravel-news.com"><button class='btn btn-success'>News</button></a>
@endsection
 
 
@include('layouts.footer')

@section('script')
 
@endsection