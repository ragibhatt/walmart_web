<?php
include ("connect.php");
include("sessions.php");
$id=$_GET['id'];

$delete="DELETE from rules where id='$id'";
$res=mysqli_query($con, $delete);
if ($res) {

  $msg = "The rule is deleted. ";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='rules.php';</script>";

}
else{

  $msg = "Failed to delete the rule.";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='rules.php';</script>";

}
header("location: rules.php");

?>
