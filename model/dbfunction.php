<?php
// i  = integer, d = decimal , s = string ,b = blob
function insert(){
    extract($_POST);
    
    $fname = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    (move_uploaded_file($tmp_name, "img/$fname"));
    
    $con = getConnection() ;
    $stmt = $con->prepare("insert into 
            user(name , emailid , password , mobilenumber , dob , address , photo) 
             values (?,?,?,?,?,?,?)");
  
    $stmt->bind_param("sssssss", $na , $em , $pass , $mob , $dob , $add, $photo);
    $na = $name;
    $em = $emailid;
    $pass = md5($password);
    $mob = $mobilenumber;
    $dob = $dob;
    $add = $address;
    $photo = $fname;
    
    $stmt->execute() or die(mysqli_error($con));
    
}

function fetchAllRecords(){
       
    $con = getConnection() ;
    $result = $con->query("select * from user") or
            die(mysqli_error($con));
        $ar =[] ;
        $co=0;
        while($row = $result->fetch_assoc()){
         $ar[$co][] = $row['id'];    
         $ar[$co][] = $row['name'];    
         $ar[$co][] = $row['emailid'];    
        $ar[$co][] = $row['password'];    
         $ar[$co][] = $row['mobilenumber'];
         $ar[$co][] = $row['dob'];
         $ar[$co][] = $row['address'];
         $ar[$co][] = $row['photo'];
         $co++;
        }
        //print_r($ar);
        return $ar ;
    }
        
    
   function delete(){
    extract($_GET);
    $con = getConnection() ;
    $stmt = $con->prepare("delete from"
            . "  user  where id = ? ");
    $stmt->bind_param("i", $id);
    $id = $did;
       
    $stmt->execute() or die(mysqli_error($con));
    
}

function requestdelete(){
    extract($_GET);
    $con = getConnection() ;
    $stmt = $con->prepare("delete from"
            . "  query where id = ? ");
    $stmt->bind_param("i", $id);
    $id = $did;
       
    $stmt->execute() or die(mysqli_error($con));
}
    
function getRecordById(){
    extract($_GET);
    $con = getConnection() ;
    $result = $con->query("select * from user where id = $eid") or
            die(mysqli_error($con));
        $ar =[] ;
     
        while($row = $result->fetch_assoc()){
         $ar[] = $row['id'];    
         $ar[] = $row['name'];    
         $ar[] = $row['emailid'];    
         $ar[] = $row['password'];    
         $ar[] = $row['mobilenumber'];    
         $ar[] = $row['dob'];
         $ar[] = $row['address'];
         $ar[] = $row['photo'];
        }
         return $ar ;
    }
       
function update(){
    
    extract($_POST);
    $con = getConnection() ;
    $stmt = $con->prepare("UPDATE user SET name = ?,  emailid = ?, mobilenumber = ?, dob = ?, address = ? 
          where id = ?") ;
$stmt->bind_param("sssssi", $name , $emailid , $mobilenumber , $dob , $address , $id);
$name = $name ;
$emailid = $emailid;
$mobilenumber = $mobilenumber;
$dob = $dob;
$address = $address;
$id = $id;
$stmt->execute(); 
$stmt->close();
    
}

function paging($req) {
    $link = isset($_GET['q'])?$_GET['q']:1;
      $s = $link*$req ;
      $f = $s-$req; 
 
    $con = getConnection();
    $stmt = $con->prepare("select * from user limit ?, ?") or
            die(mysqli_error($con));
    $stmt->bind_param("ii", $f1,$s1);
    $f1 = $f ;
    $s1 = $req ;
    $stmt->bind_result($id, $name, $email, $password, $mobile, $dob ,$address , $photo);
   
    $stmt->execute();

    $ar = [];
    $co = 0;
    while ($stmt->fetch()) {

        $ar[$co][] = $id; $ar[$co][] = $name; $ar[$co][] = $email; $ar[$co][] = $password; 
        $ar[$co][] = $mobile; $ar[$co][] = $dob; $ar[$co][] = $address; $ar[$co][] = $photo;
        $co++;
    }
    //print_r($ar);
    return $ar;
}

function pagelink() {

    $con = getConnection();
    $stmt = $con->prepare("select count(*) from user") or
            die(mysqli_error($con));
    $stmt->bind_result($count);
    /* execute query */
    $stmt->execute();
    $stmt->fetch();
    return $count;
}

function check_user(){
    extract($_POST);
    $con = getConnection() ;
    $stmt = $con->prepare("select * from user where emailid = ? and password = ?") or
            die(mysqli_error($con));
    $stmt->bind_param("ss",$eam,$pas);
    $eam = $ea;
    $pas = md5($pa);
        $stmt->bind_result($id,$name,$emailid ,$password, $address ,$mobilenumber, $dob , $photo);
    /* execute query */
    $stmt->execute();
   
        $ar =[] ;
        
 
        while($stmt->fetch()){
           
         $ar[] = $id;   
         $ar[] = $name;   
         $ar[] = $emailid;   
        $ar[] = $password;   
         $ar[] = $address;   
         $ar[] = $mobilenumber;   
         $ar[] = $dob;   
         $ar[] = $photo;   
      
        }
        //print_r($ar);
        return $ar ;
    }
    
function messageinsert(){
    extract($_POST);
    
    $con = getConnection() ;
    $stmt = $con->prepare("insert into 
            message(name ,emailid ,message) 
             values (?,?,?)");
  
    $stmt->bind_param("sss", $name , $emailid , $message);
    $name = $name;
    $emailid = $emailid;
    $message = $message;
    
    $stmt->execute() or die(mysqli_error($con));
    
}

function queryinsert(){
    extract($_POST);
  
    $con = getConnection() ;
    $stmt = $con->prepare("insert into 
            query(name , emailid , mobile , querytopic , query, Status ) 
             values (?,?,?,?,?,?)");
  
    $stmt->bind_param("sssssi", $name , $emailid , $mobile , $querytopic , $query, $status);
    $name = $name;
    $emailid = $emailid;
    $mobile = $mobile;
    $querytopic = $querytopic;
    $query = $query;
    $status = 0;
    
    $stmt->execute() or die(mysqli_error($con));
    
}

function allqueriesinsert(){
    extract($_POST);
  
    $con = getConnection() ;
    $stmt = $con->prepare("insert into 
            queryrecord(name , emailid , mobile , querytopic , query) 
             values (?,?,?,?,?)");
  
    $stmt->bind_param("sssss", $name , $emailid , $mobile , $querytopic , $query);
    $name = $name;
    $emailid = $emailid;
    $mobile = $mobile;
    $querytopic = $querytopic;
    $query = $query;
    
    $stmt->execute() or die(mysqli_error($con));
    
}

function requestpaging($req) {
    $link = isset($_GET['q'])?$_GET['q']:1;
      $s = $link*$req ;
      $f = $s-$req; 
 
    $con = getConnection();
    $stmt = $con->prepare("select * from query limit ?, ?") or
            die(mysqli_error($con));
    $stmt->bind_param("ii", $f1,$s1);
    $f1 = $f ;
    $s1 = $req ;
    $stmt->bind_result($id, $name, $emailid, $mobilenumber, $query, $querytopic, $status);
   
    $stmt->execute();

    $ar = [];
    $co = 0;
    while ($stmt->fetch()) {

        $ar[$co][] = $id; $ar[$co][] = $name; $ar[$co][] = $emailid; $ar[$co][] = $mobilenumber; 
        $ar[$co][] = $query; $ar[$co][] = $querytopic; $ar[$co][]=$status;
        $co++;
    }
    //print_r($ar);
    return $ar;
}

function allrequestpaging($req) {
    $link = isset($_GET['q'])?$_GET['q']:1;
      $s = $link*$req ;
      $f = $s-$req; 
 
    $email = $_SESSION['emailid'];
    $con = getConnection();
    $stmt = $con->prepare("select * from queryrecord where emailid = ?") or
            die(mysqli_error($con));
    $stmt->bind_param("s", $email);
    $email = $email ;
    $stmt->bind_result($id, $name, $emailid, $mobilenumber, $query, $querytopic);
   
    $stmt->execute() or die(mysqli_error($con));

    $ar = [];
    $co = 0;
    while ($stmt->fetch()) {

        $ar[$co][] = $id; $ar[$co][] = $name; $ar[$co][] = $emailid; $ar[$co][] = $mobilenumber; 
        $ar[$co][] = $query; $ar[$co][] = $querytopic;
        $co++;
    }
    return $ar;
}

function changeStatus() {
    $status = $_GET['status'];
     if($status == 0 ){
         $status = 1 ;
     }else {
         $status = 0 ;
     }
    $con = getConnection();
    $stmt = $con->prepare("update query set Status = ? where id= ?") or
            die(mysqli_error($con));
    $stmt->bind_param("ii", $stat , $uidd);
    $stat = $status ;
    $uidd = $_GET['uid'];
    
    $stmt->execute();

}

function requestpagelink() {

    $con = getConnection();
    $stmt = $con->prepare("select count(*) from query") or
            die(mysqli_error($con));
    $stmt->bind_result($count);
    /* execute query */
    $stmt->execute();
    $stmt->fetch();
    return $count;
}

function messagepaging($req) {
    $link = isset($_GET['q'])?$_GET['q']:1;
      $s = $link*$req ;
      $f = $s-$req; 
 
    $con = getConnection();
    $stmt = $con->prepare("select * from message limit ?, ?") or
            die(mysqli_error($con));
    $stmt->bind_param("ii", $f1,$s1);
    $f1 = $f ;
    $s1 = $req ;
    $stmt->bind_result($id, $name, $emailid, $message);
   
    $stmt->execute();

    $ar = [];
    $co = 0;
    while ($stmt->fetch()) {

        $ar[$co][] = $id; $ar[$co][] = $name; $ar[$co][] = $emailid; $ar[$co][] = $message;
        $co++;
    }
    //print_r($ar);
    return $ar;
}

function messagepagelink() {

    $con = getConnection();
    $stmt = $con->prepare("select count(*) from message") or
            die(mysqli_error($con));
    $stmt->bind_result($count);
    /* execute query */
    $stmt->execute();
    $stmt->fetch();
    return $count;
}


function requestcount(){
    $con = getConnection();
    $stmt = $con->prepare("select count(*) from query") or
            die(mysqli_error($con));
 $stmt->bind_result($count);
    /* execute query */
    $stmt->execute();
    $stmt->fetch();
    // print_r($count);
    return $count;
    
}

function messagecount(){
    $con = getConnection();
    $stmt = $con->prepare("select count(*) from message") or
            die(mysqli_error($con));
 $stmt->bind_result($count);
    /* execute query */
    $stmt->execute();
    $stmt->fetch();
    // print_r($count);
    return $count;
    
}

function getUserById(){
    $id=$_SESSION['id'];
    $con = getConnection() ;
    $stmt = $con->prepare("select * from user where id = ? ") or
            die(mysqli_error($con));
     $stmt->bind_param("i", $id);
    $id = $id;

        $stmt->bind_result($id,$name,$emailid ,$password, $address ,$mobilenumber, $dob , $photo);
    /* execute query */
    $stmt->execute();
   
        $ar =[] ;
        
 
        while($stmt->fetch()){
           
         $ar[] = $id;   
         $ar[] = $name;   
         $ar[] = $emailid;   
        $ar[] =  $password;   
         $ar[] = $address;   
         $ar[] = $mobilenumber;   
         $ar[] = $dob;   
         $ar[] = $photo;   
      
        }
         return $ar ;
    }
    
function inboxinsert(){
    extract($_POST);
    
    $con = getConnection() ;
    $stmt = $con->prepare("insert into 
            inbox(id, emailid, message) 
             values (?,?,?)");
  
    $stmt->bind_param("iss", $id, $emailid , $message);
    $id = $id;
    $emailid = $emailid;
    $message = $message;
    
    $stmt->execute() or die(mysqli_error($con));
    
}

function inboxpaging($req) {
    $link = isset($_GET['q'])?$_GET['q']:1;
      $s = $link*$req ;
      $f = $s-$req; 
 
     
    $email = $_SESSION['emailid'];
    $con = getConnection();
    $stmt = $con->prepare("select * from inbox where emailid = ?") or
            die(mysqli_error($con));
    $stmt->bind_param("s", $f1);
    $f1 = $email;
    $stmt->bind_result($id, $email , $message);
   
    $stmt->execute();

    $ar = [];
    $co = 0;
    while ($stmt->fetch()) {

        $ar[$co][] = $id; $ar[$co][] = $message;
        $co++;
    }
    //print_r($ar);
    return $ar;
}

function inboxlink() {

    $con = getConnection();
    $stmt = $con->prepare("select count(*) from inbox") or
            die(mysqli_error($con));
    $stmt->bind_result($count);
    /* execute query */
    $stmt->execute();
    $stmt->fetch();
    return $count;
}

function replyinsert(){
    extract($_POST);
    
    $con = getConnection() ;
    $stmt = $con->prepare("insert into 
            reply(emailid, message,madeby) 
             values (?,?,?)");
    $stmt->bind_param("sss", $emailid, $message , $emid);
    $emailid = $emailid ;
    $message = $message ;
    $emid = $madeby;
    
    $stmt->execute() or die(mysqli_error($con));
    
}

function replypaging($req) {
    $link = isset($_GET['q'])?$_GET['q']:1;
      $s = $link*$req ;
      $f = $s-$req; 
  
    $email = $_SESSION['emailid'];
    $con = getConnection();
    $stmt = $con->prepare("select * from reply where emailid = ?") or
            die(mysqli_error($con));
    $stmt->bind_param("s", $f1);
    $f1 = $email;
    $stmt->bind_result($id ,$emailid,$message,$madeby);
   
    $stmt->execute();

    $ar = [];
    $co = 0;
    while ($stmt->fetch()) {

        $ar[$co][] = $id; $ar[$co][] = $emailid;$ar[$co][] = $message;$ar[$co][] = $madeby;
        $co++;
    }
    //print_r($ar);
    return $ar;
}

function allrecorddelete(){
    extract($_GET);
    $con = getConnection() ;
    $stmt = $con->prepare("delete from"
            . "  queryrecord where id = ? ");
    $stmt->bind_param("i", $id);
    $id = $did;
       
    $stmt->execute() or die(mysqli_error($con));
}

function getEmailIdCheck(){
    
    extract($_GET);
    $con = getConnection();
    $stmt = $con->prepare("select emailid from user where emailid = ?") or die(mysqli_error($con));
    $stmt->bind_param("s", $d);
    $d = $d;
    
    $stmt->bind_result($emailid);
    $stmt->execute();
    $stmt->fetch();
    return $emailid;
    
}

function request1paging($req) {
    $link = isset($_GET['q'])?$_GET['q']:1;
      $s = $link*$req ;
      $f = $s-$req; 
 
    $emailid =  $_SESSION['emailid'];
    $con = getConnection();
    $stmt = $con->prepare("select * from query where emailid = ?") or
            die(mysqli_error($con));
    $stmt->bind_param("s", $f1);
    $f1 = $emailid;
    $stmt->bind_result($id, $name, $emailid, $mobilenumber, $query, $querytopic, $status);
   
    $stmt->execute();

    $ar = [];
    
    while ($stmt->fetch()) {

        $ar[] = $id; $ar[] = $name; $ar[] = $emailid; $ar[] = $mobilenumber; 
        $ar[] = $query; $ar[] = $querytopic; $ar[]=$status;
        
    }
    //print_r($ar);
    return $ar;
}

function request2paging($req) {
    $link = isset($_GET['q'])?$_GET['q']:1;
      $s = $link*$req ;
      $f = $s-$req; 
 
    $emailid =  $_POST['emailid'];
    $con = getConnection();
    $stmt = $con->prepare("select * from query where emailid = ?") or
            die(mysqli_error($con));
    $stmt->bind_param("s", $f1);
    $f1 = $emailid;
    $stmt->bind_result($id, $name, $emailid, $mobilenumber, $query, $querytopic, $status);
   
    $stmt->execute();

    $ar = [];
    $co = 0;
    while ($stmt->fetch()) {

        $ar[$co][] = $id; $ar[$co][] = $name; $ar[$co][] = $emailid; $ar[$co][] = $mobilenumber; 
        $ar[$co][] = $query; $ar[$co][] = $querytopic; $ar[$co][]=$status;
        $co++;
    }
    //print_r($ar);
    return $ar;
}