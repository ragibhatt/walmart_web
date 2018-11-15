<?php
$var1=$_POST['PKid'];
$var2=$_POST['textarea'];
$email=$_POST['email'];

//echo $var1;
//echo $var2;
//echo $email;

include('connect.php');
$query="UPDATE query set ans='".$var2."' where id=".$var1;
mysqli_query($con,$query) or die(mysqli_error($con));

if ($result) {
  $to = $email;
  $subject = "";

    $txt = "Dear User,<br>
            Answer for or your query:<br>'$var2'";
            if (mail($to,$subject,$txt)) {
              header("location:query.php");
            }else {
              echo "Mail couldn't be sent try again";
            }
  }

header('location:query.php');

 ?>
