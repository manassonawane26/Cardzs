<?php
$username="";
$password="";
$cpassword="";
$name_error="";
$email_error="";	
$emp_error="";
$conn=mysqli_connect("localhost","root","","cardzs");
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $emp_name=$_POST['emp_name'];
  $emp_password=$_POST['emp_password'];
  if($password===$cpassword)
  {
    //$password=md5($password);
    $res_u = mysqli_query($conn, "SELECT username FROM business_users WHERE username='$username'");
    if (mysqli_num_rows($res_u) > 0) {
      $name_error = "Sorry... username already taken"; 
    }
    else{
      $e_id="";
      $emp_id1=mysqli_query($conn,"SELECT emp_id FROM cardzs_employee WHERE emp_name='$emp_name' AND emp_password='$emp_password'");
      if(mysqli_num_rows($emp_id1) > 0){
        $emp_error="";
        while($fetch=mysqli_fetch_array($emp_id1)){
        $e_id=$fetch['emp_id'];
        }
          $a=mysqli_query($conn, "INSERT INTO `business_users`(`username`, `password`, `reg_date`, `emp_id`) VALUES ('$username', '$password',now(),$e_id)");
        if($a>0){
          //echo"Data Inserted";
          $sql = "SELECT user_id FROM business_users WHERE username='$username'";
          $result =mysqli_query($conn,$sql);
          if ($result->num_rows > 0) {
            //echo "sdffasdfas";
            while($row = $result->fetch_assoc()){
                //echo "This is your unique Id" . $row['id'];
              session_start();
              $_SESSION['username']=$username;
              $_SESSION['user_id']=$row['user_id'];
              header("location:profile.php");
              //header("location:fetch.php");
            }
          }
        }
      }
      else{        
        //echo("<br>Error description: " . $conn -> error);
        $emp_error="Error in Executive Credentials";
      }
    }
  }
  else{
    $email_error="password must be same";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
*{
  box-sizing: border-box;
}
	
input[type=text],[type=password],[type=email],[type=number],[type=date],select,option{
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: orange;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 50%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
 
}

.active, .collapsible:hover {
  background-color: orange;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

.responsiveqr{
  width:50%;
  height: auto;

}
</style>
</head>
<title>Business User Registration</title>
<body>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card">
    <a href="https://cardzs.com">
    <br><center><img src="https://drive.google.com/uc?export=view&id=1SXbBT9Wm_NoBeWDKbszBnzBGVO5WMPPH" width="50" height="50"></center><br></a>

    <!--<a href="#" class="w3-bar-item w3-button w3-padding-large"><b>CARDZ</b></a>-->
    

  </div>
</div>





<center><h1>Business User Registration</h1></center>
<div class="container">
<form action="register.php" method="post">
    <div class="row">
      <div class="col-25">
        <label>User Name</label>
      </div>
      <div class="col-75">
	  	<div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
		  <input type="text" name="username" value="<?php echo $username;?>" placeholder=" Enter Username"  required/>
		  <?php if (isset($name_error)): ?>
		  	<span><?php echo $name_error; ?></span>
		  <?php endif ?>
	  	</div>
			<!--<input type="text" name="username" placeholder="Enter Username" required/>-->
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label>Password</label>
      </div>
      <div class="col-75">		
			<input type="password" name="password" value="<?php echo $password;?>" placeholder="Enter Password" required/><br/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Confirm Password</label>
      </div>
      <div class="col-75">
		  <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
		  	<input type="password" name="cpassword" value="<?php echo $cpassword;?>" placeholder="Confirm Password" required/>
		    <?php if (isset($email_error)):?>
		  	 <span><?php echo $email_error;?></span>
		    <?php endif?>
	  	</div>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label>Executive Name</label>
      </div>
      <div class="col-75">    
          <select name="emp_name">
          <?php 
            $emp=mysqli_query($conn,"select emp_name from cardzs_employee");
            while($row=mysqli_fetch_array($emp)){
              echo "<option>".$row['emp_name']."</option>";
            }
          ?>
          </select><br>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Executive Password</label>
      </div>
      <div class="col-75">
      <div <?php if (isset($emp_error)):?> class="form_error" <?php endif?> >
      <input type="password" name="emp_password" placeholder="Enter Executive Password" required/>
      
        <span><?php echo $emp_error;?></span>
      
      </div>
      </div>
    </div><br>


    <center><input type="submit" name="submit" class="button1" value="submit"/></center><br>
  </form>


<center>Already have a Business account? <a href="login.php">Log In</a></center>


</div>

<center>
<button type="button" class="collapsible">Pay Now</button>
<div class="content">
<h3>Rs. 200/-</h3> 
<img src="https://drive.google.com/thumbnail?id=1WiTXl8ERgENRWJOaXE_IYsSYW3wbJHo-" alt="qr" class="responsiveqr" width="50" height="50" >
<p>Pay Using Google Pay, PhonePe, Paytm, UPI </p>
</div>





<h3>Contact Us To Create CARDZ Account</h3>
<a href="https://wa.me/9405985679/?text=I Want To Make CARDZ Account"><img src="https://drive.google.com/thumbnail?id=17-GR4OglUO3feg0ep5ywj1mpeUbd93o2"  class="responsiveicons" width="50" height="50"></a>



</center>


</body>
</html>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>