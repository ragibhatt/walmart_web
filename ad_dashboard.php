<?php

include("sessions.php");
include("connect.php");

 ?>

<!DOCTYPE html>
<html>
<head>
	<!--Meta Tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<!--- Swiper CSS --->
	<!-- <link rel="stylesheet" type="text/css" href="CSS/swiper.min.css"> -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" type="text/css" href="CSS/mdb.min.css">
	<!-- Google Fonts --->
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<style>
	html,body{
	margin:0px;
	padding: 0px;
	background-color: #D7D7DF;
	}
	.left{
	background-color:black ;#2F4050
	padding:50px 0px;
	width: 100%;
	height: 100vh;
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
		color: white ;#FFFFFF
		background-color:#1AB394 ;
		font-weight: bold;
		display: block;
		transform: scale(1.2);
	}
	.left ul .active a{
		color: #FFFFFF;

		font-weight: bolder;
	}
	.col-sm-10 .navbar{
		background-color: black;
	}
	.navbar-brand{
		font-size: 50px;
		font-family: 'Pacifico', cursive;
	}
	.col-sm-10 .main{
		margin-top: 100px;
	}
	.col-sm-10 .main .row .col-sm-3{
		padding: 80px 0px;
	}
	.col-sm-10 .main .row .col-sm-3 a{
		font-size: 30px;
	}
  	</style>
	<title>ADMIN PANEL</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 col-md-2 left">
				<h1 class="text-uppercase font-weight-bold text-white">Walmart</h1>
				<hr class="white">
				<ul class="nav nav-pills nav-stacked md-pills" id="main">

					<li class="list-item active"><a href="ad_dashboard.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-home"></span></i>DASHBOARD</a>
					</li>
					<li class="list-item"><a href="rsvp.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-in-alt"></span></i>Applicants</a>
					</li>
					<li class="list-item"><a href="agenda.php" class="text-uppercase font-weight-bold"><spam><i class="fas fa-edit"></i>&nbsp;</span>Agenda</a>
					</li>
					<li class="list-item"><a href="judges.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-layer-group"></i>&nbsp;</span>Judges</a>
					</li>
					<li class="list-item"><a href="prize.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-award"></i>&nbsp;</span> Prizes</a>
					</li>
					<li class="list-item"><a href="rules.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-star"></i>&nbsp;</span> Rules</a>
					</li>
					<li class="list-item"><a href="query.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-question-circle"></i>&nbsp;</span> Queries</a>
					</li>
					<li class="list-item"><a href="sponsors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-user-tie"></i>&nbsp;</span> Sponsors</a>
					</li>
					<li class="list-item"><a href="problem.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-code"></i>&nbsp;</span> Problem Statement</a>
					</li>
          <li class="list-item"><a href="mentors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-user-tie"></i>&nbsp;</span> Mentors and Speakers</a>
          </li>
					<li class="list-item"><a href="logout.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-out-alt"></i>&nbsp;</span> Logout</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-10 col-sm-10">
				<nav class="navbar navbar-expand-lg">
					<div class="container">
						<a href="ad_dashboard.php" class="navbar-brand font-weight-bold text-white">Welcome, Admin</a>
					</div>
				</nav>
				<div class="container main">
					<div class="row">
						<div class="col-sm-3 text-center" style="background-color: black; height: 200px;">
							<a href="rsvp.php"  class="font-weight-bold text-uppercase text-white">applicants</a>
						</div>
						<div class="col-sm-3 text-center" style="background-color: orange; height: 200px;">
							<a href="agenda.php"  class="font-weight-bold text-uppercase text-white">agenda</a>
						</div>
						<div class="col-sm-3 text-center" style="background-color: black; height: 200px;">
							<a href="judges.php" class="font-weight-bold text-uppercase text-white">judges</a>
						</div>
						<div class="col-sm-3 text-center" style="background-color: orange; height: 200px;">
							<a href="prize.php"  class="font-weight-bold text-uppercase text-white">prizes</a>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-sm-3 text-center" style="background-color: orange; height: 200px;">
							<a href="rules.php"  class="font-weight-bold text-uppercase text-white">rules</a>
						</div>
						<div class="col-sm-3 text-center" style="background-color: black; height: 200px;">
							<a href="query.php"  class="font-weight-bold text-uppercase text-white">queries</a>
						</div>
						<div class="col-sm-3 text-center" style="background-color: orange; height: 200px;">
							<a href="sponsors.php"  class="font-weight-bold text-uppercase text-white">sponsors</a>
						</div>
						<div class="col-sm-3 text-center" style="background-color: black; height: 200px;">
							<a href="problem.php"  class="font-weight-bold text-uppercase text-white">problem</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a href="#" class="text-white navbar-brand font-weight-bold">Walmart</a>
		</div>
	</nav> -->
<!-- Swiper -->
  <!-- <div class="swiper-container">
    <div class="swiper-wrapper">
      <a href="signup.html" target="_blank" class="swiper-slide text-center text-uppercase h1 font-weight-bold text-white" style="background-color: red; padding: 125px 0px;">Applicants</a>
      <a href="agenda.html" target="_blank" class="swiper-slide text-center text-uppercase h1 font-weight-bold text-white" style="background-color: green; padding: 125px 0px;" >Agenda</a>
      <a href="rules.html" target="_blank" class="swiper-slide text-center text-uppercase h1 font-weight-bold text-white" style="background-color: blue; padding: 125px 0px;" >Rules</a>
      <a href="prizes.html" class="swiper-slide text-center text-uppercase h1 font-weight-bold text-white" style="background-color: orange; padding: 125px 0px;" >Prize</a>
      <a href="problem.html" target="_blank" class="swiper-slide text-center text-uppercase h1 font-weight-bold text-white" style="background-color: violet; padding: 125px 0px;" >Problem Statement</a>
      <a href="queries.html" target="_blank" class="swiper-slide text-center text-uppercase h1 font-weight-bold text-white" style="background-color: green; padding: 125px 0px;" >Queries</a>
      <a href="judges.html" target="_blank" class="swiper-slide text-center text-uppercase h1 font-weight-bold text-white" style="background-color: yellow; padding: 125px 0px;" >Judges</a>
      	<a href="sponsors.html" target="_blank" class="swiper-slide text-center text-uppercase h1 font-weight-bold text-white" style="background-color: yellow; padding: 125px 0px;" >Sponsors</a>
    </div>

    <div class="swiper-pagination"></div>
  </div> -->
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<!-- Popper JS --->
	<script type="text/javascript" src="JS/popper.min.js"></script>
	<!-- Bootstrap Core JS --->
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<!-- MDB Core JS --->
	<script type="text/javascript" src="JS/mdb.min.js"></script>
	<!-- Swiper JS --->
	<!-- <script type="text/javascript" src="JS/swiper.min.js"></script>
	<script type="text/javascript">
		 var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      centeredSlides: true,
      slidesPerView: 'auto',
      grabCursor : true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
	</script> -->
</body>
</html>
