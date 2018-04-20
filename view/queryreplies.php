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
 $ar = replypaging(4);
 echo "<center> <h2> <font color = 'darkblue'> <b> Query Replies  </b> </font> </center> <br>";
 echo"<div class='alert alert-success' role='alert'>Note - All replies of your queries below are from User only.</div>
";
 echo "<table align='center' class='table table-bordered' border='1'>";
    echo " <tr class='success'><th><center>Id</center></th><th><center>Message</center></th><th><center>Made by</center></th></tr> ";
for($i=0 ; $i<count($ar) ; $i++){
   
    echo "<tr class='warning' align='center'>";
    //echo "<td>".$_SESSION['emailid']."</td>";
    echo "<td>".$ar[$i][0]."</td>";
    echo "<td>".$ar[$i][2]."</td>";
    echo "<td>".$ar[$i][3]."</td>";
    
}

echo "</table>";


//$count = replylink();
//echo "<br>";
//echo "<table align='center' border='1'>";
//echo "<tr>";
//$req = 4 ;
//$total = $count;
//$link = ceil($total / $req);
//for ($i = 1; $i <= $link; $i++) {
//    echo "<td> <a href='index.php?p=userinbox&q=$i'>&nbsp; &nbsp;  $i &nbsp; &nbsp;  </a></td>";
//}
//
//echo  "</tr>";
//echo "</table>";

?>