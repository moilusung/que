
<?php

require 'connection.php';

$id = $_POST['id'];

require 'connection.php';

$sql = "SELECT name,opdno,status FROM table1 WHERE queid = '$id'";
$result = mysqli_query($conn, $sql);
$i= 0 ;
while ($row = mysqli_fetch_array($result)) {
$i++;
?>


<script src="resources/jquery/3.5.1/jquery.min.js"></script>
<form id="post" class="" method="post">
<div class="modal-body">
  <input type="hidden"  id="queid" name="" value="">
  <div class="mb-2 row">
    <label for="que" class="col-sm-2 col-form-label">Que</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" name = "queid" readonly id="que" placeholder="Lastname, Firstname M.I" value="<?php echo $id; ?>">
    </div>
  </div>
  <div class="mb-2 row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Lastname, Firstname M.I" value="<?php echo $row[0];  ?>">
    </div>
  </div>
  <div class="mb-2 row">
    <label for="opdno" class="col-sm-2 col-form-label">OPD</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="opdno" name="opd"   value="<?php echo $row[1];  ?>">
    </div>
  </div>
  <div class="row">
    <label for="">Department</label>
    <div class="col-md-3">
      <input class="p-3 mt-3" type="checkbox" name="row[]"  value="1"><span class=" mb-5 text-center" style="font-size:13px"> Dept1</span>
    </div>
    <div class="col-md-3">
      <input class="p-3 mt-3" type="checkbox" name="row[]"  value="2"><span class=" mb-5 text-center" style="font-size:13px"> Dept2</span>
    </div>
    <div class="col-md-3">
      <input class="p-3 mt-3" type="checkbox" name="row[]" value="3"><span class=" mb-5 text-center" style="font-size:13px"> Dept3</span>
    </div>
    <div class="col-md-3">
      <input class="p-3 mt-3" type="checkbox" name="row[]"  value="4"><span class=" mb-5 text-center" style="font-size:13px"> Dept4</span>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <input class="p-3 mt-3" type="checkbox" name="row[]"  value="5"><span class=" mb-5 text-center" style="font-size:13px"> Dep5</span>
    </div>
    <div class="col-md-3">
      <input class="p-3 mt-3" type="checkbox" name="row[]"  value="6"><span class=" mb-5 text-center" style="font-size:13px"> Dept6</span>
    </div>
    <div class="col-md-3">
      <input class="p-3 mt-3" type="checkbox" name="row[]"  value="7"><span class=" mb-5 text-center" style="font-size:13px"> Dept7</span>
    </div>
    <div class="col-md-3">
      <input class="p-3 mt-3" type="checkbox" name="row[]"  value="8"><span class=" mb-5 text-center" style="font-size:13px"> Dept8</span>
    </div>
</div>
</form>
<?php } ?>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button id="updateinfo" type="button" class="btn btn-primary">Save changes</button>
</div>


<script type="text/javascript">
$('#updateinfo').click(function() {
         $.post('updateinfo.php', $('#post').serialize(),
             function(response) {
                 alert(response);
                 location.reload();
             });

     });

</script>
