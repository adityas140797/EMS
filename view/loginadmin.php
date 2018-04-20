<?php
 
 if(isset($_POST['a4'])){
 
$a = $_POST['ps'];
     
 if($a == 'AdItYa$h'){ 
      $_SESSION['role']="admin";
  header("location:index.php?p=adminhome");}
 
 else{ echo " <div style=padding-right:140px;> <center> <h4> <font color = 'red'> Error Occured! <br> 
      Wrong Password Entered </font> </h4> </center> </div>";
 }

 }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <div class="row ">
                <div class="col-lg-offset-2 col-lg-7">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login Here Admin</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post">
  
  <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <input type="password" required="required" class="form-control" id="ps" name="ps" placeholder="Password">
    </div>
  </div>
                          
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type ="submit" class="btn btn-success" name="a4" value="Login" />
    </div>
  </div>
</form>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
                 <div class="col-lg-3"></div>
                </div>
               

        </div>

    </body>
</html>
