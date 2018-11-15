<?php
	include('sessions.php');
	include('connect.php');
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
	<title>QUERIES</title>
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
	.card-footer button{
		background-color: #2BBBAD;
	}
	.center{
		padding: 20px;
		background-color: #D7D7DF;
	}
	.right{
		padding: 20px 10px;
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
					<li class="list-item"><a href="ad_dashboard.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-home"></span></i>DASHBOARD</a>
					</li>
					<li class="list-item"><a href="rsvp.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-in-alt">&nbsp;</span></i>Applicants</a>
					</li>
					<li class="list-item"><a href="agenda.php" class="text-uppercase font-weight-bold"><spam><i class="fas fa-edit"></i>&nbsp;</span>Agenda</a>
					</li>
					<li class="list-item"><a href="judges.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-layer-group"></i>&nbsp;</span>Judges</a>
					</li>
					<li class="list-item"><a href="prize.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-award"></i>&nbsp;</span>Prizes</a>
					</li>
					<li class="list-item"><a href="rules.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-star"></i>&nbsp;</span> Rules</a>
					</li>
					<li class="list-item active"><a href="query.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-question-circle"></i>&nbsp;</span>Queries</a>
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

			<div class="col-sm-7 col-md-7 right">
				<table class="table table-hover table-striped table-bordered table-responsive table-dark" id="makeEditable">
					<thead class="font-weight-bold text-center">
						<tr>
						<th><b>#Serial Number</th>
						<th><b>Query From</th>
						<th><b>Subject</th>
						<th><b>Question</th>
            <th><b>Answer</th>
            <th><b>Update Answer</th>
            <th><b>Enable FAQ</th>
						<th><b>Disable FAQ</th>
						</tr>
					</thead>
					<?php

						$query="select * from query";
						$result=mysqli_query($con,$query);
					?>
					<tbody>
						<?php
							$count=0;
							while ($row=mysqli_fetch_array($result)) {
								$count++;
						 ?>

						<tr>
							<form action="qupdate1.php" method="post">
								<input type="hidden" name="PKid" value="<?php echo  $row['id'] ?>">
								<input type="hidden" name="email" value="<?php echo $row['email'] ?>">
						<td> <?php echo $count; ?> </td>
						<td> <?php echo $row['qfrom']; ?> </td>
						<td> <?php echo $row['sub']; ?> </td>
						<td> <?php echo $row['qsn']; ?> </td>
						<?php if ($row['ans']==NULL) { ?>
							<td> <textarea name="textarea" rows="4" cols="40"></textarea> </td>
							<td> <button type="submit" name="button" class= "btn btn-sm text-center btn-success text-upppercase">UPDATE</button> </td>
							<td> <button type="button" name="button" class= "btn btn-sm btn-danger text-center text-upppercase" disabled>faq</button> </td>
							<td> <button type="button" name="button" class= "btn btn-sm btn-danger text-center text-upppercase" disabled>Disable</button> </td>
						<?php	} else { ?>
							<td> <?php echo $row['ans']; ?> </td>
							<td> <button type="submit" name="button" class= "btn btn-sm text-center btn-success text-upppercase" disabled>UPDATE</button> </td>
						<?php 		if ($row['faq']) {?>
											<td> <button type="button" name="button" class= "btn btn-sm btn-danger text-center text-upppercase" disabled>faq</button> </td>
											<td><a href="qupdate2.php?PKid=<?php echo $row['id']; ?>&flag=disable"  class= "btn btn-sm btn-danger text-center text-upppercase">Disable</a></td>
									  <?php 	} else { ?>
											<td><a href="qupdate2.php?PKid=<?php echo $row['id']; ?>&flag=enable"  class= "btn btn-sm btn-danger text-center text-upppercase">FAQ</a></td>
											<td> <button type="button" name="button" class= "btn btn-sm btn-danger text-center text-upppercase" disabled>Disable</button> </td>
									  <?php }
									} ?>


							</form>
						</tr>
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
