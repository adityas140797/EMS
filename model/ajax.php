<?php

ob_start();
session_start();
include_once './dbconnection.php';
include_once './dbfunction.php';
if(isset($_GET['d'])){
    if(!empty(getEmailIdCheck())){
        echo "EmailId Already Exist";      
    }
    else{
        echo "Emaild is Available";
    }

}