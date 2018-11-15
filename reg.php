
<?php

include("sessions.php");
include("connect.php");
// //Local DB
// $con=mysqli_connect("localhost","root","123456") or die("unable to connect");
// mysqli_select_db($con,'hackathon');
if(isset($_POST['reg'])){

  if(isset($_POST['team_name'])){
      $_SESSION['team_name']=$_POST['team_name'];
      $team_name=$_SESSION['team_name'];
          }
          if(isset($_POST['describes'])){
              $_SESSION['describes']=$_POST['describes'];
              $describes=$_SESSION['describes'];
                  }

    if(isset($_POST['m1_name'])){
        $_SESSION['m1_name']=$_POST['m1_name'];
        $m1_name=$_SESSION['m1_name'];
            }
            if(isset($_POST['m1_email'])){
                $_SESSION['m1_email']=$_POST['m1_email'];
                $m1_email=$_SESSION['m1_email'];
                    }
                    if(isset($_POST['m1_contact'])){
                        $_SESSION['m1_contact']=$_POST['m1_contact'];
                        $sponser_number=$_SESSION['m1_contact'];
                            }
                            if(isset($_POST['m2_name'])){
                                $_SESSION['m2_name']=$_POST['m2_name'];
                                $m2_name=$_SESSION['m2_name'];
                                    }

                                    if(isset($_POST['m2_email'])){
                                        $_SESSION['m2_email']=$_POST['m2_email'];
                                        $m2_email=$_SESSION['m2_email'];
                                            }
                                            if(isset($_POST['m2_email'])){
                                                $_SESSION['m2_email']=$_POST['m2_email'];
                                                $m2_email=$_SESSION['m2_email'];
                                                    }
                                                    if(isset($_POST['m2_contact'])){
                                                        $_SESSION['m2_contact']=$_POST['m2_contact'];
                                                        $m2_contact=$_SESSION['m2_contact'];
                                                            }
                                                            if(isset($_POST['m3_name'])){
                                                                $_SESSION['m3_name']=$_POST['m3_name'];
                                                                $m3_name=$_SESSION['m3_name'];
                                                                    }
                                                                    if(isset($_POST['m3_email'])){
                                                                        $_SESSION['m3_email']=$_POST['m3_email'];
                                                                        $m3_email=$_SESSION['m3_email'];
                                                                            }
                                                                            if(isset($_POST['m3_contact'])){
                                                                                $_SESSION['m3_contact']=$_POST['m3_contact'];
                                                                                $m3_contact=$_SESSION['m3_contact'];
                                                                                    }
                                                                                    if(isset($_POST['m4_name'])){
                                                                                        $_SESSION['m4_name']=$_POST['m4_name'];
                                                                                        $m4_name=$_SESSION['m4_name'];
                                                                                            }
                                                                                            if(isset($_POST['m4_email'])){
                                                                                                $_SESSION['m4_email']=$_POST['m4_email'];
                                                                                                $m4_email=$_SESSION['m4_email'];
                                                                                                    }
                                                                                                    if(isset($_POST['m4_contact'])){
                                                                                                        $_SESSION['m4_contact']=$_POST['m4_contact'];
                                                                                                        $m4_contact=$_SESSION['m4_contact'];
                                                                                                            }
$sql="INSERT INTO rsvp (team_name,describes,m1_name,m1_email,m1_contact,m2_name,m2_email,m2_contact,m3_name,m3_email,m3_contact,m4_name,m4_email,m4_contact)
 VALUES
 ('$team_name','$describes','$m1_name','$m1_email','$m1_contact','$m2_name','$m2_email','$m2_contact','$m3_name','$m3_email','$m3_contact','$m4_name','$m4_email','$m4_contact')";
$res=mysqli_query($con,$sql);
if($res){

    echo "<script>alert('Your details have been registered.')</script>";
    echo "<script type='text/javascript'>window.location.href = 'index.php'    </script>";
}
else{
  echo "<script>alert('Your details have not been registered.')</script>";
  echo "<script type='text/javascript'>window.location.href = 'index.php'    </script>";
}
}
// }
?>
