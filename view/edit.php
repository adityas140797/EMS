<?php
if(isset($_POST['s1'])){
    update();
    header("location:index.php?p=form");
}

$ar = getRecordById();

?>
<style>
            
            body{
                background: url(pics/a.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
            }
</style>

<h1 class="text-center" style="color:darkblue"><strong> Update your Details below </strong></h1> <br>

<form method="post" >
    
<br> <div style="padding-right: 80px;">  
        
        <div style="padding-left: 142px;"> <h3 class="text-center"  >Id : &nbsp;
                <input type="text" name="id" readonly
                       value="<?php echo isset($ar[0])?$ar[0]:''?>" /> </h3> </div>
    
        <div style="padding-left: 98px;"> <h3 class="text-center"  >Name : &nbsp;
                <input type="text" name="name"
                       value="<?php echo isset($ar[1])?$ar[1]:''?>" /> </h3> </div>
        <div style="padding-left: 75px;"> <h3 class="text-center" >Email Id : &nbsp;
                <input type="text" name="emailid"
                       value="<?php echo isset($ar[2])?$ar[2]:''?>" /> </h3> </div>
        <div style="padding-right: 0px;"> <h3 class="text-center" >Mobile Number : &nbsp;
                <input type="text" name="mobilenumber"
                       value="<?php echo isset($ar[4])?$ar[4]:''?>" /> </h3> </div>
        <div style="padding-left: 35px;"> <h3 class="text-center" >Date of birth : &nbsp;
                <input type="text" name="dob"
                       value="<?php echo isset($ar[5])?$ar[5]:''?>" /> </h3> </div>    
        <div style="padding-left: 75px;"> <h3 class="text-center" >Address : &nbsp;
                <input type="text" name="address"
                       value="<?php echo isset($ar[6])?$ar[6]:''?>" /> </h3> </div> 

<br>
<div style="padding-left: 35px;"> <center> <button type="submit"  class="btn btn-primary" name="s1" value="update" >Update</button> </center> </div>

</div>

</form>