<?php
include './connection.php' ;
session_start();
$service=$_GET['id'];
$req="DELETE FROM service WHERE id='$service'";
$db->query($req);
if(strcmp($_SESSION['id_user'],'1') != 0)
header('location:./service_user.php');
else {
    header('location:./service.php');
}
?>

