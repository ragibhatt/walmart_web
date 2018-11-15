<?php
session_start();
if(isset($_SESSION['adlogin'])){
  header("location:ad_dashboard.php");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //Escape the Special Characters in a string.
      $user=$_POST['user'];
     $pass=$_POST['pass'];

      //check name
         if($user=="admin")
        {
        //check password
          if($pass=="admin")
          {
            $_SESSION['adlogin'] = TRUE;
            echo $_SESSION['adlogin'];
          //if the login details entered are correct then redirect to the home page.
           header("location:ad_dashboard.php");
          }
          else
          {
          //if the password is Incorrect, show alert message
            echo "<script type='text/javascript'>;
            alert('Incorrect Password')</script>";
          }
        }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<!--Meta Tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" type="text/css" href="CSS/mdb.min.css">
	<title>Admin Login</title>
	<style type="text/css">
		body{
			margin:0px;
			padding: 0px;
			background:linear-gradient(rgba(24,24,24,0.9) , rgba(24,24,24,0.9)), url(https://images.pexels.com/photos/34092/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);
			object-fit: cover;
			background-size: cover;
			background-position:  center;
		}
		.box{
			width: 400px;
			margin: 0 auto;
			transform: translateY(30%);
			background-color: #D7D7DF;
			padding: 10px 20px;
		}
	</style>
</head>
<body>
	<div class="box">
		<div class="font-weight-bold h2 text-uppercase text-center">Admin login</div>
		<hr>
	<form action="admin_login.php" method="post">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
    					<span class="input-group-text" id="basic-addon1"><i class="fas fa-user-tie"></i></span>
  					</div>
  					<input type="text" class="form-control" name="user"  placeholder="Your Username" aria-label="Username" aria-describedby="basic-addon1">
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
    					<span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
  					</div>
  					<input type="password" class="form-control" name="pass"placeholder="Your Password" aria-label="Password" aria-describedby="basic-addon1">
				</div>
				<div class="form-group">
					<input type="checkbox" name="checkbox" id="checkbox">
					<label data-error="wrong" data-success="right" for="checkbox">Keep me logged in</label>
				</div>
				<hr>
				<div class="text-center">
					<button type="submit" class="btn btn-danger btn-lg text-uppercase">Login</button>
				</div>
			</form>
		</div>
	</div>
	<!-- jQuery --->
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<!-- Popper JS --->
	<script type="text/javascript" src="JS/popper.min.js"></script>
	<!-- Bootstrap Core JS --->
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<!-- MDB Core JS --->
	<script type="text/javascript" src="JS/mdb.min.js"></script>
</body>
</html>
