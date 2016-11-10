<?php include './connection.php' ;
session_start();
$compos=$_POST['compos'];
$autre=$_POST['autre'];
$desc=$_POST['desc'];
$ip=$_POST['ip'];
$user=$_SESSION['id_user'];
if($compos=="autre"){
    $compos=$autre;
}
$rg="INSERT INTO anomalie(`composant`, `description`, `ip`, `user_a_h`,`type`) "
        ."values('$compos','$desc','$ip','$user',1)";
$res=$db->query($rg);

header('location:./anomalie_hard_user.php');

?>

