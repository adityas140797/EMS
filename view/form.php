<?php
if(!isset($_SESSION['role'])){
       header("location:index.php?p=home");}
else {
    if ($_SESSION['role']=="admin"){
        header("location:index.php?p=home");
    }
}

if(isset($_POST['f1'])){
$ar = request2paging(4);

if(count($ar)==0)
{
    $val = $_SESSION['captcha'];
    $uval = $_POST['vercode'];;
    
    if($val == $uval){
    echo "<script>   
    alert ('Captcha matched. Form submitted successfully.'); 
    </script>";
   
    queryinsert();
    allqueriesinsert();
    }
    
    else{
     echo "<script> 
       alert ('Error Occured! Captcha not matched. Form did not submitted.');
    </script>";
    }
    

}
else
{ echo "<script> alert ('Error Occured! You are already on 1 Query. Form did not submitted.'); </script>";
}
}


   $br= getUserById();
   
//    $val = $_SESSION['captcha'];
//    $uval = $_POST['vercode'];
//    if($val == $uval){
//        return true;
//    }else {
//        echo "Not Ok";
//        return false;
//    }
   
?>
       
<html>
<head>
<title></title>
        <meta charset="UTF-8">
        
        <style>
            
            body{
                background: url(pics/a.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
            }
            
        </style>
        
        <script>
        function abc1() {
           var mobilenumber = document.f.mobile.value; 
           var p = (/^[0-9]{10}$/);
           
           if (p.test(mobilenumber)){ 
                    return true;
                }
                
                else {
                    alert("Mobile Number should be of 10 digits");
                    return false;
                }
            
        }
        
    </script>
    
    
</head>
<form method="post" name="f" onsubmit="return abc1();">
<div class="kp-common-footer-form">
    <div class="col-lg-2">
                    <ul class="nav nav-pills nav-stacked" 
                        style="position:fixed; top: 100px; left: 10px; ">
  <li role="presentation" class="active"><a href="#post">Post</a></li>
  <li role="presentation" class="active"><a href="#profile">Profile</a></li>
    <li role="presentation" class="active"><a href="#history">History</a></li>

</ul>
    </div> </div>
    
    <nav aria-label="...">
  <ul class="pager">
    <li class="next"><a href="index.php?p=querypage"> Query Page <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
    
<div class='alert alert-danger' role='alert'><center>Note - A User can only work on 1 Query at a time. </center></div>

    <div id ="post">
	<div class="container">
		
	<div class="row">
	<div class="col-md-12 kp-common-footer-form-hd pb-20">
         <h1 class="text-center" style="color:darkblue"><strong>FEEL FREE TO POST</strong></h1>
	<div class="h-divider div-narrow" style="background-color:#8dc692;"></div>
     <h3 class="text-center" style="color:purple">We Don't Bite </h3>	
				</div>
			</div>
                    <br>
		<div class="row margin-top-15">
		<div class="col-md-6">
			<div class="form-group">
			<label class="control-label col-md-3" for="email"> Your Name </label>
			<div class="col-md-9">
                         <input required="required" type="text" class="form-control" id="name" name="name">
			</div>
					</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
				<label class="control-label col-md-3" for="email">Your Email Id</label>
		                <div class="col-md-9">
                  <input required="required" type="email" class="form-control" id="emailid" name="emailid">
				</div>
					</div>
				</div>
			</div>
                    <br>
			<div class="row margin-top-15">
				<div class="col-md-6">
					<div class="form-group">
		<label class="control-label col-md-3" for="email">Mobile Number</label>
					    <div class="col-md-9">
                   <input required="required" type="text" class="form-control" id="mobile" name="mobile">
					    </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
			 <label class="control-label col-md-3" for="email">Query Topic</label>
					    <div class="col-md-9">
             <input required="required" type="text" class="form-control" id="querytopic" name="querytopic">
					    </div>
					</div>
				</div>
			</div>
                    <br>
			<div class="row margin-top-15">
				<div class="col-md-12">
					<div class="form-group">
		<label style="width:12.1%" class="control-label col-md-1" for="email">Your Query</label>
					    <div style="width:87.9%" class="col-md-10">
             <input type="text" required="required" class="form-control" id="query" name="query">
					    </div>
					</div>
				</div>
			</div>
                    <br>
			<div class="row">
		<div style="padding-top: 10px;" class="col-md-offset-6 col-md-2 text-right">
		<img style="width: 120px" src="view/captcha.php" alt="" id="captcha_img">
                    <a href="#" onclick="document.getElementById('captcha_img').src='view/captcha.php?img=' 
                          + Math.random(); return false">Reload Captcha</a>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					  
                                            <br> <b> Enter Code </b> <br>
              
 
            <input type="text" required="required" name="vercode" />
            
					</div>
				</div>
	<div style="padding-top: 23px; padding-right: 30px;" class="col-md-2 text-right">
                  <input type="submit" class="btn btn-primary" size="2" name="f1" value="Submit" />
				</div>
                            
			</div> 
               
                    </div>  
        <br><br> </div> </form>

              <?php
              
              if (isset($_GET['emid'])) {
              if ($_GET['emid'] == 'search') {
                ?>

                      <input type="text" name="a" />

              <?php
              }}
              ?>
    
<div id ="profile"> <h1 class="text-center" style="color:darkgreen"><strong>YOUR PROFILE</strong></h1>

<div style="padding-left: 15px;">
<?php
       $ar = scandir("img");
        
           echo "<center>";
           echo "<img src='img/$br[7]' height='200' width='200' class='img-circle' /> <br>";
          
           echo "<a href='download.php?p=$br[7]'>Download</a>";
           echo "<center>";
     
?>
</div>    
            <br> <div style="padding-right: 80px;">  
                
        <div style="padding-left: 98px;"> <h3 class="text-center"  >Name : &nbsp;
                <input type="text" name="name" readonly
                       value="<?php echo $br[1];?>" /> </h3> </div>
        <div style="padding-left: 75px;"> <h3 class="text-center" >Email Id : &nbsp;
                <input type="text" name="emailid" readonly
                       value="<?php echo $br[2];?>" /> </h3> </div>
        <div style="padding-right: 0px;"> <h3 class="text-center" >Mobile Number : &nbsp;
                <input type="text" name="mobilenumber" readonly
                       value="<?php echo $br[4];?>" /> </h3> </div>
        <div style="padding-left: 35px;"> <h3 class="text-center" >Date of birth : &nbsp;
                <input type="text" name="dob" readonly
                       value="<?php echo $br[5];?>" /> </h3> </div>    
        <div style="padding-left: 75px;"> <h3 class="text-center" >Address : &nbsp;
                <input type="text" name="address" readonly
                       value="<?php echo $br[6];?>" /> </h3> </div>
       
       <br> <div style="padding-left: 85px;">
       <?php echo "<center><a href='index.php?p=edit&eid=".$br[0]."'><button type='button' class='btn btn-success'>Edit</button><a></center>"; ?>
       </div> </div>
       </div>

<br><br><br>
<div id ="history"> <h1 class="text-center" style="color:darkblue"><strong>HISTORY</strong></h1> </div> <br>
       
    <?php
    
    if(isset($_GET['did'])){
    allrecorddelete();
}
    
    $ar = allrequestpaging(100);
     echo "<table align='center' class='table table-bordered' border='1'>";
    echo " <tr class='success'><th><center>Name</center></th><th><center>Email Id</center></th><th><center>Mobile Number</center></th>"
    . "<th><center>Query Topic</center></th><th><center>Query</center></th><th><center>Operation</center></th></tr> ";
for($i=0 ; $i<count($ar) ; $i++){

    echo "<tr class='warning' align='center'>";
    echo "<td>".$ar[$i][1]."</td>";
    echo "<td>".$ar[$i][2]."</td>";
    echo "<td>".$ar[$i][3]."</td>";
    echo "<td>".$ar[$i][4]."</td>";
    echo "<td>".$ar[$i][5]."</td>";
    
    echo "<td><a href='index.php?p=form&did=".$ar[$i][0]."'>"
    . "<button class='btn btn-danger' data-toggle='tooltip' data-placement='top' title = 'Remove'><span class='glyphicon glyphicon-remove'></span></button></a></td>";
    
}

echo "</tr>";
echo "</table>";

    ?>
    
    <br><br><br><br><br><br><br><br><br><br><br><br>

    </html>