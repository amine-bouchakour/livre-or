<html>

<head>
<title>Inscription</title>
<link rel="stylesheet" href="livre-or.css" type="text/css">
</head>

<body>
    


<header class="header2">

    <?php
    include('header2.php');
    ?>

</header>

<main>

<form action="inscription.php" method="post"> 
<input type="text" name="login" placeholder="Login" value=""><br>
<input type="password" name="password" placeholder="Password" value=""><br>
<input type="password" name="confirmpassword" placeholder="Confirmpassword" value=""><br>
<input type="submit" name="envoyer" value="Valider">
<input type="submit" name="retour" value="Retour" id="">
</form>


<?php 

if(isset($_POST['retour']))
{
    header ("Location:index.php");
}


function verifin()

{

    $connexion =mysqli_connect("localhost","root","","livreor");
    $requete= "SELECT * FROM `utilisateurs` where `login`='".isset($_POST['login'])."'";
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
    
    else
    {
        echo 'Merci de remplir tous les champs'.'<br/>';
    }

}



// FONCTION APPELE

verifin();



?>


</main>

<footer- class="header2">
<?php
include('header2.php');
?>
</footer>


</body>



</html>