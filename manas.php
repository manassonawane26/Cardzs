<?php

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    //echo $url;  
  //$url=$_SERVER['REQUEST_URI'];
  $file=basename($url, ".php");
  
  $db=mysqli_connect('localhost','root','','cardzs');
  $result=mysqli_query($db,"select * from business_cardzs where cardzs_id = '$file'");
  while($row=mysqli_fetch_array($result)){
    $contact_nos = $row['contact_nos'];
    $contact_nos=explode(",",$contact_nos);
    $business_name=$row["business_name"];
    $city_name=$row["city_name"];
    $cover_img1= $row["cover_img1"];
    $cover_img2= $row["cover_img2"];
    $cover_img3= $row["cover_img3"];
    $cover_img4= $row["cover_img4"];
    $cover_img5= $row["cover_img5"];
    $cover_img6= $row["cover_img6"];
    $cover_img7= $row["cover_img7"];
    $cover_img8= $row["cover_img8"];
    $cover_img9= $row["cover_img9"];
    $cover_img10= $row["cover_img10"];
    $profile_img=$row["profile_img"];
    $owner_name= $row["owner_name"];
    $gst_no= $row["gst_no"];
    $phone_no= $row["phone_no"];
    $location_url=$row["location_url"];
    $whatsapp_no= $row["whatsapp_no"];
    $email= $row["email"];
    $address= $row["address"];
    $open_hours= $row["open_hours"];
    $services= $row["services"];
    $about_us= $row["about_us"];
    $facebook_url= $row["facebook_url"];
    $instagram_url= $row["instagram_url"];
    $twitter_url=$row["twitter_url"];
    $youtube_url=$row["youtube_url"];
    $web_url=$row["web_url"];
?>
<html>
<head><script src="/gdpr/gdprscript.js?buildTime=1595440447"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", verdana}
.mySlides {display: none}

.card {
background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 97%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}

.responsiveprofile {
  width: 30%;
  height: auto;
}

.responsiveicons {
  width: 10%;
  height: auto;
}

.responsivesocialicons {
  width: 10%;
  height: auto;
}

.responsiveverified{
   width: 10%;
  height: auto;
}

.responsivefooter{
   width: 40%;
  height: auto;
}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  height: auto;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev{
  left:0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: px;
  width: px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

</style>
</head>
<body>
<center>
<div class="card">
<div class="container">

<!--Bussiness Name-->
<h2><?php echo $business_name;?></h2>


<!--City Name-->

<h5><?php echo $city_name;?></h5>


<!--Cover Image Slideshow-->
<br>

<div class="slideshow-container">

<?php if(!empty($row['cover_img1'])){?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php  echo '<img src="data:image; base64,'.base64_encode($row['cover_img1']).'" style="width:100%"/>'?>
  <div class="text"></div>
</div>
<?php }?>


<?php if(!empty($row['cover_img2'])){?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php  echo '<img src="data:image; base64,'.base64_encode($row['cover_img2']).'" style="width:100%"/>'?>
  <div class="text"></div>
</div>
<?php }?>

<?php if(!empty($row['cover_img3'])){?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php  echo '<img src="data:image; base64,'.base64_encode($row['cover_img3']).'" style="width:100%"/>'?>
  <div class="text"></div>
</div>
<?php }?>

<?php if(!empty($row['cover_img4'])){?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php  echo '<img src="data:image; base64,'.base64_encode($row['cover_img4']).'" style="width:100%"/>'?>
  <div class="text"></div>
</div>
<?php }?>

<?php if(!empty($row['cover_img5'])){?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php  echo '<img src="data:image; base64,'.base64_encode($row['cover_img5']).'" style="width:100%"/>'?>
  <div class="text"></div>
</div>
<?php }?>

<?php if(!empty($row['cover_img6'])){?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php  echo '<img src="data:image; base64,'.base64_encode($row['cover_img6']).'" style="width:100%"/>'?>
  <div class="text"></div>
</div>
<?php }?>

<?php if(!empty($row['cover_img7'])){?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php  echo '<img src="data:image; base64,'.base64_encode($row['cover_img7']).'" style="width:100%"/>'?>
  <div class="text"></div>
</div>
<?php }?>

<?php if(!empty($row['cover_img8'])){?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php  echo '<img src="data:image; base64,'.base64_encode($row['cover_img8']).'" style="width:100%"/>'?>
  <div class="text"></div>
</div>
<?php }?>

<?php if(!empty($row['cover_img9'])){?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php  echo '<img src="data:image; base64,'.base64_encode($row['cover_img9']).'" style="width:100%"/>'?>
  <div class="text"></div>
</div>
<?php }?>

<?php if(!empty($row['cover_img10'])){?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <?php  echo '<img src="data:image; base64,'.base64_encode($row['cover_img10']).'" style="width:100%"/>'?>
  <div class="text"></div>
</div>
<?php }?>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
  <span class="dot" onclick="currentSlide(8)"></span> 
  <span class="dot" onclick="currentSlide(9)"></span> 
  <span class="dot" onclick="currentSlide(10)"></span> 

</div>


<!--Profile Image-->
<br>
<?php  echo '<img src="data:image; base64,'.base64_encode($row['profile_img']).'" height="100" width="100"/>'?>
<!--Owner Name-->
<br><br>
<h3><?php echo $owner_name;?></h3>
    

<!--Gst No-->
<br>
<h5><?php echo $gst_no;?></h5>


<!--Icons-->

<br><br>
            <!--call-->
            <a href="tel:<?php echo $phone_no;?>">
<img src="https://drive.google.com/thumbnail?id=1sg_xOvygqwfWo_7paBnrKoGb6J189bfY"  class="responsiveicons" width="10" height="10"></a>

&nbsp&nbsp&nbsp&nbsp&nbsp
             <!--location-->
           <a href="<?php echo $location_url;?>">
<img src="https://drive.google.com/thumbnail?id=1eXl9obEzDnHOevvhI4M0X6HEqXTr_lk1"  class="responsiveicons" width="10" height="10"></a>
&nbsp&nbsp&nbsp&nbsp&nbsp
             <!--whatsapp-->
             <a href="https://wa.me/<?php echo $whatsapp_no;?>/?text=">
<img src="https://drive.google.com/thumbnail?id=1ap2aHfvYJq2Gh_0As4i6TA_EOoWY2jAp"  class="responsiveicons" width="10" height="10"></a>
&nbsp&nbsp&nbsp&nbsp&nbsp
            <!--Email-->
            <a href="mailto:<?php echo $email;?>">
<img src="https://drive.google.com/thumbnail?id=1rispm-y7XNrH3Xri3jzPtovb-4WEnETU"  class="responsiveicons" width="10" height="10"></a>

  
           
 
    
<br><br>       
<hr>

<!--Address-->
<br>
<img src="https://drive.google.com/thumbnail?id=1KuaF2Dod09lr8tHs_396X20sgWQslKXP"  class="responsiveicons" width="10" height="10" align="left"><br><br>
<p style="text-align:left;"><?php echo $address;?></p>


<!--Other Contacts-->
<br>
<img src="https://drive.google.com/thumbnail?id=17m9PTsSAOpCVVMFDWQmWd6DVc468lJ0q"  class="responsiveicons" width="10" height="10" align="left"><br><br>
<p style="text-align:left;"><?php echo $contact_nos[0],", ",$contact_nos[1],", ",$contact_nos[2];?></p>


<!--Open Hours -->
<br>
<img src="https://drive.google.com/thumbnail?id=12CQQpoDTZGYLbMZ-NJiNEeqTAaVlAEt1"  class="responsiveicons" width="10" height="10" align="left"><br><br>
<p style="text-align:left;"><?php echo nl2br($open_hours);?></p>


<!--Services-->
<br>
<img src="https://drive.google.com/thumbnail?id=1p9aKghtVXg3MfgvdKAfnaLGVfWyF-EjL"  class="responsiveicons" width="10" height="10"  align="left"><br><br>
<p style="text-align:left;"><?php echo nl2br($services);?></p>


<!--About-->
<br>
<img src="https://drive.google.com/thumbnail?id=1Uijl5E138V5LQa-DF5NO4MBc5daJcELH"  class="responsiveicons" width="10" height="10" align="left"><br><br>
<p style="text-align:left;"><?php echo nl2br($about_us);?></p>






<!-- Social Icons -->
<center>

<br><br>
            <!--Facebook-->
            <a href="<?php echo $facebook_url;?>">
<img src="https://drive.google.com/thumbnail?id=1V5yydm3WuOvWBNipRONUyvNpd6YZHWR8"  class="responsivesocialicons" width="10" height="10"></a>


&nbsp&nbsp&nbsp&nbsp
             <!--Instagram-->
           <a href="<?php echo $instagram_url;?>">
<img src="https://drive.google.com/thumbnail?id=1UWLh-Jk4m3laltNyI_ONG8k324SAtaQ2"  class="responsivesocialicons" width="10" height="10"></a>


&nbsp&nbsp&nbsp&nbsp
             <!--Twitter-->
             <a href="<?php echo $twitter_url;?>">
<img src="https://drive.google.com/thumbnail?id=1wYfAB5lvkQ9WQVWrGllRNDxsRfhEvuQ-"  class="responsivesocialicons" width="10" height="10"></a>
            &nbsp&nbsp&nbsp&nbsp
            <!--YouTube-->
            <a href="<?php echo $youtube_url;?>">
<img src="https://drive.google.com/thumbnail?id=15I64aQC91bH02ixkog7OSfez0FLv4pWH"  class="responsivesocialicons" width="10" height="10"></a>
            &nbsp&nbsp&nbsp&nbsp
            <!--Website-->
            <a href="<?php echo $web_url;?>">
<img src="https://drive.google.com/thumbnail?id=1pR1D4UNcyJd6ZLA_2nZ7H9EKTOWkBkWf "  class="responsivesocialicons" width="10" height="10"></a>


 

</center>
<br>




<!--Script Tag-->
<script>
  var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

</script>
</div>
</div>
</div>


<footer>
<br>

<a href="www.cardzs.com"><img src="https://drive.google.com/uc?export=view&id=1iEE14zdpwfcsISA2LyQaqnfwlGGo0DA7"  class="responsivefooter" width="40" ></a>



</footer>
</body>

</html>
<?php }?>