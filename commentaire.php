<?php
session_start();
date_default_timezone_set('Europe/Paris');
$date = date("Y/m/d H:i");

?>

<html>

<head>
    <title>Commentaire</title>
    <link rel="stylesheet" href="livre-or.css" type="text/css">
</head>

<body>



    <header class="header2">

        <?php
        include('header2.php');
        ?>

    </header>

    <main>

        <div class="profil">
            <form action="" method="post">
                <textarea name="message" id="" maxlength="50" cols="40" rows="15">
                </textarea><br><br>
                <input class="bor2" type="submit" name="valider" value="Envoyer message" id=""><br><br>
                <input class="bor2" type="submit" name="retour" value="Retour" id="">
            </form>
        <div>

        <?php


        $connexion=mysqli_connect("localhost","root","","livreor");
        $requete1= "SELECT id FROM utilisateurs WHERE login='".$_SESSION['login']."' ";
        $query1= mysqli_query($connexion,$requete1);
        $resultat1= mysqli_fetch_assoc($query1);


        if(isset($_POST['retour']))
        {
            header ("Location:index.php");
        }


        if(isset($_POST['valider'])==true)
        {
            
            if(isset($_POST['message']) and !empty($_POST['message']))
            {
                $message =$_POST['message'];
                $message2= addslashes($message);
                $connexion=mysqli_connect("localhost","root","","livreor");
                $requete="INSERT INTO `commentaires` (`commentaire`,`id_utilisateur`,`date`) VALUES ('".$message2."','".$resultat1['id']."','".$date."')";
                $query=mysqli_query($connexion,$requete);
                header("Location:livre-or.php");
            }
        }

        ?>

    </main>

    <footer- class="header2">
        <?php
        include('header2.php');
        ?>
    </footer>


</body>

</html>