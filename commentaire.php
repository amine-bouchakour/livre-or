<?php
session_start();
date_default_timezone_set('Europe/Paris');
$date = date("Y/m/d H:i");








echo $_SESSION['login'];



?>
<title>Commentaire</title>


<form action="" method="post">
<textarea name="message" id="" cols="30" rows="10">
</textarea>
<input type="submit" name="valider" value="Envoyer message" id="">
</form>


<?php

$connexion=mysqli_connect("localhost","root","","livreor");
$requete1= "SELECT id FROM utilisateurs WHERE login='".$_SESSION['login']."' ";
$query1= mysqli_query($connexion,$requete1);
$resultat1= mysqli_fetch_assoc($query1);





if(isset($_POST['valider'])==true)
{
    echo 'étape 0'.'<br/>';
    if(isset($_POST['message']) and !empty($_POST['message']))
    {
        $message =$_POST['message'];
        $message2= addslashes($message);
        $connexion=mysqli_connect("localhost","root","","livreor");
        $requete="INSERT INTO `commentaires` (`commentaire`,`id_utilisateur`,`date`) VALUES ('".$message2."','".$resultat1['id']."','".$date."')";
        $query=mysqli_query($connexion,$requete);
        header("Location:index.php");
    }
}

?>
<html>
    <title>Commentaire</title>




</html>