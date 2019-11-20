<?php
session_start();



$id=$_SESSION['id'];

$connexion3= mysqli_connect("localhost","root","","livreor");
$requete3 = "SELECT * FROM commentaires ";
$query3 = mysqli_query($connexion3,$requete3);
$resultat3 = mysqli_fetch_assoc($query3);

$connexion= mysqli_connect("localhost","root","","livreor");
$requete2 = "SELECT * FROM utilisateurs ";
$query2 = mysqli_query($connexion,$requete2);
$resultat2 = mysqli_fetch_assoc($query2);

var_dump($resultat2);

echo ($resultat2)['Id'].'<br/>';
echo ($resultat2)['login'].'<br/>'.'<br/>';

echo ($resultat3)['id_utilisateur'].'<br/>';
echo ($resultat3)['commentaire'].'<br/>';

var_dump($resultat3);

if(($resultat2)['Id']=($resultat3)['id_utilisateur'])
{
    echo 'blaklka';
}







?>

<html>
    <title>Livre d'or</title>


</html>