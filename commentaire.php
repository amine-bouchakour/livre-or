<?php
session_start();

$date = date("Y-m-d");
$heure = date("H:i");






echo $date.'<br/>';
echo $heure.'<br/>';


$login=$_SESSION['login'];


?>

<form action="" method="post">
<textarea name="message" id="" cols="30" rows="10">
</textarea>
<input type="submit" name="valider" value="Envoyer message" id="">
</form>


<?php

$connexion=mysqli_connect("localhost","root","","livreor");
$requete1= "SELECT id FROM utilisateurs WHERE login='$login' ";
$query1= mysqli_query($connexion,$requete1);
$resultat1= mysqli_fetch_assoc($query1);

echo $resultat1['id'].'<br/>';



if(isset($_POST['valider'])==true)
{
    echo 'étape 0'.'<br/>';
    if(isset($_POST['message']) and !empty($_POST['message']))
    {
        $connexion=mysqli_connect("localhost","root","","livreor");
        $requete="INSERT INTO `commentaires` (`commentaire`,`id_utilisateur`,`date`) VALUES ('".$_POST['message']."','".$resultat1['id']."','".$date."')";
        $query=mysqli_query($connexion,$requete);
        header("Location:index.php");
    }
}

?>
<html>
    <title>Commentaire</title>




</html>