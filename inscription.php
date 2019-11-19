<html>

<title>Inscription</title>


<form action="inscription.php" method="post"> 
<input type="text" name="login" placeholder="Login" value=""><br>
<input type="password" name="password" placeholder="Password" value=""><br>
<input type="password" name="confirmpassword" placeholder="Confirmpassword" value=""><br>
<input type="submit" name="envoyer" value="Envoyer">
</form>


<?php 

$connexion =mysqli_connect("localhost","root","","livreor");
$requete= "SELECT * FROM `utilisateurs` where `login`='".$_POST['login']."'";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_num_rows($query);

if(isset($_POST['envoyer']))
{

    if($resultat==0)
    {
        
            if(isset($_POST['login']) and isset($_POST['password']) and ($_POST['password']==$_POST['confirmpassword']) )
        
            {
                $requete="INSERT INTO `utilisateurs` (`id`,`login`,`password`) VALUES (NULL,'".$_POST['login']."','".$_POST['password']."')";
                $query = mysqli_query($connexion,$requete);
                header('Location:connexion.php');
            }
        
            else
            {
                echo 'Mot de passe different de confirmation de mot de passe'.'<br/>';
            }
            

    }

    else
            {
                echo 'Désolé login déjà existant'.'<br/>';
            }

}

else{
    echo 'Sorry'.'<br/>';
}




?>




</html>