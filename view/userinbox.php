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
 $ar = inboxpaging(4);
 echo "<center> <h2> <font color = 'darkblue'> <b> User Inbox  </b> </font> </center> <br>";
 echo"<div class='alert alert-success' role='alert'>Note - All messages below are from Admin only.</div>
";
 echo "<table align='center' class='table table-bordered' border='1'>";
    echo " <tr class='success'><th><center>From</center></th><th><center>Message</center></th></tr> ";
for($i=0 ; $i<count($ar) ; $i++){
   
    echo "<tr class='warning' align='center'>";
    echo "<td>Admin</td>";
    echo "<td>".$ar[$i][1]."</td>";
}

echo "</table>";


$count = inboxlink();
echo "<br>";
echo "<table align='center' border='1'>";
echo "<tr>";
$req = 4 ;
$total = $count;
$link = ceil($total / $req);
for ($i = 1; $i <= $link; $i++) {
    echo "<td> <a href='index.php?p=userinbox&q=$i'>&nbsp; &nbsp;  $i &nbsp; &nbsp;  </a></td>";
}

echo  "</tr>";
echo "</table>";

?>