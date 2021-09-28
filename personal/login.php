<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
* {
  box-sizing: border-box;
}
	
input[type=text],[type=password] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-weight: bold;
}

input[type=submit] {
  background-color: orange;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  width: 49%;
}

input[type=submit]:hover {
  background-color: orange;
  opacity: 0.7;
}

.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 20px;
  align-self-left:1%;
  align-content:left;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.form_error span {
  width: 100%;
  height: 35px;
  margin: 3px;
  font-size: 1.1em;
  color: #D83D5A;
}


</style>
</head>
<body>



<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card">
    <a href="https://cardzs.com">
    <br><center><img src="https://drive.google.com/uc?export=view&id=1SXbBT9Wm_NoBeWDKbszBnzBGVO5WMPPH" width="50" height="50"></center><br></a>

    <!--<a href="#" class="w3-bar-item w3-button w3-padding-large"><b>CARDZ</b></a>-->
    

  </div>
</div>


  
	<center><h1>Personal User Login</h1></center>
	<div class="container">
<form action="login.php" method="post">
	<div class="row">
      <div class="col-25">
        <label>User Name</label>
      </div>
      <div class="col-75">
	  	<input type="text" name="username" placeholder=" Enter Username"  required/>
	  </div>
     </div>
   

    <div class="row">
      <div class="col-25">
        <label>Password</label>
      </div>
      <div class="col-75">		
			<input type="password" name="password" placeholder="Enter Password" required/><br/>
      </div>
    </div>
    <br>
    <center><input type="submit" name="submit" class="button1" value="submit"/></center><br>

<center>Need a Prsonal account? <a href="register.php">Sign Up </a></center>
 </form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$con=mysqli_connect("localhost","root","","cardzs");
	$data=mysqli_query($con, "SELECT * FROM `personal_users` WHERE username='$username' and password='$password'");
	if($data){

		while($row = $data->fetch_assoc()) {
			session_start();
			//$_SESSION['username']=$row['username'];
			$_SESSION['user_id']=$row['user_id'];
			header("location:user_profile.php");
		}
	}
	else{
		echo "<center><font color='red'>Login Failed !</font></center>";
	}
}
?>