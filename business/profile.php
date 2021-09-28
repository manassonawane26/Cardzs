<?php
session_start();
if(isset($_SESSION['username']))
{
	$con=mysqli_connect('localhost','root','','cardzs');
	$username=$_SESSION['username'];
	$user_id=$_SESSION['user_id'];
?>	
	<br><h3 style="float: right;">Welcome<br><?php echo $_SESSION['username'];?></h3><br><br>
<?php
	$error="";
	$fine="";
	$cardzs_id="";
	$business_name="";
	$owner_name="";
	$email="";
	$gst_no="";
	$phone_no="";
	$whatsapp_no="";
	$location_url="";
	$address="";
	$about_us="";
	$services="";
	$city_name="";
	$open_hours="";
	$facebook_url="";
	$instagram_url="";
	$twitter_url="";
	$youtube_url="";
	$contact1="";
	$contact2="";
	$contact3="";
	$web_url="";
	if(isset($_POST['check'])){
		$cardzs_id=$_POST['cardzs_id'];
		$result1=mysqli_query($con,"SELECT * FROM `business_cardzs` WHERE cardzs_id='$cardzs_id'");
		$result2=mysqli_query($con,"SELECT * FROM `personal_cardzs` WHERE cardzs_id='$cardzs_id'");
		if ((mysqli_num_rows($result1) > 0) ||(mysqli_num_rows($result2) > 0)) {
			$error ="This Id is already taken.";
			$fine="";
		}
		else{
			$fine="This Id is Available.";
			$error="";
		}
	}
	if(isset($_POST['submit']))
	{
		$cardzs_id=$_POST['cardzs_id'];

		if (empty($_POST['owner_name']))
			$owner_name="";
		else
			$owner_name=$_POST['owner_name'];
		if (empty($_POST['business_name']))
			$business_name="";
		else
			$business_name=$_POST['business_name'];
		if(empty($_POST['gst_no']))
			$gst_no="";
		else
			$gst_no=$_POST['gst_no'];
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
		if(empty($_POST['about_us']))	
			$about_us="";
		else
			$about_us=$_POST['about_us'];
		if(empty($_POST['services']))	
			$services="";
		else
			$services=$_POST['services'];
		
		if (empty($_POST['city_name']))
			$city_name="";
		else
			$city_name=$_POST['city_name'];
		
		if (empty($_POST['open_hours']))
			$open_hours="";
		else
			$open_hours=$_POST['open_hours'];
			
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
		if (!mysqli_query($con,"INSERT INTO business_cardzs (user_id, business_name, owner_name,`phone_no`, `email`, `gst_no`, `whatsapp_no`, `location_url`, `address`, `about_us`, `services`, `city_name`, `open_hours`, `facebook_url`, `instagram_url`, `twitter_url`, `youtube_url`, `contact_nos`,`profile_img`, `cardzs_id`, cover_img1, `cover_img2`, `cover_img3`, `cover_img4`, `cover_img5`, `cover_img6`, `cover_img7`, `cover_img8`, `cover_img9`, `cover_img10`,`web_url`) VALUES ($user_id,'$business_name', '$owner_name',$phone_no, '$email', '$gst_no',$whatsapp_no, '$location_url', '$address', '$about_us', '$services', '$city_name', '$open_hours', '$facebook_url', '$instagram_url', '$twitter_url', '$youtube_url', '$contact_nos','$profile_img', '$cardzs_id','$cover_img1','$cover_img2','$cover_img3','$cover_img4','$cover_img5','$cover_img6','$cover_img7','$cover_img8','$cover_img9','$cover_img10','$web_url')")){
		 	echo("<br>Error description: " . $con -> error);
			}
		else{
			$_SESSION['id']="$cardzs_id";
			header("location:success.php");
 		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>&emsp;&emsp;Complete Business Profile</title>
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
<body>

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

<center><center><h1>Business Profile</h1></center>
</center>
<div class="container">

	<form action="profile.php" method='POST' enctype="multipart/form-data">

    <div class="row">
      <div class="col-25">
        <label>Cardzs Id</label>
        <p style="color: red">You Can't Change It Later</p>
      </div>
      <div class="col-75">
	  	<div <?php if (isset($error)): ?> class="form_error" <?php endif ?> >
		  <input type="text" name="cardzs_id" value="<?php echo $cardzs_id;?>" placeholder="Enter Cardzs Id"  required/>
		  <?php if (isset($error)): ?>
		  	<span><?php echo $error; echo "<font color='green'>",$fine,"</font>"?></span>
		  <?php endif ?>
	  	</div>
      </div>
    </div>
    <br><input style="float:right; width:45%;" type="submit" name="check" value="Check Availability"/><br><br><br>
	
   	<?php if($fine!=""){ ?>
		<div class="row">
	      <div class="col-25">
	        <label>Business Name</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="business_name" value="<?php echo $business_name;?>" placeholder="Enter Business Name " /><br/>
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
	        <label>GST Number</label>
	      </div>
	      <div class="col-75">		
				<input type="text" name="gst_no" value="<?php echo $gst_no;?>" placeholder="Enter GST Number"/><br/>
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
				<textarea name="about_us" rows="3" cols="35" value="<?php echo $about_us;?>" placeholder="Enter About" ></textarea><br/>
	      </div>
	    </div>

		<div class="row">
	      <div class="col-25">
	        <label>services</label>
	      </div>
	      <div class="col-75">		
				<textarea name="services" rows="3" cols="35" value="<?php echo $services;?>" placeholder="Enter Services" ></textarea><br/>
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
	        <label>Open Hours</label>
	      </div>
	      <div class="col-75">		
				<textarea name="open_hours" rows="3" cols="35" value="<?php echo $open_hours;?>" placeholder="Enter Business Timing"></textarea><br/>
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





		<div class="row">
	      <div class="col-25">
	        <label>Profile Image</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="profile_img" /><br>
	      </div>
	    </div>

		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 1</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="cover_img1" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 2</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="cover_img2" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 3</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="cover_img3" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 4</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="cover_img4" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 5</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="cover_img5" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 6</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="cover_img6" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 7</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="cover_img7" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 8</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="cover_img8" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 9</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="cover_img9" /><br>
	      </div>
	    </div>
		<div class="row">
	      <div class="col-25">
	        <label>Cover Image 10</label>
	      </div>
	      <div class="col-75">		
				<input type="file" name="cover_img10" /><br>
	      </div>
	    </div>
	 	<br>
	      <center><input type="submit" name="submit" value="submit"/></center><br>

</form>
<center><a href="index.html"> <font color="#FF0000"> Logout Here </font></a></center>
</div>



</body>
</html>

<?php 
}
}
else{
		header("location:register.php");
}
?>