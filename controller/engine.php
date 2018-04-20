<?php

if(isset($_GET['p'])){
    $key = $_GET['p'];
    if(array_key_exists($key, $page)){
        include_once $page[$key];
    }else {
        include_once $page['error'];
    }
}else {
    include_once  $page['home'];
}
?>