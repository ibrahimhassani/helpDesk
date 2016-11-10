<?php
include './connection.php' ;
session_start();
$Message = "5C";
if (empty($_POST['optradio'])) {
    header('location:./acceuil.php?error=' . urlencode($Message));
} else if (empty($_POST['check_list'])) {
    $Message = "5D";
    header('location:./acceuil.php?error=' . urlencode($Message));
} else {
    $de = $_POST['optradio'];
    $ip = $_POST['ip'];
    $date = $_POST['date'];
    $h_debut = $_POST['h_debut'];
    $h_fin = $_POST['h_fin'];
    $salle = $_POST['salle'];
    $user=$_SESSION['id_user'];
    $req="INSERT INTO demande(`de`, `ip`,`date`,`h_debut`, `h_fin`, `salle`, `user_d`) "
        ."values('$de','$ip','$date','$h_debut','$h_fin','$salle','$user')";
    $res=$db->query($req);
    $id_d=$db->lastInsertId();
    foreach($_POST['check_list'] as $selected){
        
        $rg="INSERT INTO site_demande(`demande`, `site`) values('$id_d','$selected')";
        $res=$db->query($rg);
    }
    header('location:./demande_user.php');
}
?>