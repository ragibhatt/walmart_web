<?php
include("sessions.php");
include("connect.php");
 if (isset($_POST['insert'])) {

         $name = mysqli_real_escape_string($con, $_POST['name']);
         $dat = mysqli_real_escape_string($con, $_POST['dat']);
         $tim = mysqli_real_escape_string($con, $_POST['tim']);
         $descrip = mysqli_real_escape_string($con, $_POST['descrip']);
         $sql = "INSERT into agenda (name, dat, tim,descrip) VALUES ('$name','$dat','$tim','$descrip')";
         $res=mysqli_query($con, $sql);

       if ($res) {

         $msg = "Agenda uploaded successfully";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='agenda.php';</script>";

       }
       else{

         $msg = "Failed to upload Agenda!";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='agenda.php';</script>";

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
	<title>AGENDA</title>
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
		padding: 10px;
		background-color: #D7D7DF;
	}
	.card-footer button{
		background-color: #2BBBAD;
	}
	.right{
		padding: 20px 0px;
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
          <li class="list-item "><a href="ad_dashboard.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-home"></span></i>DASHBOARD</a>
          </li>
          <li class="list-item"><a href="rsvp.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-in-alt">&nbsp;</span></i>Applicants</a>
          </li>
          <li class="list-item"><a href="agenda.php" class="text-uppercase font-weight-bold"><spam><i class="fas fa-edit"></i>&nbsp;</span>Agenda</a>
          </li>
          <li class="list-item active"><a href="judges.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-layer-group"></i>&nbsp;</span>Judges</a>
          </li>
          <li class="list-item"><a href="prizes.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-award"></i>&nbsp;</span>Prizes</a>
          </li>
          <li class="list-item"><a href="rules.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-star"></i>&nbsp;</span> Rules</a>
          </li>
          <li class="list-item"><a href="query.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-question-circle"></i>&nbsp;</span>Queries</a>
          </li>
          <li class="list-item"><a href="sponsors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-user-tie"></i>&nbsp;</span>Sponsors</a>
          </li>
          <li class="list-item"><a href="problem.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-code"></i>&nbsp;</span> Problem Statement</a>
          </li>
          <li class="list-item"><a href="mentors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-code"></i>&nbsp;</span>Mentors and Speakers</a>
          </li>
          <li class="list-item"><a href="logout.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-out-alt"></i>&nbsp;</span> Logout</a>
					</li>
        </ul>
      </div>
			<div class="col-sm-4 col-md-4 center">
				<div class="card">
					<div class="card-header h1 font-weight-bold text-uppercase text-center">AGENDA</div>
					<div class="card-body">
						<div class="form"> <form action ="agenda.php" method="post">

							<div class="form-group">
								<label for="name">Activity Name:</label>
								<input type="text" name="name" id="name" class="form-control">
							</div>
							<div class="form-group">
								<label for="date">Enter Date:</label>
								<input type="date" name="dat" id="date" class="form-control">
							</div>
							<div class="form-group">
								<label for="time">Enter Time:</label>
								<input type="time" name="tim" id="time" class="form-control">
							</div>
							<div class="form-group">
								<label for="description">Activity Description:</label>
								<textarea class="form-control" name="descrip" id="description" rows="4"></textarea>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="text-center">
							<button class="btn font-weight-bold text-white" name="insert">Add Agenda</button>
						</div>
					</div>
				</div></form>
			</div>
			<div class="col-sm-6 col-md-6 right">
				<table class="table table-hover table-striped table-bordered table-responsive table-dark" id="makeEditable">
					<thead class="font-weight-bold text-center">
						<tr>

						<th><b>Name</th>
						<th><b>Date</th>
						<th><b>Time</th>
						<th><b>Description</th>
            <th><b>Edit</th>
            <th><b>Delete</b></th>
						</tr>
					</thead>
          <!--PHP for sponsors -->
          <?php
          $query = $con->query('SELECT * FROM agenda');

          if($query->num_rows > 0){
              while($row = $query->fetch_assoc()){

                  $name = $row['name'];
                  $dat = $row['dat'];
                  $tim = $row['tim'];
                  $descrip=$row['descrip'];
          ?>
					<tbody>
						<tr>
						<td><?php echo"$name"; ?></td>
						<td><?php echo"$dat"; ?></td>
						<td><?php echo"$tim"; ?></td>
						<td class="text-justify"><?php echo"$descrip"; ?></td>
            <td><a href="edit_agenda.php?id= <?php echo $row["id"];  ?> " class= "btn btn-sm text-center btn-success text-upppercase">Edit</a></td>
            <td><a href="del_agenda.php?id=<?php echo $row["id"];  ?>" class= "btn btn-sm btn-danger text-center text-upppercase">Delete</a></td>
						</tr>
          <?php }
          }
          else{ ?>
            <center>  <h1>NO AGENDA PLANNED</h1></center>
          <?php } ?>
					</tbody>
				</table>
			</div>
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
	<!-- Bootstable JS --->
	<script type="text/javascript" src="JS/bootstable.js"></script>

</body>
</html>
