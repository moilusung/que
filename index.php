<?php
include('header.php')
 ?>
 <script src="resources/jquery/3.5.1/jquery.min.js"></script>

<style media="screen">
  input,span {
    font-family: arial
  }
</style>
<body class="bg-white">
  <form id="post" method="post">
  <div class="container">
    <div class="row p-5">
      <div class="col-md-2">

      </div>
      <div class="col-md-8 text-center border shadow p-4 bg-light rounded-3">
        <div class="" style="margin-bottom:10px">
          <span class="">Generate Que Number</span>
        </div>
        <div class="row">
          <div class="col-6">
            <input type="button" class="form-control rounded-pill btn btn-success p-3 que" name="regular" value="REGULAR">
          </div>
          <div class="col-6">
            <input type="button" class="form-control rounded-pill btn btn-danger p-3 que" name="priority" value="PRIORITY">
          </div>
        </div>
      </div>
      <div class="col-md-2">

      </div>
    </div>
  </div>
</form>
</body>

<script>

$(document).on('click', '.que', function (event) {
   var buttonValue = $(this).val();
   if (buttonValue == 'PRIORITY') {
     var priority = 1;
   }else {
     var priority = 2;
   }
   $.post("que.php", {priority: priority}, function(response){
       alert(response);
       location.reload();
   })
});
</script>
