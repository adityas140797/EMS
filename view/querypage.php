<style>

    #login { display: none; }
    .login,
    .logout { 
        position: absolute; 
        top: -3px;
        right: 0;
    }
    .page-header { position: relative; }
    .reviews {
        color: #555;    
        font-weight: bold;
        margin: 10px auto 20px;
    }
    .notes {
        color: #999;
        font-size: 12px;
    }
    .media .media-object { max-width: 120px; }
    .media-body { position: relative; }
    .media-date { 
        position: absolute; 
        right: 25px;
        top: 25px;
    }
    .media-date li { padding: 0; }
    .media-date li:first-child:before { content: ''; }
    .media-date li:before { 
        content: '.'; 
        margin-left: -2px; 
        margin-right: 2px;
    }
    .media-comment { margin-bottom: 20px; }
    .media-replied { margin: 0 0 20px 50px; }
    .media-replied .media-heading { padding-left: 6px; }

    .btn-circle {
        font-weight: bold;
        font-size: 12px;
        padding: 6px 15px;
        border-radius: 20px;
    }
    .btn-circle span { padding-right: 6px; }
    .embed-responsive { margin-bottom: 20px; }
    .tab-content {
        padding: 50px 15px;
        border: 1px solid #ddd;
        border-top: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
    }
    .custom-input-file {
        overflow: hidden;
        position: relative;
        width: 120px;
        height: 120px;
        background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');    
        background-size: 120px;
        border-radius: 120px;
    }
    input[type="file"]{
        z-index: 999;
        line-height: 0;
        font-size: 0;
        position: absolute;
        opacity: 0;
        filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
        margin: 0;
        padding:0;
        left:0;
    }
    .uploadPhoto {
        position: absolute;
        top: 25%;
        left: 25%;
        display: none;
        width: 50%;
        height: 50%;
        color: #fff;    
        text-align: center;
        line-height: 60px;
        text-transform: uppercase;    
        background-color: rgba(0,0,0,.3);
        border-radius: 50px;
        cursor: pointer;
    }
    .custom-input-file:hover .uploadPhoto { display: block; }  

</style>

<h1 class="text-center" style="color:darkblue"><strong>QUERIES</strong></h1>

<?php
if (!isset($_SESSION['role'])) {
    header("location:index.php?p=home");
}
else {
    if ($_SESSION['role']=="admin"){
        header("location:index.php?p=home");
    }
}
if (isset($_POST['r1'])) {
    replyinsert();
}

if(isset($_GET['did'])){
    requestdelete();
}

$ar = requestpaging(4);
//print_r($_SESSION);
//print_r($ar);
for ($i = 0; $i < count($ar); $i++) {
    if ($ar[$i][6] == 1) {
        echo"<br>
<div class='container'>
  <div>
            
            <div>
                <div>                
                    <ul class='media-list'>
                      <li class='media'>
      
                        <div class='media-body'>
                          <div class='well well-lg'>
                              <h4 class='media-heading  reviews'>" . $ar[$i][1] . "</h4>
                              
                              <p class='media-comment'>
                                " . $ar[$i][5] . "
                              </p>";

if (!($_SESSION['emailid']==$ar[$i][2])){
echo "<a class='btn btn-info btn-circle text-uppercase' href='index.php?p=querypage&emid=" . $ar[$i][2] . "'>
    <span class='glyphicon glyphicon-share-alt'></span> Reply</a> "; } else{}
      
if ($_SESSION['emailid']==$ar[$i][2])
{        
echo"&nbsp; <a class='btn btn-danger btn-circle text-uppercase' href='index.php?p=querypage&did=".$ar[$i][0]."'>"
. "<span class='glyphicon glyphicon-remove'></span> REMOVE </a> "; } else{}

echo "             </div>
                        </div>
                         
                </div>
            </div>
        </div>
    </div>";
        
        if (isset($_GET['emid'])) {
            if ($_GET['emid'] == $ar[$i][2]) {
                ?>

                <!--<h2><font color="darkblue"><center><b>Reply his Query here</b></center></font></h2>-->
                <br>
                <form class="form-horizontal" method="post">

                    <div class="form-group" style="padding-right: 110px;">
                        <div>
                            <label for="" class="col-sm-2 control-label">Suggestion</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" required="required" id="message" name="message" placeholder="Enter your Suggestion" rows="5"></textarea>
                                <input type="hidden" name="madeby" value="<?php echo $_SESSION['emailid'] ?>" />
                                <input type="hidden" name="emailid" value="<?php echo  $ar[$i][2]  ?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <br><div style="padding-left: 10px;"> <center> <input type="submit" class="btn btn-primary" name="r1" value="Submit" /> </center> </div>

                            </div>
                        </div>
                    </div>
                </form>

  
                <?php
            }
        }
    } else {
        
    }
}
?> 

<br><br><br><br><br><br><br><br>