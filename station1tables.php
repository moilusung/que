<?php require 'connection.php';
require 'header.php';
$sql = "SELECT * FROM table1 WHERE status = 1 ORDER BY Series ";
$result = mysqli_query($conn, $sql);

?>
<script src="resources/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
  <!-- Button trigger modal -->
  <div class="row">
    <div class="col-md-10">
      <button type="button" class="btn btn-warning btn-sm mt-2 mb-0" data-bs-toggle="modal" data-bs-target="#addModal">
        Add Que
      </button>
    </div>
    <div class="col-md-2 ">
      <div class="form-check form-switch p-2">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
        <label class="form-check-label fs-6

        " for="flexSwitchCheckDefault">Priority</label>
      </div>
    </div>
  </div>
  <!-- Button trigger modal end-->
<table id="example" class="table  table-striped table-bordered nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Series</th>
            <th>Que Number</th>
            <th>Priority</th>
            <th>Full Name</th>
            <th>OPD ID</th>
            <th>Info</th>
        </tr>
    </thead>
    <tbody>
        <?php
          while ($row=mysqli_fetch_array($result)) {
            echo '
            <tr>
              <td>'.$row["series"].'</td>
              <td class="fw-bold" >'.$row["queid"].'</td>
              <td>'.$row["priority"].'</td>
              <td width = "30%">'.$row["name"].'</td>
              <td>'.$row["opdno"].'</td>
              <td width="4%"><a href="" class="btn btn-primary btn-sm p-1" role="button" data-bs-toggle="modal" data-bs-target="#infoModal" onclick="dataId('.$row["queid"].')">Info</a></td>
            </tr>';
          }
         ?>
    </tbody>
</table>
</div>

<!-- Add modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Information</h5>
            <button type="button" class="btn-close h-3" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div id="data_id" class="">

          </div>
        </div>
      </div>
    </div>
<!-- modal end -->

<script type="text/javascript">
  function dataId(a){
    $.ajax({
      type:'post',
      url:'getinfo.php',
      data: {id:a},
      success: function(response){
        $('#data_id').html(response);
      }
    });
  }
</script>
