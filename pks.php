<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         session_start();
        $user=$_REQUEST['username'];
        $pass=$_REQUEST['password'];
        
        if($user == "admin" && $pass == "admin")
        
        {
            $_SESSION['user']="admin";
            header('location:success.php');
        }
 else {
     $_SESSION['msg']="incorrect user name";
            header('location:index.php');
 }
        
        ?>
    </body>
</html>
