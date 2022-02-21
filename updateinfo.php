<?php
  // echo print_r($_POST, true);
require 'connection.php';
$queid =$_POST['queid'];
$name =$_POST['name'];
$opd =$_POST['opd'];
$status = 2;

$sql="UPDATE table1 SET name = '$name',opdno = '$opd',status = '$status' WHERE queid = '$queid'";
$result = mysqli_query($conn, $sql);
if($result){
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$dep = $_POST['row'];

foreach($dep as $value) {

   $dept = $value;
   $deptstatus = 1;

   $sql = "INSERT INTO table2(deptid,queid,status) VALUES ('$dept','$queid','$deptstatus')";
   $result = mysqli_query($conn, $sql);
   if($result){
     echo 'Que number Successful onprocess';
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }
}



//
// $table = $_POST['row'];
//
// for (i = 1; i < array_length($table); i++) {
//   $row = $table[i];
//   echo $row[1]; //waived
//   echo $row[2];
// }
 ?>
