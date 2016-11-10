<?php include './connection.php' ;
session_start ();
$_SESSION['login']=$_POST['login'];
$_SESSION['mdp']=$_POST['mdp'];
$login=$_SESSION['login'];
$mdp=$_SESSION['mdp']; 
$rg="SELECT * FROM user WHERE login='$login' AND mdp='$mdp'";
$res=$db->query($rg);
$found=false;
$count=0;
$Message="3B";
while(($row=$res->fetch()) && !$found){
    $count++;
    
    if($count>0){
        $found=true;
        
        $_SESSION['id_user']=$row['id_u'];
    }
}
if($found){
    if(strcmp($_SESSION['id_user'],'1') != 0)
        header('location:./acceuil.php');
    else {
        header('location:./demande.php');
    }
}
else
    header('location:./index.php?Message=' . urlencode($Message));

?>

