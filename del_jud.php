<?php
include ("connect.php");
include("sessions.php");
$id=$_GET['id'];
$name=$_GET['name'];
$delete="DELETE from judges where id='$id'";
$res=mysqli_query($con, $delete);
if ($res) {

  $msg = "The judge $name is deleted. ";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='judges.php';</script>";

}
else{

  $msg = "Failed to delete the judge $name.";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='judges.php';</script>";

}
header("location: judges.php");

?>
