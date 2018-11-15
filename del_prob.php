<?php
include ("connect.php");
include("sessions.php");
$id=$_GET['id'];
$category=$_GET['category'];
$delete="DELETE from problem where id='$id'";
$res=mysqli_query($con, $delete);
if ($res) {

  $msg = "The problem statement of $category is deleted. ";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='problem.php';</script>";

}
else{

  $msg = "Failed to delete The problem statement of $category.";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='problem.php';</script>";

}
header("location: problem.php");

?>
