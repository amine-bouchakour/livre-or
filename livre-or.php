<?php
session_start();

$login=$_SESSION['login'];


$connexion= mysqli_connect("localhost","root","","livreor");
$requete2 = "SELECT * FROM commentaires WHERE login='$login'";
$query2 = mysqli_query($connexion,$requete2);
$resultat2 = mysqli_fetch_all($query2);

echo $resultat2['login'].'<br/>';
echo $resultat2['id_utilisateur'].'<br/>';
echo $resultat2['date'].'<br/>';
echo $resultat2['commentaire'].'<br/>';

echo $resultat2.'<br/>';
echo $login;


?>

<html>
    <title>Livre d'or</title>


</html>