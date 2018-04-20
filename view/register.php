<?php

if(isset($_POST['s1'])){
    insert();
}

?>
<style>
            
            body{
                background: url(abc.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
            }
</style>

<form method="post">
    <table align="center" border="1" class="table table-bordered">
        <tr class="success">
            <td>Name</td>
            <td><input type="text" class="form-control" name="name" /></td>
        </tr>
        <tr class="warning">
            <td>Email</td>
            <td><input type="text" class="form-control" name="email" /></td>
        </tr>
        <tr class="info">
            <td>Password</td>
            <td><input type="text" class="form-control" name="password" /></td>
        </tr>
        <tr class="danger">
            
            <td colspan="2">
            
        <button type="submit"  class="btn btn-success" name="s1" value="submit" >Submit</button> </td>
        </tr>
    </table>
</form>
