<?php
$flag=$_GET['flag'];
$var1=$_GET['PKid'];
include('connect.php');

if ($flag=="disable") {
  $query="update query set faq=0 where id=".$var1;
}else {
  $query="update query set faq=1 where id=".$var1;
}

mysqli_query($con,$query) or die(mysqli_error($select_db));
header('location:query.php');

 ?>
