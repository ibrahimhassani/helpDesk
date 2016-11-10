<?php
include './connection.php' ;
session_start();
$anomalie=$_GET['id'];
$req="DELETE FROM anomalie WHERE id_a_h='$anomalie' AND type=1";
$db->query($req);
if(strcmp($_SESSION['id_user'],'1') != 0)
header('location:./anomalie_hard_user.php');
else {
    header('location:./anomalie_hard.php');
}
?>

