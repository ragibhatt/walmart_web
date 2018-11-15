<?php
  //start session
  session_start();
  //if the userlogin is not true
  if(!isset($_SESSION['adlogin']))
  {
    //alert the error
    echo "<script type='text/javascript'>";
    echo "alert('Sorry! Cannot access this page');";
    echo "</script>";
    $URL="admin_login.php";
    echo "<script> location.href='$URL'</script>";
  }
?>
