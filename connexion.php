<html>

<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="livre-or.css" type="text/css">
</head>


<body>

<?php
if(isset($_POST['retour']))
{
    header ("Location:index.php");
}
?>


    <header class="header2">

        <?php
        include('header2.php');
        ?>

    </header>

    <main>


        <div class="profil">
            <form action="connexion.php" method="post"><br>
                <input class="bor" type="text" name="login" placeholder="Login"><br><br><br>
                <input class="bor" type="password" name="password" placeholder="password"><br><br><br>
                <input class="bor2" type="submit" name="envoyer" value="Connexion"><br><br>
                <input class="bor2" type="submit" name="retour" value="Retour" id=""><br><br>
                <?php verifco(); ?>
            </form>
        </div>

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
                echo '<p class="text3">'.'Veuillez entrez vos identifiants'.'</p>'.'<br/>';
            }

            else
            {
                echo '<p class="text3">'.'Login ou mot de passe incorrect'.'</p>'.'<br/>';
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