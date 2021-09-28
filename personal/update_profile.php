<!DOCTYPE html>
<html>
<head>
	<title>&emsp;&emsp;Update Your Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">	
<style type="text/css">
*{
  box-sizing: border-box;
}

input[type=text],[type=password],[type=email],[type=number],[type=date],select,textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    background-color: #FFFFFF;
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
  background-color: #F2F3F4;
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

<?php
session_start();
if(isset($_SESSION['user_id']))
{
	$cardzs_id="";
	$owner_name="";
	$email="";
	$phone_no="";
	$whatsapp_no="";
	$location_url="";
	$address="";
	$about="";
	$city_name="";
	$facebook_url="";
	$instagram_url="";
	$twitter_url="";
	$youtube_url="";
	$contact1="";
	$contact2="";
	$contact3="";
	$web_url="";
	$status="";
	$relationship_status="";
	$gender="";
	$dob="";
	$school_name="";
	$college_name="";
	$works_at="";
	$profile_img="";
	$cover_img1="";
	$cover_img2="";
	$cover_img3="";
	$cover_img4="";
	$cover_img5="";
	$cover_img6="";
	$cover_img7="";
	$cover_img8="";
	$cover_img9="";
	$cover_img10="";


	//$username=$_SESSION['username'];
	$user_id=$_SESSION['user_id'];
	

	$db=mysqli_connect('localhost','root','','cardzs');


if(isset($_POST['delete'])){
		$delete=$_POST['delete'];
		mysqli_query($db,"UPDATE `personal_cardzs` SET $delete = null where user_id=$user_id");
}

	$result=mysqli_query($db,"select * from personal_cardzs where user_id = $user_id ");
	while($row=mysqli_fetch_array($result)){
		
		$cardzs_id=$row['cardzs_id'];
		$owner_name=$row['owner_name'];
		$email=$row['email'];
		$phone_no=$row['phone_no'];
		$whatsapp_no=$row['whatsapp_no'];
		$location_url=$row['location_url'];
		$address=$row['address'];
		$about=$row['about'];
		$city_name=$row['city_name'];
		$status=$row['status'];
		$relationship_status=$row['relationship_status'];
		$dob=$row['dob'];
		$school_name=$row['school_name'];
		$college_name=$row['college_name'];
		$works_at=$row['works_at'];
		$gender=$row['gender'];
		$facebook_url=$row['facebook_url'];
		$instagram_url=$row['instagram_url'];
		$twitter_url=$row['twitter_url'];
		$youtube_url=$row['youtube_url'];
		$contact_nos=$row['contact_nos'];
		$contact_nos=explode(",", $contact_nos);
		$contact1=$contact_nos[0];
		$contact2=$contact_nos[1];
		$contact3=$contact_nos[2];
		$profile_img=$row['profile_img'];
		$cover_img1=$row['cover_img1'];
		$cover_img2=$row['cover_img2'];
		$cover_img3=$row['cover_img3'];
		$cover_img4=$row['cover_img4'];
		$cover_img5=$row['cover_img5'];
		$cover_img6=$row['cover_img6'];
		$cover_img7=$row['cover_img7'];
		$cover_img8=$row['cover_img8'];
		$cover_img9=$row['cover_img9'];
		$cover_img10=$row['cover_img10'];
		$web_url=$row['web_url'];
	}

	?>




<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 95%;
height: auto;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 95%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 95%;
width: 95%;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: center	;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>


<div class='popup'>
<div class='cnt223'>
	<center>
<h1 style="color: red">Important Notice</h1><hr>
<p>
Image Size Must Be Less Than 1024 KB.

<br>
<a  href="https://imagecompressor.io/compress-to-exact-size" target="_blank" >Click Here</a> To Compress Image Size
<br/>
<br/>
<a href='' class='close'>CLOSE</a>
</p>
<center>
</div>
</div>









<br><h3 style="float: right;">Welcome<br><?php echo $owner_name;?></h3><br><br>
<?PHP
	if(isset($_POST['update'])){
		
		$cardzs_id=$_POST['cardzs_id'];

		if (empty($_POST['owner_name']))
			$owner_name="";
		else
			$owner_name=$_POST['owner_name'];
		
		
		if(empty($_POST['address']))
			$address="";
		else
			$address=$_POST['address'];
		if(empty($_POST['phone_no']))
			$phone_no=0;
		else
			$phone_no=$_POST['phone_no'];
		if(empty($_POST['whatsapp_no']))
			$whatsapp_no=0;
		else
			$whatsapp_no=$_POST['whatsapp_no'];
		if(empty($_POST['email']))
			$email="";
		else
			$email=$_POST['email'];
		if(empty($_POST['location_url']))
			$location_url="";
		else
			$location_url=$_POST['location_url'];
		if(empty($_POST['about']))	
			$about="";
		else
			$about=$_POST['about'];
		
		if (empty($_POST['city_name']))
			$city_name="";
		else
			$city_name=$_POST['city_name'];
		
		
			
		if (empty($_POST['facebook_url']))
			$facebook_url="";
		else
			$facebook_url=$_POST['facebook_url'];	
		if (empty($_POST['instagram_url']))
			$instagram_url="";
		else
			$instagram_url=$_POST['instagram_url'];
		if (empty($_POST['twitter_url']))
			$twitter_url="";
		else
			$twitter_url=$_POST['twitter_url'];
		if (empty($_POST['youtube_url']))
			$youtube_url="";
		else
			$youtube_url=$_POST['youtube_url'];
		if (empty($_POST['contact1']))
			$contact1="";
		else
			$contact1=$_POST['contact1'];
		if (empty($_POST['contact2']))
			$contact2="";
		else
			$contact2=$_POST['contact2'];		
		if (empty($_POST['contact3']))
			$contact3="";
		else
			$contact3=$_POST['contact3'];
		if (empty($_POST['web_url']))
			$web_url="";
		else
			$web_url=$_POST['web_url'];



			if (empty($_POST['status']))
			$status="";
		else
			$status=$_POST['status'];
		if (empty($_POST['relationship_status']))
			$relationship_status="";
		else
			$relationship_status=$_POST['relationship_status'];

		if (empty($_POST['gender']))
			$gender="";
		else
			$gender=$_POST['gender'];

		if (empty($_POST['dob']))
			$dob="";
		else
			$dob=$_POST['dob'];
		if (empty($_POST['school_name']))
			$school_name="";
		else
			$school_name=$_POST['school_name'];

		if (empty($_POST['college_name']))
			$college_name="";
		else
			$college_name=$_POST['college_name'];
	
			if (empty($_POST['works_at']))
			$works_at="";
		else
			$works_at=$_POST['works_at'];






		$profile_img = NULL;
		if(!empty($_FILES['profile_img']['tmp_name'])){
		    $profile_img= addslashes(file_get_contents($_FILES['profile_img']['tmp_name']));
		}

		$cover_img1 = NULL;
		if(!empty($_FILES['cover_img1']['tmp_name'])){
		    $cover_img1= addslashes(file_get_contents($_FILES['cover_img1']['tmp_name']));
		}

		$cover_img2 = NULL;
		if(!empty($_FILES['cover_img2']['tmp_name'])){
		    $cover_img2= addslashes(file_get_contents($_FILES['cover_img2']['tmp_name']));
		}

		$cover_img3 = NULL;	
		if(!empty($_FILES['cover_img3']['tmp_name'])){
		    $cover_img3= addslashes(file_get_contents($_FILES['cover_img3']['tmp_name']));
		}

		$cover_img4 = NULL;
		if(!empty($_FILES['cover_img4']['tmp_name'])){
		    $cover_img4= addslashes(file_get_contents($_FILES['cover_img4']['tmp_name']));
		}

		$cover_img5 = NULL;
		if(!empty($_FILES['cover_img5']['tmp_name'])){
		    $cover_img5= addslashes(file_get_contents($_FILES['cover_img5']['tmp_name']));
		} 

		$cover_img6 = NULL;
		if(!empty($_FILES['cover_img6']['tmp_name'])){
		    $cover_img6= addslashes(file_get_contents($_FILES['cover_img6']['tmp_name']));
		}

		$cover_img7 = NULL;
		if(!empty($_FILES['cover_img7']['tmp_name'])){
		    $cover_img7= addslashes(file_get_contents($_FILES['cover_img7']['tmp_name']));
		}
		$cover_img8 = NULL;
		if(!empty($_FILES['cover_img8']['tmp_name'])){
		    $cover_img8= addslashes(file_get_contents($_FILES['cover_img8']['tmp_name']));
		}

		$cover_img9 = NULL;
		if(!empty($_FILES['cover_img9']['tmp_name'])){
		    $cover_img9= addslashes(file_get_contents($_FILES['cover_img9']['tmp_name']));
		}

		$cover_img10 = NULL;
		if(!empty($_FILES['cover_img10']['tmp_name'])){
		    $cover_img10= addslashes(file_get_contents($_FILES['cover_img10']['tmp_name']));
		}

		$contact_nos= $contact1.",".$contact2.",".$contact3;

		$con=mysqli_connect('localhost','root','','cardzs');
		if (!$con -> query("update personal_cardzs set  owner_name='$owner_name',`phone_no`=$phone_no, `email`='$email',  `whatsapp_no`=$whatsapp_no, `location_url`='$location_url', `address`='$address', `about`='$about',  `city_name`='$city_name',  `facebook_url`='$facebook_url', `instagram_url`='$instagram_url', `twitter_url`='$twitter_url', `youtube_url`='$youtube_url', `contact_nos`='$contact_nos',`web_url`='$web_url' , `status`='$status' ,`relationship_status`='$relationship_status' ,`dob`='$dob' ,`school_name`='$school_name' ,`college_name`='$college_name' ,`works_at`='$works_at' ,`gender`='$gender'  where user_id=$user_id") ) {
		 	 echo("<br>Error description: " . $con -> error);
		}else{
			//echo '<script>alert("Data Updated");</script>'; 
			
		//$_SESSION['user_id']=$row['user_id'];
		header("location:user_profile.php");	
		}




		if(!empty($_FILES['profile_img']['tmp_name'])){
			if(($_FILES['profile_img']['size'] >= 2097152)) {
	      	 	echo "<script> alert ('File too large. File must be less than 2 megabytes.');</script>";
	    	}else{
				$con -> query("update personal_cardzs set `profile_img`='$profile_img' where user_id=$user_id");
		}}
		if(!empty($_FILES['cover_img1']['tmp_name'])){
			$con -> query("update personal_cardzs set `cover_img1`='$cover_img1' where user_id=$user_id");
		}
		if(!empty($_FILES['cover_img2']['tmp_name'])){
			$con -> query("update personal_cardzs set `cover_img2`='$cover_img2' where user_id=$user_id");
		}
		if(!empty($_FILES['cover_img3']['tmp_name'])){
			$con -> query("update personal_cardzs set `cover_img3`='$cover_img3'  where user_id=$user_id");
		}
		if(!empty($_FILES['cover_img4']['tmp_name'])){
			$con -> query("update personal_cardzs set `cover_img4`='$cover_img4' where user_id=$user_id");
		}
		if(!empty($_FILES['cover_img5']['tmp_name'])){
			$con -> query("update personal_cardzs set `cover_img5`='$cover_img5' where user_id=$user_id");
		}
		if(!empty($_FILES['cover_img6']['tmp_name'])){
			$con -> query("update personal_cardzs set `cover_img6`='$cover_img6' where user_id=$user_id");
		}
		if(!empty($_FILES['cover_img7']['tmp_name'])){
			$con -> query("update personal_cardzs set `cover_img7`='$cover_img7' where user_id=$user_id");
		}
		if(!empty($_FILES['cover_img8']['tmp_name'])){
			$con -> query("update personal_cardzs set `cover_img8`='$cover_img8' where user_id=$user_id");
		}
		if(!empty($_FILES['cover_img9']['tmp_name'])){
			$con -> query("update personal_cardzs set `cover_img9`='$cover_img9' where user_id=$user_id");
		}
		if(!empty($_FILES['cover_img10']['tmp_name'])){
			$con -> query("update personal_cardzs set `cover_img10`='$cover_img10' where user_id=$user_id");
		}
	}

	
}else{
	header("location:login.php");
}
?>
<body>
<center><center><h1>Update Profile</h1></center>
</center>
<div class="container">

	<form action="update_profile.php" method='POST' enctype="multipart/form-data">

    <div class="row">
      <div class="col-25">
        <label>Cardzs Id</label>
      </div>
      <div class="col-75">
		  <input type="text" name="cardzs_id" value="<?php echo $cardzs_id;?>" placeholder="Enter Cardzs Id"  readonly/>
		  
      </div>
    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Owner Name</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="owner_name" value="<?php echo $owner_name;?>" placeholder="Enter Owner Name" /><br/>
	      </div>
	    </div>

		
		<div class="row">
	      <div class="col-25">
	        <label>Adress</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="address" value="<?php echo $address;?>" placeholder="Enter Address" /><br/>
	      </div>
	    </div>

		<div class="row">
	      <div class="col-25">
	        <label>Phone Number</label>
	      </div>
	      <div class="col-75">		
				<input type="number" name="phone_no" value="<?php echo $phone_no;?>" placeholder="Enter Phone Number" /><br/>
	      </div>
	    </div>


		<div class="row">
	      <div class="col-25">
	        <label>WhatsApp Number</label>
	      </div>
	      <div class="col-75">		
				<input type="number" name="whatsapp_no" value="91<?php echo $whatsapp_no;?>" placeholder="Enter WhatsApp Number" /><br/>
	      </div>
	    </div>

		<div class="row">
	      <div class="col-25">
	        <label>Email Id</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="email" value="<?php echo $email;?>" placeholder="Enter Email Id" /><br/>
	      </div>
	    </div>

		<div class="row">
	      <div class="col-25">
	        <label>Location URL</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="location_url" value="<?php echo $location_url;?>" placeholder="Enter " /><br/>
	      </div>
	    </div>


	    <div class="row">
	      <div class="col-25">
	        <label>Your Website Url</label>
	      </div>
	      <div class="col-75">		
				<input type="text" rows="3" cols="35" name="web_url" value="<?php echo $web_url;?>" placeholder="Enter Website Url " /><br/>
	      </div>
	    </div>




		<div class="row">
	      <div class="col-25">
	        <label>About</label>
	      </div>
	      <div class="col-75">		
				<textarea name="about"  placeholder="Enter About" ><?php echo $about;?></textarea><br/>
	      </div>
	    </div>


		<div class="row">
	      <div class="col-25">
	        <label>City Name</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="city_name" value="<?php echo $city_name;?>" placeholder="Enter City Name" /><br/>
	      </div>
	    </div>

		

		<div class="row">
	      <div class="col-25">
	        <label>Facebook URL</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="facebook_url" value="<?php echo $facebook_url;?>" placeholder="Enter facebook_url" /><br/>
	      </div>
	    </div>


		<div class="row">
	      <div class="col-25">
	        <label>Instagram URL</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="instagram_url" value="<?php echo $instagram_url;?>" placeholder="Enter Instagram URL" /><br/>
	      </div>
	    </div>

		<div class="row">
	      <div class="col-25">
	        <label>Twitter URL</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="twitter_url" value="<?php echo $twitter_url;?>" placeholder="Enter Twitter URL" /><br/>
	      </div>
	    </div>

		<div class="row">
	      <div class="col-25">
	        <label>YouTube URL</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="youtube_url" value="<?php echo $youtube_url;?>" placeholder="Enter youtube_url" /><br/>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Contact-1</label>
	      </div>
	      <div class="col-75">		
				<input type="Number" name="contact1" value="<?php echo $contact1;?>" placeholder="Enter Contact-1" /><br/>
	      </div>
	    </div>

		<div class="row">
	      <div class="col-25">
	        <label>Contact-2</label>
	      </div>
	      <div class="col-75">		
				<input type="Number" name="contact2" value="<?php echo $contact2;?>" placeholder="Enter Contact-2" /><br/>
	      </div>
	    </div>

		<div class="row">
	      <div class="col-25">
	        <label>Contact-3</label>
	      </div>
	      <div class="col-75">		
				<input type="Number" name="contact3" value="<?php echo $contact3;?>" placeholder="Enter Contact-3" /><br/>
	      </div>
	    </div>





		
	    <div style="border">
		<div class="row">
	      <div class="col-25">
	        <label>Profile Image</label>
	      </div>
	      <div class="col-75">		
			<?php  echo '<img src="data:image; base64,'.base64_encode($profile_img).'" height="70%" width="70%"  alt="Insert Image"/>'?><br>
			<button type="submit" name="delete" value="profile_img">Remove</button>
			<input type="file" name="profile_img" /><br>
	      </div>
	    </div>
		</div>

		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 1</label>
	      </div>
	      <div class="col-75">		
	      	<?php  echo '<img src="data:image; base64,'.base64_encode($cover_img1).'" height="70%" width="70%" alt="Insert Image"/>'?><br>
	      		<button type="submit" name="delete" value="cover_img1">Remove</button>
				<input type="file" name="cover_img1" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 2</label>
	      </div>
	      <div class="col-75">		
	      	<?php  echo '<img src="data:image; base64,'.base64_encode($cover_img2).'" height="70%" width="70%" alt="Insert Image"/>'?><br>
	      		<button type="submit" name="delete" value="cover_img2">Remove</button>
				<input type="file" name="cover_img2" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 3</label>
	      </div>
	      <div class="col-75">		
	      	<?php  echo '<img src="data:image; base64,'.base64_encode($cover_img3).'" height="70%" width="70%" alt="Insert Image"/>'?><br>
				<button type="submit" name="delete" value="cover_img3">Delete</button>
				<input type="file" name="cover_img3" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 4</label>
	      </div>
	      <div class="col-75">		
	      	<?php  echo '<img src="data:image; base64,'.base64_encode($cover_img4).'" height="70%" width="70%" alt="Insert Image"/>'?><br>
	      	<button type="submit" name="delete" value="cover_img4">Remove</button>
				<input type="file" name="cover_img4" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 5</label>
	      </div>
	      <div class="col-75">
	      	<?php  echo '<img src="data:image; base64,'.base64_encode($cover_img5).'" height="70%" width="70%" alt="Insert Image"/>'?><br>		
	      	<button type="submit" name="delete" value="cover_img5">Remove</button>
				<input type="file" name="cover_img5" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 6</label>
	      </div>
	      <div class="col-75">		
	      	<?php  echo '<img src="data:image; base64,'.base64_encode($cover_img6).'" height="70%" width="70%" alt="Insert Image"/>'?><br>
	      	<button type="submit" name="delete" value="cover_img6">Remove</button>
				<input type="file" name="cover_img6" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 7</label>
	      </div>
	      <div class="col-75">		
	      	<?php  echo '<img src="data:image; base64,'.base64_encode($cover_img7).'" height="70%" width="70%" alt="Insert Image"/>'?><br>
	      	<button type="submit" name="delete" value="cover_img7">Remove</button>
				<input type="file" name="cover_img7" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 8</label>
	      </div>
	      <div class="col-75">	
	      	<?php  echo '<img src="data:image; base64,'.base64_encode($cover_img8).'" height="70%" width="70%" alt="Insert Image"/>'?><br>
	      	<button type="submit" name="delete" value="cover_img8">Remove</button>
				<input type="file" name="cover_img8" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 9</label>
	      </div>
	      <div class="col-75">		
	      	<?php  echo '<img src="data:image; base64,'.base64_encode($cover_img9).'" height="70%" width="70%" alt="Insert Image"/>'?><br>
	      	<button type="submit" name="delete" value="cover_img9">Remove</button>
				<input type="file" name="cover_img9" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 10</label>
	      </div>
	      <div class="col-75">		
	      	<?php  echo '<img src="data:image; base64,'.base64_encode($cover_img10).'" height="70%" width="70%" alt="Insert Image"/>'?><br>
	      	<button type="submit" name="delete" value="cover_img10">Remove</button>
				<input type="file" name="cover_img10" /><br>
	      </div>
	    </div>


	    <div class="row">
	      <div class="col-25">
	        <label>Status</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="status" value="<?php echo $status;?>" placeholder="Enter Status" /><br/>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-25">
	        <label>Gender</label>
	      </div>
	     <div class="col-75">		
				<select name="gender">
					<option>Male</option>
					<option>Female</option>
					<option>Other</option>
					<option>Prefer Not To Say</option>
				</select>
				</div>
	    </div>


	    <div class="row">
	      <div class="col-25">
	        <label>Relationship Status</label>
	      </div>
	      <div class="col-75">		
				<select name="relationship_status">
					<option>Single</option>
					<option>In Relationship</option>
					<option>Married</option>
				</select>
	      </div>
	    </div>


	    <div class="row">
	      <div class="col-25">
	        <label>Date of Birth</label>
	      </div>
	      <div class="col-75">		
				<input type="date" name="dob" value="<?php echo $dob;?>" placeholder="Enter Date of Birth" /><br/>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-25">
	        <label>School Name</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="school_name" value="<?php echo $school_name;?>" placeholder="Enter School Name" /><br/>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-25">
	        <label>College Name</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="college_name" value="<?php echo $college_name;?>" placeholder="Enter College Name" /><br/>
	      </div>
	    </div>


	    <div class="row">
	      <div class="col-25">
	        <label>Works At</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="works_at" value="<?php echo $works_at;?>" placeholder="Enter Work Details" /><br/>
	      </div>
	    </div>

	 	<br>
	      <center><input type="submit" name="update" value="Update"/></center><br>
</form>
</div>
<center><a href="user_profile.php"><input type="submit" value="Your Profile"></a></center><br><br>
<center><a href="logout.php" ><input style="width: 35%" type="submit" value="Logout"></a></center>
</body>
<?php
?>

</html>