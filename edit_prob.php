<?php
	include_once('connect.php');
include("sessions.php");
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysqli_query($con,"SELECT * FROM problem WHERE id='$id'");
		$row= mysqli_fetch_assoc($res);
}
	if( isset($_POST['edit']))
	{
    $id=$_POST['id'];
		$category = $_POST['category'];
    $descrip = $_POST['descrip'];
		$sql = "UPDATE problem SET category='$category',descrip='$descrip' WHERE id='$id'";
    $res 	 = mysqli_query($con,$sql) or die("Could not update!");
  		echo "<meta http-equiv='refresh' content='0;url=problem.php'>";
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
	<title>PROBLEM STATEMENT</title>
	<style type="text/css">
	html,body{
	margin:0px;
	padding: 0px;
	}
	.left{
	background-color: #2F4050;
	width: 100%;
	height: 100vh;
	padding:50px 0px;
	}
	.left h1{
		font-family: Roboto;
		font-size: 30px;
	}
	.left ul{
		display: block;
	}
	.left ul li{
		padding: 10px;
	}
	.left ul li a{
		color: #9FB1C2;
		font-size: 16px;
		font-family: Poppins;
	}
	.left ul li a:hover{
		color: #FFFFFF;
		background-color: #1AB394;
		font-weight: bold;
		display: block;
		transform: scale(1.2);
	}
	.left ul .active a{
		color: #FFFFFF;
		background-color: #27AAE1;
		font-weight: bolder;
	}
	.center{
		padding: 25px 10px;
		background-color: #D7D7DF;
	}
	.card-footer button{
		background-color: #2BBBAD;
	}
	.right{
		padding: 25px 10px;
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
      <div class="col-sm-2 col-md-2 left">
        <h1 class="text-uppercase font-weight-bold text-white">Dashboard</h1>
        <hr class="white">
        <ul class="nav nav-pills nav-stacked md-pills" id="main">
          <li class="list-item"><a href="rsvp.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-in-alt">&nbsp;</span></i>Applicants</a>
          </li>
          <li class="list-item"><a href="agenda.php" class="text-uppercase font-weight-bold"><spam><i class="fas fa-edit"></i>&nbsp;</span>Agenda</a>
          </li>
          <li class="list-item "><a href="judges.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-layer-group"></i>&nbsp;</span>Judges</a>
          </li>
          <li class="list-item"><a href="prizes.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-award"></i>&nbsp;</span>Prizes</a>
          </li>
          <li class="list-item"><a href="rules.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-star"></i>&nbsp;</span> Rules</a>
          </li>
          <li class="list-item"><a href="query.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-question-circle"></i>&nbsp;</span>Queries</a>
          </li>
          <li class="list-item"><a href="sponsors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-user-tie"></i>&nbsp;</span>Sponsors</a>
          </li>
          <li class="list-item active"><a href="problem.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-code"></i>&nbsp;</span> Problem Statement</a>
          </li>
          <li class="list-item"><a href="mentors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-code"></i>&nbsp;</span>Mentors and Speakers</a>
          </li>
        </ul>
      </div>
			<div class="col-sm-4 col-md-4 center">
				<div class="card">
					<div class="card-header h1 font-weight-bold text-uppercase text-center">Problem Statement</div>
					<div class="card-body">
						<div class="form">

							<div class="form-group">
                <form action="edit_prob.php" method="post">
								<label for="category">Category</label>
								<input type="text" name="category" id="category" value="<?php echo $row['category']; ?>" class="form-control">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" name="descrip" rows="10" id="description"><?php echo $row['descrip']; ?></textarea>
							</div>
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" class="form-control">
            </div>
						</div>
					</div>
					<div class="card-footer">
						<div class="text-center">
							<button class="btn font-weight-bold text-white" name="edit" value="submit">EDIT Problem Statement</button>
						</div>
					</div>
				</div></form>
			</div>

	<!-- jQuery --->
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<!-- Popper JS --->
	<script type="text/javascript" src="JS/popper.min.js"></script>
	<!-- Bootstrap Core JS --->
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<!-- MDB Core JS --->
	<script type="text/javascript" src="JS/mdb.min.js"></script>
	<script type="text/javascript" src="JS/bootstable.js"></script>

</body>
</html>
