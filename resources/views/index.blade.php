@extends('layouts.layout')
 
@section('title', 'インデックスページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', 'インデックスページの説明文です')
@section('pageCss')
<link href="/css/index.css" rel="stylesheet">
@endsection
 
@include('layouts.header')
 
@section('content')
    <p>このページはインデックスページです。</p>
    <p>kokoに書いていきます</p>
@endsection
 
 
@include('layouts.footer')

@section('script')
<script src="{{ mix('js/sample.js') }}"></script>
@endsection