<?php
include './connection.php' ;
session_start();
$demande=$_GET['id'];
$req="DELETE FROM demande WHERE id_d='$demande'";
$db->query($req);
header('location:./demande_user.php');
?>

