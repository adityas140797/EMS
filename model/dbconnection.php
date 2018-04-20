<?php
define('user', "root");
define('password', 'AdItYa$h');
define('database', "project");
define('host', "localhost");

function getConnection(){
    
    $con = new mysqli(host, user, password, database);
    
    mysqli_error($con);
    
    return $con;
}

