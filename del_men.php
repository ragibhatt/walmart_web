<?php
include ("connect.php");
include("sessions.php");
$id=$_GET['id'];
$name=$_GET['name'];
$delete="DELETE from mentors where id='$id'";
$res=mysqli_query($con, $delete);
if ($res) {

  $msg = "The $name is deleted. ";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='mentors.php';</script>";

}
else{

  $msg = "Failed to delete the  $name.";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='mentors.php';</script>";

}
header("location: mentors.php");

?>
