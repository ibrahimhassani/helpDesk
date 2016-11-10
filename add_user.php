<?php

include './connection.php';

$user = $_GET['id'];
$res = $db->query("SELECT * FROM user_wait WHERE id_u='$user'");
while ($row = $res->fetch()) {
    $login = $row['login'];
    $mdp = $row['mdp'];;
    $poste = $row['poste'];;
    $nom = $row['nom'];;
    $prenom = $row['prenom'];;
    $phone = $row['phone'];;
}

$rg = "INSERT INTO user(`login`, `mdp`, `nom`, `prenom`, `poste`, `phone`) "
        . "values('$login','$mdp','$nom','$prenom','$poste','$phone')";
$db->query($rg);
header('location:./delete_user.php?id='.$user);

