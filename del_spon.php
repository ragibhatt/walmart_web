<?php
include ("connect.php");
include("sessions.php");
$id=$_GET['id'];
$name=$_GET['name'];
$delete="DELETE from sponser where id='$id'";
$res=mysqli_query($con, $delete);
if ($res) {

  $msg = "The sponsor $name is deleted. ";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='sponsors.php';</script>";

}
else{

  $msg = "Failed to delete the sponsor $name.";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='sponsors.php';</script>";

}
header("location: sponsors.php");

?>
