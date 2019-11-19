<html>

<title>Connexion</title>

<form action="connexion.php" method="post">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="text" name="password" placeholder="password"><br>
    <input type="submit" name="envoyer" value="Connexion"><br>
</form>

<?php
session_start();

function verifco()

{

    $connexion= mysqli_connect("localhost","root","","livreor");
    $requete ="SELECT * FROM `utilisateurs`";
    $query = mysqli_query($connexion,$requete);
    $resultat= mysqli_fetch_all($query);

    
    
    $compte=false;
    if(isset($_POST['envoyer'])==true)
    {
        
        foreach($resultat as $key =>$value)
        {
            
            if($resultat[$key][1] == $_POST['login'] && $resultat[$key][2] == $_POST['password'])
            {
                $compte=true;
            }

        }
    }
    
    if($compte==true)
    {
        session_start();
        echo 'Bienvenue à toi '.$_POST['login'].'<br/>';
        $_SESSION['login']=$_POST['login'];
        header('Location:profil.php');
        
    }
    
    

    if(isset($compte) and $compte==false)
    {
        echo 'Login ou mot de passe incorrecte'.'<br/>';
    }

}

verifco();

?>









</html>