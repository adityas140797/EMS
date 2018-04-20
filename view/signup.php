<?php
if(isset($_POST['s1'])){
    insert();
            
    $fname = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    (move_uploaded_file($tmp_name, "img/$fname"));
  
          $s2=$_POST['emailid'];
          $sub="Account Confirmation";
          $mes="Thank you for creating your account with EMS!";
       // $headers = "From : adityas140797@gmail.com";
          mail($s2, $sub, $mes);
    
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

         
    <script>
            $(document).ready(function () {
                $("#emailid").focusout(function () {
                    var url1 = "model/ajax.php?d=" + $("#emailid").val();
                    // alert(url1)
                    $.ajax({
                        type: "get",
                        url: url1,
                        data: "",
                        datatype: "json",
                        success: function (resp, status) {
                              //alert(resp.length);
                            if(resp.length == 19){
                              alert(resp);
                             return true ;
                         }else{
                             
                              alert(resp);
                               location.reload();
                             return false;
                             
                         }
                          }
                    });
                });
            });

     </script>    
     
    <style>
                   
            body{
                background: url(pics/a.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
            }
            
    </style>
    
    <script>
        function abc() {
           var mobilenumber = document.f.mobile.value;
//           var password = document.f.password.value;
           
           var p = (/^[0-9]{10}$/);
//           var q = (/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,16})(?!.*[\s])/);
           
           if (!(p.test(mobilenumber))){ 
                 
                    alert("Mobile Number should be of 10 digits");
                    return false;
                }
          
//           else if (!(q.test(password))){ 
//              
//                    alert("Password should have these following below : \n\A) 8-16 characters\n\B) Atleast 1 Number\n\C) Atleast 1 Uppercase Letter\n\D) Atleast 1 Lowercase Letter\n\E) Atleast 1 Special Character");
//
//                    return false;
//                }
                
            else {
                return true;
            }
        }
        
    </script>
    
    </head>
    <body>

            <br><br><br>
            <div class="row ">
                <div class="col-lg-offset-2 col-lg-7">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up Here</h3>
                    </div>
                    <div class="panel-body">
                        <form name="f" class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return abc();">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
        <input type="text" required="required" class="form-control" id="name" name="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Email Id</label>
    <div class="col-sm-10">
        <input type="email" required="required" class="form-control" id="emailid" name="emailid" placeholder="Email Id">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <input type="password" required="required" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Mobile No.</label>
    <div class="col-sm-10">
        <input type="text" required="required" class="form-control" id="mobile" name="mobilenumber" placeholder="Mobile No.">
    </div>
  </div>
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Date of birth</label>
    <div class="col-sm-10">
        <input type="date" required="required" class="form-control" id="dob" name="dob" placeholder="Date of birth">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
        <textarea class="form-control" required="required" id="address" name="address" placeholder="Address" rows="5"></textarea>
    </div>
  </div>
 <div style="padding-top: 10px; padding-left: 70px;" class="form-group">
            <label for="exampleInputFile">Photo</label>
            <input type="file" name="photo" />
            <p class="help-block">Upload your photo here.</p>
 </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
    </div>
  </div>

 <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type ="submit" class="btn btn-success" name="s1" value="Submit" /> 
    </div>
  </div>
</form>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
                 <div class="col-lg-3"></div>
                </div>
               
    </body>
</html>