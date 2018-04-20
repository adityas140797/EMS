<html>
    <head>
<style>
            
            body{
                background: url(pics/a.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
            }
</style>
    </head>
</html>

<?php

if(!isset($_SESSION['role'])){
    header("location:index.php?p=home");}
 else {
    if ($_SESSION['role']=="admin"){
        header("location:index.php?p=home");
    }
}

echo "<center> <h2> <font color = 'darkblue'> <b> Status  </b> </font> </h2> </center> <br>";

echo "<marquee behavior='alternate' direction='left'> <h2> <font color = 'darkgreen'> Here you can see Status of your Query. </font> </h2> </marquee><br><br>";

$ar = request1paging(4);
        
//for ($i = 0; $i < count($ar); $i++)    

   if(!empty($ar[6])){ 
if ($ar[6]==0)
{
echo" <center> <h2> <font color = 'darkblue'> <b> Your request is pending. Please wait. </b> </font> </h2> </center> <br>";}

elseif ($ar[6]==1){
    
  echo"  <center> <h2> <font color = 'darkblue'> <b> Your request is successfully approved.
         You can see it in the Query Page</b> </font> </h2> </center> <br> ";
    
}}
 else {
    

echo"  <center> <h2> <font color = 'darkblue'> <b> No request found of your account. </b> </font> </h2> </center> <br> ";
 }

?>