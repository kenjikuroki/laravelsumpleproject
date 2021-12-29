@extends('layouts.layout')

@section('title', 'インデックスページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', 'インデックスページの説明文です')
@section('pageCss')
<link href="/css/index.css" rel="stylesheet">
@endsection

@include('layouts.header')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
  <div class="column">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              <span class="mb-2">TODOLIST</span>
            </div>
            <div class="card-body">
              <div id="main-demo-area" class="form-group">
                <div class="unit input-group mb-2">
                  <input name="test[]" type="text">
                  <div class="demo-minus input-group-append">
                    <span class="btn btn-danger">-</span>
                  </div>
                </div>
              </div>
              <div id="main-demo-plus" class="btn btn-primary">+</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="demo_box">demo box</div>
    <div class="demo_btn">クローンの作成</div>
    <div id="demo_area"></div>
  </div>
  <script type="text/javascript">
    var minCount = 1;
    var maxCount = 6;
    $(function() {
      $('#main-demo-plus').on('click', function() {
        var inputCount = $('#main-demo-area .unit').length;
        if (inputCount < maxCount) {
          var element = $('#main-demo-area .unit:last-child').clone(true);
          var inputList = element[0].querySelectorAll('input[type="text"]');
          for (var i = 0; i < inputList.length; i++) {
            inputList[i].value = "";
          }
          $('#main-demo-area .unit').parent().append(element);
        }
      });
      $('.demo-minus').on('click', function() {
        var inputCount = $('#main-demo-area .unit').length;
        if (inputCount > minCount) {
          $(this).parents('.unit').remove();
        }
      });
    });
    $('.demo_btn').on('click', function() {
      $(".demo_box").eq(0).clone().appendTo("#demo_area");
    });
  </script>
</body>
@endsection


@include('layouts.footer')

@section('script')

@endsection