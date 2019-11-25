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
        <div class="profil">
            <form action="inscription.php" method="post">
                <input class="bor" type="text" name="login" placeholder="Login" value=""><br><br>
                <input class="bor" type="password" name="password" placeholder="Password" value=""><br><br>
                <input class="bor" type="password" name="confirmpassword" placeholder="Confirmpassword"
                    value=""><br><br><br>
                <input class="bor2" type="submit" name="envoyer" value="Valider"><br><br>
                <input class="bor2" type="submit" name="retour" value="Retour" id=""><br><br>
                <?php 
                    verifin();
                ?>
            </form>
        </div>

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
                                echo '<p class="text3">'.'Mot de passe different de confirmation de mot de passe'.'</p>'.'<br/>';
                            }
                    }

                    else
                            {
                                echo '<p class="text3">'.'Désolé login déjà existant'.'</p>'.'<br/>';
                            }
                }
                
                else
                {
                    echo '<p class="text3">'.'Merci de remplir tous les champs'.'</p>'.'<br/>';
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