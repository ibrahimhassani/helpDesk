<?php include './connection.php' ;
session_start();
$compos=$_POST['compos_soft'];
$autre=$_POST['autre_soft'];
$desc=$_POST['desc_soft'];
$ip=$_POST['ip_soft'];
$user=$_SESSION['id_user'];
if($compos=="autre"){
    $compos=$autre;
}
$rg="INSERT INTO anomalie(`composant`, `description`, `ip`, `user_a_h`,`type`) "
        ."values('$compos','$desc','$ip','$user',2)";
$res=$db->query($rg);

header('location:./anomalie_soft_user.php');

?>

