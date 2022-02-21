<?php
require 'connection.php';
$priority=$_POST['priority'];

$timezone = "Asia/Colombo";
date_default_timezone_set($timezone);
$today = date("md");

  $sql = "SELECT COUNT(queid) FROM table1";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $rowcount = $row[0] + 1;
  $count = sprintf('%04d', $rowcount);

  $status = 1;

$que = $priority . $count;

  $sql = "INSERT INTO table1(queid,priority,series,Status) VALUES ($que,$priority,$count,$status)";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo $que;
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }

mysqli_close($conn);



 ?>
