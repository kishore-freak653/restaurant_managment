<?php
	session_start();

	if (isset($_SESSION['uid'])) 
	{
		
	}
	else
	{
		header('location: ../login.php');
	}

	include('../dbcon.php');
	$uid = $_SESSION['uid'];
	$query = "SELECT * FROM `user` WHERE `id` = '$uid'";
	$run = mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<style>
		body{
			background-image: linear-gradient(rgba(0, 0, 0, 0.39), rgba(0, 0, 0, 0.6)), url("../images/fod.webp");
			background-repeat: no-repeat;    
			background-attachment: fixed;
   		 	background-position: center;
    		background-size: cover;
		}
		.main{
			padding-bottom: 10px;
			border-radius: 25px; 
			margin-top: 50px; 
			opacity: 0.9;
			width: 500px;
			color: white;
			border: 5px solid #ffffff;
            padding: 5px;  
			
			background-image: linear-gradient(to bottom right, black,#0F0B0E);
		}
		.info
		{
    		display:inline;
			padding:2px;
			font-family: "Times New Roman", Times, serif;
			font-weight: 200;
			background-color: #0000FF;
    		color:#fff;
    		opacity: 0.9;
    		border-radius: 5px;
		}
		.tag
		{
			padding: 15px;
			font-weight: 400;
			font-size: 19px;
			text-align: right;
			font-family: "fantasy";
		}
		.data
		{
			padding: 9px;
			font-weight: 600;
			font-size: 19px;
			text-align: left;
			font-family: "fantasy";
		}
		.btn {
			  font-family: "fantasy";
              transition-duration: 0.4s;
              background-color: #bfbfbf; /* Green */
              box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
              
		}
		#h1{
			font-family: "fantasy";
		}
		
	</style>
</head>
<body>
	
	<div class="bg-dark pt-2 pb-2">
		<a href="../index.php"><button type="button" class="btn btn-light ml-3" style="float:left;">HOME</button></a>
		<a href="../menu/cart.php"><button type="button" class="btn btn-light mr-3" style="float:right;">CART</button></a>
		<h1 class="text-center text-light">Taste-Beyond</h1>
	</div>

	<div class="text-center pb-1  pt-5">
		<h1 class="info">ACCOUNT INFORMATION</h1>
	</div>

	
	<div class="container bg-dark text-light text-center main">

		<h1><?php echo "Welcome ".$data['name'] ?></h1>

		<table align="center" >
			<tr>
				<td class="tag">Name :</td>
				<td class="data"><?php echo $data['name'] ?></td>
			</tr>
			<tr>
				<td class="tag">Mobile No :</td>
				<td class="data"><?php echo $data['mobile'] ?></td>
			</tr>
			<tr>
				<td class="tag">Address :</td>
				<td class="data" width="300"><?php echo $data['address'] ?></td>
			</tr>
			<tr>
				<td class="tag">Email :</td>
				<td class="data"><?php echo $data['email'] ?></td>
			</tr>
			<tr>
				<td><a href="editInfo.php"><button class="btn btn-primary">Edit Information</button></a></td>
				<td><a href="chngePwd.php"><button class="btn btn-primary">Change Password</button></a></td>
			</tr>
		</table>
	</div>
    
	




	<!--footerdesign-->
	     <div class="mt-5 p-4 bg-dark text-white text-center">
          <p class="text-danger">Footer</p>
		  <footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="index.php" class="text-dark">MENU</a>
          </li>
          <li>
            <a href="cart.php" class="text-dark">CART</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="login.php" class="text-dark" font-family="fantasy">UserLogin</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Link 2</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    
    <p class="text-dark" >© 2023 Copyright:TASTE-BEYOND</p>
  </div>
  <!-- Copyright -->
</footer>
           </div>
<!--footer design-->

	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>		
</body>
</html>