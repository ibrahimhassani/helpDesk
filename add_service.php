<?php include './connection.php' ;
session_start();
$serv=$_POST['serv'];
$desc=$_POST['desc_serv'];
$ip=$_POST['ip_serv'];
$user=$_SESSION['id_user'];

$rg="INSERT INTO service(`service`, `description`, `ip`, `user`) "
        ."values('$serv','$desc','$ip','$user')";
$db->query($rg);

header('location:./service_user.php');

?>

