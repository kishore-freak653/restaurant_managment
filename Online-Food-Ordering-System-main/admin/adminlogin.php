<?php
	
	session_start();

	if (isset($_SESSION['aid'])) 
	{
		header('location: admindash.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Taste-Beyond/Login </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<style>
		body{
			background-image: linear-gradient(rgba(0, 0, 0, 0.39), rgba(0, 0, 0, 0.6)), url("../images/adminlogiin.webp");
			background-repeat: no-repeat;    
			background-attachment: fixed;
   		 	background-position: center;
    		background-size: cover;
		}
		
	</style>

	<div class=" bg-dark pt-2 pb-3">
		<a href="../index.php"><button type="button" class="d-block p-2 bg-secondary .text-white-50  btn btn-secondary " style="float:right;">HOME</button></a>
		<a href="../login.php"><button type="button" class="d-block p-2 bg-secondary text-white  btn btn-secondary " style="float:left;"> >>Back</button></a>
		<h1 class="text-center text-light">Taste-Beyond</h1>
	</div>
	
	<div class="container p-1 my-1 border text-center .text-light bg-secondary">
		<h1>ADMIN LOGIN</h1>
	</div>

	<div class="container mt-3 pt-3">
		<table align="center">
			<form action="adminlogin.php" method="post">
				<tr>
					<td><font color = "White">Username : </td>
					<td><input type="text" name="uname" value="admin" required></td>
				</tr>
				<tr>
					<td><font color = "White">Password :</td>
					<td><input type="password" name="pass" value="admin" required></td>
				</tr>
				<tr>
					<td colspan="2" align="center" height="80">
						<input type="submit"  name="login" value="Log In">
					</td>
				</tr>
			</form>
		</table>
	</div>
	
	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>
</body>
</html>

<?php
	
	include('../dbcon.php');

	if (isset($_POST['login'])) 
	{
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		$query = "SELECT * FROM `admin` WHERE `username` = '$uname' AND `password` = '$pass'";
		$run = mysqli_query($conn, $query);
		$row = mysqli_num_rows($run);

		if($row < 1)
		{
			?>
				<script>
					alert("Username and Password not match");
					window.open('adminlogin.php', '_self');
				</script>
			<?php
		}
		else
		{
			$data = mysqli_fetch_assoc($run);

			$id = $data['id']; 

			$_SESSION['aid'] = $id;

			header('location: admindash.php');
		}
	}
	
?>

