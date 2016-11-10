<?php
include './connection.php' ;
session_start();
$user=$_GET['id'];
$req="DELETE FROM user_wait WHERE id_u='$user'";
$db->query($req);
header('location:./user_login.php');
?>
