<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
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
<br><br>
<?php
session_start();
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];
	$email="";
	$username="";
	$password="";
	$user_id="";

			echo"<font size='5' color='green'>Data Inserted</font><br>";

			$myfile = fopen("C:/xampp/htdocs/Cardzs/".$id.".php", "w") or die("Unable to open file!");
				$source = 'C:\xampp\htdocs\Cardzs\business\whattogenerate.php';  
				$destination = "C:/xampp/htdocs/Cardzs/".$id.".php";  
				if( !copy($source, $destination) ) {  
				    echo "your unique url is Not Generated \n";  
				}  
				else{
					echo "<img src= 'https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=https://cardzs.com/$id' height=50% width=50%><br>";
					echo "<font size='5' color='red'>Your Unique URL is :- </font>https://cardzs.com/",$id,"<br><br><br>";
				}
				fclose($myfile);

?>
<center>
<a href="user_profile.php"><input type="submit" value="Your Profile"></a><br><br><br>
<a href="logout.php" ><input style="width: 35%" type="submit" value="Logout"></a>
</center>
</body>
</html>
<?php
}else{
	header("location:login.php");
}
?>