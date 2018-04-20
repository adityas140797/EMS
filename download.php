<?php
function download($image){
    
    $path = "img/$image" ;
    //header("Content-Type:image/jpg");
 header("Content-Disposition: attachment; filename= $path");
    echo readfile($path);
    
    
}

if (isset($_GET['p'])){
    download($_GET['p']);
}


?>