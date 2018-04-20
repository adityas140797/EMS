<html>
<style>
            
            body{
                background: url(abc.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
            }
</style>
</html>
<?php
if(isset($_GET['did'])){
    fetchAllRecords(); getRecordById(); update();
    delete();
}
$ar = paging(4);
 echo "<table align='center' class='table table-bordered' border='1'>";
    echo "<tr class='success'><th>Id</th><th>Name</th><th>Email</th><th>Password</th>"
    . "<th>Status</th><th colspan='2'>Operation</th></tr>";
for($i=0 ; $i<count($ar) ; $i++){
   
    echo "<tr class='warning'>";
    echo "<td>".$ar[$i][0]."</td>";
    echo "<td>".$ar[$i][1]."</td>";
    echo "<td>".$ar[$i][2]."</td>";
    echo "<td>".$ar[$i][3]."</td>";
    echo "<td>".$ar[$i][4]."</td>";
    echo "<td><a href='index.php?p=edit&eid=".$ar[$i][0]."'><button type='button' class='btn btn-success' data-toggle='tooltip' data-placement='top' title='Edit'><span class='glyphicon glyphicon-pencil'></span></button><a></td>";
    echo "<td><a href='index.php?p=records&did=".$ar[$i][0]."'><button type='button' class='btn btn-danger' data-toggle='tooltip' data-placement='top' title=' delete '><span class='glyphicon glyphicon-trash'></span></button><a></td>";
    
    
}

echo "</table>";


$count = pagelink();
echo "<br>";
echo "<table align='center' border='1'>";
echo "<tr>";
$req = 4 ;
$total = $count;
$link = ceil($total / $req);
for ($i = 1; $i <= $link; $i++) {
    echo "<td> <a href='index.php?p=records&q=$i'>&nbsp; &nbsp;  $i &nbsp; &nbsp;  </a></td>";
}

echo  "</tr>";
echo "</table>";