<?php
if(!isset($_SESSION['role'])){
       header("location:index.php?p=home");}
else {
    if ($_SESSION['role']=="user"){
        header("location:index.php?p=home");
    }
}
$a=requestcount();

$b=messagecount();
?>

<ul class="nav nav-pills" role="tablist">
  <li role="presentation" ><a href="index.php?p=adminhome">Records</a></li>
  <li role="presentation" ><a href="index.php?p=adminrequests">Requests <span class="badge"><?php echo $a; ?></span></a></li>
  <li role="presentation"><a href="index.php?p=adminmessages"> Inbox <span class="badge"><?php echo $b; ?></span></a></li>
</ul>

<html>

<script> 
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>    
    
<style>
            
            body{
                background: url(pics/a.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
            }
</style>
</html>

<?php
if(isset($_GET['status'])){
    changeStatus();
}
if(isset($_GET['did'])){
    requestdelete();
}
 $ar = requestpaging(4);
 echo "<center> <h2> <font color = 'darkblue'> <b> Requests  </b> </font> </center> <br>";
 echo "<table align='center' class='table table-bordered' border='1'>";
    echo " <tr class='success'><th><center>Id</center></th><th><center>Name</center></th><th><center>Email Id</center></th><th><center>Mobile Number</center></th>"
    . "<th><center>Query Topic</center></th><th><center>Query</center></th><th><center>Status</center></th></center><th><center>Operation</center></th></center></tr> ";
for($i=0 ; $i<count($ar) ; $i++){
   
    echo "<tr class='warning' align='center'>";
    echo "<td>".$ar[$i][0]."</td>";
    echo "<td>".$ar[$i][1]."</td>";
    echo "<td>".$ar[$i][2]."</td>";
    echo "<td>".$ar[$i][3]."</td>";
    echo "<td>".$ar[$i][4]."</td>";
    echo "<td>".$ar[$i][5]."</td>";
    if($ar[$i][6] == 1){
    echo "<td><a href='index.php?p=adminrequests&uid=".$ar[$i][0]."&status=".$ar[$i][6]."'>"
    . "<button type='button' class='btn btn-success' data-toggle='tooltip' data-placement='top' title = 'Accepted'><span class='glyphicon glyphicon-ok'></span></button><a> &nbsp; &nbsp;"; 
    }else{
     echo "<td><a href='index.php?p=adminrequests&uid=".$ar[$i][0]."&status=".$ar[$i][6]."'>"
    . "<button type='button' class='btn btn-warning' data-toggle='tooltip' data-placement='top' title = 'Pending'><span class='glyphicon glyphicon-warning-sign'></span></button><a> &nbsp; &nbsp;"; 
    }
    
    echo "<td><a href='index.php?p=adminrequests&did=".$ar[$i][0]."'>"
    . "<button type='button' class='btn btn-danger' data-toggle='tooltip' data-placement='top' title = 'Remove'><span class='glyphicon glyphicon-remove'></span></button><a></td>";
    
    
}

echo "</table>";


$count = requestpagelink();
echo "<br>";
echo "<table align='center' border='1'>";
echo "<tr>";
$req = 4 ;
$total = $count;
$link = ceil($total / $req);
for ($i = 1; $i <= $link; $i++) {
    echo "<td> <a href='index.php?p=adminrequests&q=$i'>&nbsp; &nbsp;  $i &nbsp; &nbsp;  </a></td>";
}

echo  "</tr>";
echo "</table>";

?>