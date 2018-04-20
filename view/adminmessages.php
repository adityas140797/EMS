<?php
if(!isset($_SESSION['role'])){
       header("location:index.php?p=home");}
else {
    if ($_SESSION['role']=="user"){
        header("location:index.php?p=home");
    }
}
$a=requestcount();

$b=  messagecount();
?>

<ul class="nav nav-pills" role="tablist">
  <li role="presentation" ><a href="index.php?p=adminhome">Records</a></li>
  <li role="presentation" ><a href="index.php?p=adminrequests">Requests <span class="badge"><?php echo $a; ?></span></a></li>
  <li role="presentation"><a href="index.php?p=adminmessages"> Inbox <span class="badge"><?php echo $b; ?></span></a></li>
</ul>

<html>
<style>
            
            body{
                background: url(pics/a.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
            }
</style>
</html>

<?php
 $ar = messagepaging(4);
 echo "<center> <h2> <font color = 'darkblue'> <b> Messages  </b> </font> </center> <br>";
 echo "<table align='center' class='table table-bordered' border='1'>";
    echo " <tr class='success'><th><center>Id</center></th><th><center>Name</center></th><th><center>Email Id</center></th><th><center>Message</center></th><th><center>Operation</center></th></tr> ";
for($i=0 ; $i<count($ar) ; $i++){
   
    echo "<tr class='warning' align='center'>";
    echo "<td>".$ar[$i][0]."</td>";
    echo "<td>".$ar[$i][1]."</td>";
    echo "<td>".$ar[$i][2]."</td>";
    echo "<td>".$ar[$i][3]."</td>";
    echo "<td><a href='index.php?p=inbox&emid=".$ar[$i][2]."'>Reply</a></td>";
}

echo "</table>";


$count = messagepagelink();
echo "<br>";
echo "<table align='center' border='1'>";
echo "<tr>";
$req = 4 ;
$total = $count;
$link = ceil($total / $req);
for ($i = 1; $i <= $link; $i++) {
    echo "<td> <a href='index.php?p=inbox&q=$i'>&nbsp; &nbsp;  $i &nbsp; &nbsp;  </a></td>";
}

echo  "</tr>";
echo "</table>";

?>