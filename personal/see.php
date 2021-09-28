<?php
$con = mysqli_connect('localhost','root','','cardzs') or die('Unable To connect');

      $result=mysqli_query($con,"select profile_img from business_cardzs  ");
      if(!$result)
         echo("<br>Error description: " . $con -> error);
      else
      while($row=mysqli_fetch_array($result))
      {
         echo '<img src="data:image;base64,'.base64_encode($row['profile_img']).'" height="200" width="200"/>';
      }  


$result=mysqli_query($con,"select * from business_cardzs where user_id=20 ");
if(!$result)
         echo("<br>Error description: " . $con -> error);
      else
      while($row=mysqli_fetch_array($result))
      {
         for ($i=1; $i<=10; $i++)
         {
         echo '<img src="data:image;base64,'.base64_encode($row['cover_img$i']).'" height="200" width="200"/>';
      }  
   }

?>
