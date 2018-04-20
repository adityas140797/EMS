<?php
if(!isset($_SESSION['role'])){
       header("location:index.php?p=home");}
       else {
if ($_SESSION['role']=="user"){
        header("location:index.php?p=home");
    }
}
if(isset($_POST['m1'])){
inboxinsert();
     
}

?>

<h2><font color="darkblue"><center><b>Reply him here Admin</b></center></font></h2>
<br>
<form class="form-horizontal" method="post">

    <div class="form-group" style="padding-right: 200px;">
   
        <div>
    <label for="" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-10">
      <textarea class="form-control" required="required" id="message" name="message" placeholder="Enter your Message here" rows="5"></textarea>
      <input type="hidden" name="emailid" value="<?php echo isset($_GET['emid'])?$_GET['emid']:''?>" />
    </div>
  </div>
         
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <br><div style="padding-left: 10px;"> <center> <input type="submit" class="btn btn-primary" name="m1" value="Submit" /> </center> </div>
    
    </div>
  </div>
    </div>
</form>