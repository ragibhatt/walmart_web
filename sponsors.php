
<?php
include("sessions.php");
include("connect.php");

    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }

     if (isset($_POST['insert'])) {
       $target = "../walmart/images/sponsors/".basename($_FILES["s_image"]["name"]);
       $fileimg=$_FILES['s_image']['name'];
       $error = $_FILES['s_image']['error'];
       $imgtype=$_FILES['s_image']['type'];
       $ext= GetImageExtension($imgtype);
         $s_id = mysqli_real_escape_string($con, $_POST['s_id']);
         $name = mysqli_real_escape_string($con, $_POST['name']);
         $contact = mysqli_real_escape_string($con, $_POST['contact']);
         $email = mysqli_real_escape_string($con, $_POST['email']);
      $sql = "INSERT into sponser (s_id, name, contact, email, s_image) VALUES ('$s_id','$name','$contact','$email','$fileimg')";
       mysqli_query($con, $sql);

       if (move_uploaded_file($_FILES['s_image']['tmp_name'],$target)) {

         $msg = "Image was uploaded successfully";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='sponsors.php';</script>";

       }
       else{

         $msg = "Failed to upload Image";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='sponsors.php';</script>";

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
	<title>SPONSORS</title>
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
		background-color: #D7D7DF;
	}
	.card{
		margin-top: 50px;
	}
	.right{
		background-color: #D7D7DF;
		padding: 50px 0px;
	}
	#but_add{
		transform: translateX(250px);
	}
	#button{
		transform: translateX(180px);
		background-color: #2BBBAD;
	}
  .aqua-gradient{
    background-color: #2BBBAD;
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
					<li class="list-item"><a href="prizes.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-award"></i>&nbsp;</span>Prizes</a>
					</li>
					<li class="list-item"><a href="rules.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-star"></i>&nbsp;</span> Rules</a>
					</li>
					<li class="list-item"><a href="query.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-question-circle"></i>&nbsp;</span>Queries</a>
					</li>
					<li class="list-item active"><a href="sponsors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-user-tie"></i>&nbsp;</span>Sponsors</a>
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
					<div class="card-header h1 font-weight-bold text-uppercase text-center">Our Sponsors</div>
					<div class="card-body">


						<div class="form">
							<div class="form-group">
								<form action ="sponsors.php" method="post" enctype="multipart/form-data">
								<label for="name">Sponsor ID</label>
								<input type="text" name="s_id" id="name" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">Sponsor Name:</label>
								<input type="text" name="name" id="name" class="form-control">
							</div>
              <div class="form-group">
                <label for="name">Sponsor Contact:</label>
                <input type="tel" name="contact" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="name">Sponsor Email:</label>
                <input type="email" name="email" id="name" class="form-control">
              </div>
							<div class="form-group">
                <label for="file">Sponsor Image</label>
								<input type="file" name="s_image" id="file" class="form-control py-1">
							</div>

							<button class="btn btn-sm text-center text-uppercase aqua-gradient" name="insert" value="submit" id="button">Add</button>
						</div></form>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 right">
				<table class="table table-hover table-striped table-bordered table-responsive table-dark" id="makeEditable">


					<thead class="font-weight-bold text-center">
						<tr>
						<th><b>Sponsor ID</th>
						<th><b>Sponsor Name</th>
						<th><b>Sponsor Contact</th>
            <th><b>Sponsor Email</th>
            <th><b>Sponsor Image</th>
            <th><b>Edit</th>
            <th><b>Delete</b></th>
          </tr>
					</thead>
          <!--PHP for sponsors -->
          <?php
          $query = $con->query('SELECT * FROM sponser');

          if($query->num_rows > 0){
              while($row = $query->fetch_assoc()){
                  $imageURL = '../walmart/images/sponsors/'.$row['s_image'];
                  $name = $row['name'];
                  $contact = $row['contact'];
                  $email = $row['email'];
                  $s_id = $row['s_id'];
          ?>
					<tbody>
						<tr>
						<td><?php echo "$s_id";  ?></td>
						<td><?php echo"$name"; ?></td>
            <td><?php echo"$contact";?></td>
						<td class="text-justify"><?php echo "$email";?></td>
            <td> <img src=" <?php echo $imageURL; ?> " style="height:150px" alt="Sponsers"> </td>
            <td><a href="edit_spon.php?id= <?php echo $row["id"];  ?> " class= "btn btn-sm text-center btn-success text-upppercase">Edit</a></td>
            <td><a href="del_spon.php?id=<?php echo $row["id"];  ?>" class= "btn btn-sm btn-danger text-center text-upppercase">Delete</a></td>
						</tr>
          <?php }
          }
          else{ ?>
            <center>  <h1>NO SPONSORS</h1></center>
          <?php } ?>
					</tbody>
				</table>

				<span><button id="but_add" class="btn btn-danger">Add New Row</button></span>
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
