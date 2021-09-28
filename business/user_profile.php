<?php
session_start();
if(isset($_SESSION['user_id']))
{
	//$username=$_SESSION['username'];
	$user_id=$_SESSION['user_id'];

    $con=mysqli_connect("localhost","root","","cardzs");
	$data=mysqli_query($con, "SELECT owner_name,cardzs_id FROM `business_cardzs` WHERE user_id=$user_id");
	while($row=mysqli_fetch_array($data)){
		$owner_name = trim($row['owner_name']);
		$cardzs_id = $row['cardzs_id'];
	}
?>
<!DOCTYPE html>

<html>
<head>
	<title>Your Profile</title>
<style type="text/css">
	input[type=submit] {
	  background-color: orange;
	  color: white;
	  padding: 12px 20px;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	  float: center;
	  width: 49%;
		height: 5%;
	}

	input[type=submit]:hover {
	  background-color: orange;
	  opacity: 0.7;
	}
</style>
</head>
<body>
	<center>
		<br><br><h1>Welcome <?php echo $owner_name;?></h1><br>
		<img src= 'https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=https://cardzs.com/<?php echo $cardzs_id;?>' height=50% width=50%/><br>
		<a href="https://cardzs.com/<?php echo $cardzs_id;?>">https://cardzs.com/<?php echo $cardzs_id;?></a><br><br>
		<a href="update_profile.php"><input type="submit" value="Update Profile"></a><br><br><br>
		<a href="logout.php" ><input style="width: 35%" type="submit" value="Logout"></a>

	</center>
</body>
</html>
<?php
}else{
	header("location:login.php");
}
?>