<?php
include ("connect.php");
include("sessions.php");
$id=$_GET['id'];
$name=$_GET['name'];
$delete="DELETE from agenda where id='$id'";
$res=mysqli_query($con, $delete);
if ($res) {

  $msg = "The agenda $name is deleted. ";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='agenda.php';</script>";

}
else{

  $msg = "Failed to delete the agenda $name.";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='agenda.php';</script>";

}
header("location: agenda.php");

?>
