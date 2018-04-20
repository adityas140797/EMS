<?php
if(isset($_SESSION['role'])){
    header('location:index.php?p=form');
}
 if(isset($_POST['a3'])){
 
 $br = check_user();
 if($br){ 
     $_SESSION['id']=$br[0];
     $_SESSION['emailid']=$br[2];
     $_SESSION['role']="user";
  header('location:index.php?p=form');}
 
 else{  echo " <div style=padding-right:140px;> <center> <h4> <font color = 'red'> Error Occured! <br> 
      Either Wrong Email Id or Password Entered or Both </font> </h4> </center> </div>";
 }
 
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title></title>
        

    <style>
            
            body{
                background: url(pics/a.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
            }
            
        </style>
    
    </head>
    <body>

            <br><br><br>
            <div class='row '>
                <div class='col-lg-offset-2 col-lg-7'>
                <div class='panel panel-primary'>
                    <div class='panel-heading'>
                        <h3 class='panel-title'>Login Here</h3>
                    </div>
                    <div class='panel-body'>
                        <form class='form-horizontal' method='post'>
  <div class='form-group'>
    <label for='inputEmail3' class='col-sm-2 control-label'>Email Id</label>
    <div class='col-sm-10'>
        <input type='email' required='required' class='form-control' id='ea' name='ea' placeholder='Email Id'>
    </div>
  </div>
  <div class='form-group'>
    <label for='inputPassword3' class='col-sm-2 control-label'>Password</label>
    <div class='col-sm-10'>
        <input type='password' required='required' class='form-control' id='pa' name='pa' placeholder='Password'>
    </div>
  </div>
  
  <div class='form-group'>
    <div class='col-sm-offset-2 col-sm-10'>
        <button class='btn btn-success' name='a3'> Login</button>
        <a href="index.php?p=signup" class='btn btn-info'> Sign Up </a>
    </div>
  </div>
</form>
                    </div>
                    <div class='panel-footer'></div>
                </div>
            </div>
                 <div class='col-lg-3'></div>
                </div>
            
               

        

    </body>
</html>