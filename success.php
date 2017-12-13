<?php
session_start();
echo 'welcome to new page';

//if(!$_SESSION['user'] == 'admin');

if(!isset($_SESSION['user']))
{
header('location:index.php');
$_SESSION['msg']="hacking attemped";
}
?>