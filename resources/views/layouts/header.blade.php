@section('header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="header"></div>
<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
<label for="openSidebarMenu" class="sidebarIconToggle">
  <div class="spinner diagonal part-1"></div>
  <div class="spinner horizontal"></div>
  <div class="spinner diagonal part-2"></div>
</label>
<div id="sidebarMenu">
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              <span class="mb-2">test</span>
            </div>
            <div class="card-body">
              <div id="demo-area" class="form-group">
                <div class="unit input-group mb-2">
                  <input name="test[]" type="text">
                  <div class="demo-minus input-group-append">
                    <span class="btn btn-danger">-</span>
                  </div>
                </div>
              </div>
              <div id="demo-plus" class="btn btn-primary">+</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      var minCount = 1;
      var maxCount = 6;
      $(function() {
        $('#demo-plus').on('click', function() {
          var inputCount = $('#demo-area .unit').length;
          if (inputCount < maxCount) {
            var element = $('#demo-area .unit:last-child').clone(true);
            var inputList = element[0].querySelectorAll('input[type="text"]');
            for (var i = 0; i < inputList.length; i++) {
              inputList[i].value = "";
            }
            $('#demo-area .unit').parent().append(element);
          }
        });
        $('.demo-minus').on('click', function() {
          var inputCount = $('#demo-area .unit').length;
          if (inputCount > minCount) {
            $(this).parents('.unit').remove();
          }
        });
      });
    </script>
  </body>
</div>
@endsection