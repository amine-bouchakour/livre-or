<html>

<head>
<title>Connexion</title>
<link rel="stylesheet" href="livre-or.css" type="text/css">
</head>


<form action="connexion.php" method="post">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="text" name="password" placeholder="password"><br>
    <input type="submit" name="envoyer" value="Connexion"><br>
</form>

<?php



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
        header('Location:index.php');
        
    }
    
    if(empty($_POST['login']) and empty($_POST['password']))

    {
        echo 'Veuillez entrez vos identifiants'.'<br/>';
    }

    else
    {
        echo 'Login ou mot de passe incorrecte'.'<br/>';
    }

}

verifco();

?>









</html>