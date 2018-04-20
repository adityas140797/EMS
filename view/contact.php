<?php
if(!isset($_SESSION['role'])){
       header("location:index.php?p=home");}
else {
    if ($_SESSION['role']=="admin"){
        header("location:index.php?p=home");
    }
}
if(isset($_POST['m1'])){
messageinsert();
       
}

?>

<script>

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

</script>

<h1 class="text-center" style="color:darkblue"><strong>CONTACT US</strong></h1>

<br>

<div style="padding-left: 1200px;"> 
    <a class="btn btn-success 
                      btn-lg" data-toggle="modal" data-target="#myModal" href="#" role="button">Message Us</a>
            </div>

<center>
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Help us to know your problem </h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Message Us Here</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post">
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
        <input type="text" required="required" class="form-control" id="name" name="name" placeholder="Enter your Name">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Email Id</label>
    <div class="col-sm-10">
        <input type="email" required="required" class="form-control" id="emailid" name="emailid" placeholder="Enter your Email Id">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-10">
      <textarea class="form-control" required="required" id="message" name="message" placeholder="Enter your Message here" rows="5"></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <div style="padding-right: 85px;"> <input type="submit" class="btn btn-primary" name="m1" value="Submit" /> </div>
    
    </div>
  </div>
</form>
                    </div>
                  
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <br><br>
    <div class="col-lg-3">
    
    <img src="pics/aa.png" width="200" height="200" class="img-circle">
    <h3 style="color:darkblue"> Mail Us on : <br> adi@gmail.com / aditya@yahoo.co.in. </h3>    
    
    </div>
    
    <div class="col-lg-3">
    
    <img src="pics/bb.png" width="200" height="200" class="img-circle">
    <h3 style="color:darkblue"> Ring Us on : <br> Landline : 284447887 / Mobile : 997485647. </h3>
    
    </div>
    </div>
    
    <div class="col-lg-3">
        
    <img src="pics/cc.png" width="200" height="200" class="img-circle">
    <h3 style="color:darkblue"> Fax Us at : <br> +44 787848474. </h3>    
    
    </div>
    
    <div class="col-lg-3">
        
    <img src="pics/dd.png" width="200" height="200" class="img-circle">  
    <h4 style="color:darkblue"> Meet Us At Our Office Address : <br> Survey Numbers 222, 223 and 224
    Soukya Road, Samethanahalli Village
    Anugondanahalli Hobli, Hoskote Taluk
    Bengaluru - 562567. </h4>    
    
    </div>
    
</center>
    
&nbsp; &nbsp; &nbsp; &nbsp;

<center>    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.1993405864546!2d77.04761151507975!3d28.50364968246885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d199c98e90ff1%3A0x8b2aa76c53fb738e!2sThe+Northcap+University!5e0!3m2!1sen!2sin!4v1500912747897" width="1300" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAplgoobFFf2eY2sd38tHVtqxEBEce9DLM&callback=myMap"></script>
</center>