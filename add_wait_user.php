<?php include './connection.php' ;

$login=$_POST['add_login'];
$mdp=$_POST['add_mdp'];
$poste=$_POST['poste'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$phone=$_POST['phone'];
$rg="INSERT INTO user_wait(`login`, `mdp`, `nom`, `prenom`, `poste`, `phone`) "
        ."values('$login','$mdp','$nom','$prenom','$poste','$phone')";
$res=$db->query($rg);
$Message="4C";
header('location:./index.php?stat=' . urlencode($Message));

?>

