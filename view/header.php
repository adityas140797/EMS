<html>
<head>
<title>Enquiry Management System</title>
<!--<embed src="http://www.youtube.com/v/brMBEL9kY10&autoplay=1" type="application/x-shockwave-flash" wmode="transparent" width="1" height="1"></embed> //-->

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <meta charset="UTF-8">

<style>
            
            body{
                background: url(pics/a.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
            }
            
            .a{background-color: lightpink;
            height:60px;
            }
            
</style>
</head>

<body>
<?php
if (isset($_SESSION['role'])){ 
if ($_SESSION['role'] == "user"){
echo"
<nav class='navbar navbar-default'>
  <div class='container-fluid'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href=''>EMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
      <li class=''><a href='index.php?p=home'> <span class='glyphicon glyphicon-home'></span> Home <span class='sr-only'>(current)</span></a></li>
        <li><a href='index.php?p=about'> <span class='glyphicon glyphicon-book'></span> About Us</a></li>
        <li><a href='index.php?p=contact'> <span class='glyphicon glyphicon-earphone'></span> Contact Us</a></li>
        <li><a href='index.php?p=status'> <span class='glyphicon glyphicon-time'></span> Status</a></li>
      </ul> 
      <form class='navbar-form navbar-left'>
        <div class='form-group'> 
        <input type='text' id='myInput' onkeyup='myFunction()' class='form-control' size='33' placeholder='Search'>
        <button type='submit' class='btn btn-default'>Submit</button>
        </div>
        
      </form>
      <ul class='nav navbar-nav navbar-right'>
      <li><a href='index.php?p=form'> <span class='glyphicon glyphicon-list-alt'></span> Form </a></li>
      <li><a href='index.php?p=userinbox'> <span class='glyphicon glyphicon-envelope'></span> User Inbox</a></li>
      <li><a href='index.php?p=queryreplies'> <span class='glyphicon glyphicon-repeat'></span> Query Replies</a></li>
          <li class='dropdown'>
          <a href='' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> <span class='glyphicon glyphicon-user'></span> My Account <span class='caret'></span> </a>
          <ul class='dropdown-menu'>
            <li><a href='index.php?p=logout' <span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
          </ul>
          </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> ";
}

else if ($_SESSION['role'] == "admin"){
echo"
<nav class='navbar navbar-default'>
  <div class='container-fluid'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href=''>EMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
      <li class=''><a href='index.php?p=home'> <span class='glyphicon glyphicon-home'></span> Home <span class='sr-only'>(current)</span></a></li>
        <li><a href='index.php?p=about'> <span class='glyphicon glyphicon-book'></span> About Us</a></li>
      </ul>
      <form class='navbar-form navbar-left'>
        <div class='form-group'>
          <input type='text' class='form-control' size='110' placeholder='Search'>
        </div>
        <button type='submit' class='btn btn-default'>Submit</button>
      </form>
      <ul class='nav navbar-nav navbar-right'>
          <li class='dropdown'>
          <a href='' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> <span class='glyphicon glyphicon-user'></span> My Account <span class='caret'></span> </a>
          <ul class='dropdown-menu'>
            <li><a href='index.php?p=logout'> <span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
          </ul>
          </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> ";
}
}

else {
echo "<nav class='navbar navbar-default'>
  <div class='container-fluid'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href=''>EMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
        <li class=''><a href='index.php?p=home'> <span class='glyphicon glyphicon-home'></span> Home <span class='sr-only'>(current)</span></a></li>
        <li><a href='index.php?p=about'> <span class='glyphicon glyphicon-book'></span> About Us</a></li>
      </ul>
      <form class='navbar-form navbar-left'>
        <div class='form-group'>
          <input type='text' class='form-control' size='99' placeholder='Search'>
        </div>
        <button type='submit' class='btn btn-default'>Submit</button>
      </form>
      <ul class='nav navbar-nav navbar-right'>
          <li class='dropdown'>
          <a href='' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> <span class='glyphicon glyphicon-log-in'></span> Login <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='index.php?p=login'>User</a></li>
            <li><a href='index.php?p=loginadmin'>Admin</a></li>
          </ul>
        </li>
        <li class='dropdown'>
          <a href='' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'> <span class='glyphicon glyphicon-edit'></span> Sign Up <span class='caret'></span></a>
          <ul class='dropdown-menu'>
              <li><a href='index.php?p=signup'>User</a></li>     
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> ";
}

?>                          
                    
</body>
</html>