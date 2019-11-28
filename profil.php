<?php
session_start();



$connexion = mysqli_connect("localhost","root","","livreor");
$requete = "SELECT * FROM utilisateurs WHERE login='".$_SESSION['login']."' ";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_assoc($query);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>Profil</title>
    <link rel="stylesheet" href="livre-or.css" type="text/css">

</head>

<body>



    <header class="header2">

        <?php
    include('header2.php');
    ?>

    </header>

    <main>


        <!-- FORMULAIRE CHANGEMENT DONNEES PROFIL -->
        <div class="profil">
            <form action="profil.php" name="modification" method="post">
                <label for="login" class="col2">LOGIN</label> <br><input class="bor" type="text" name="login"
                    value="<?php echo $_SESSION['login'] ; ?>" required><br><br>
                <label for="password" class="col2">PASSWORD</label> <br><input class="bor" type="password" name="password"
                    value="<?php echo $resultat['password']; ?>" required><br><br>
                <label for="confirmpassword" class="col2">CONFIRM PASSWORD</label> <br> <input class="bor" type="password"
                    name="confirmpassword" value="<?php echo $resultat['password']; ?>" required><br><br><br>
                <input class="bor2" type="submit" name="submit" value="Mettre à jour votre profil"><br><br>
                <input class="bor2" type="submit" name="retour" value="Retour" id="">
            </form>
            <p class="align"><?php verificationprof() ?></p>
        </div>



        <!-- PHP -->
        <?php

        if(isset($_POST['retour']))
        {
            header ("Location:index.php");
        }

        function verificationprof()

        {

            //CONDITION SI MODIFICATION ENVOI REQUETE UPDATE DONNEES SUR BDD MySQL
            if(isset($_POST['submit']))
                
                {
                    $connexion = mysqli_connect("localhost","root","","livreor");
        
                    if($_POST['confirmpassword']==$_POST['password'])

                    {
                        $requeteupdate = "UPDATE utilisateurs 
                            SET login='".$_POST['login']."', password='".$_POST['password']."' 
                            WHERE login = '".$_SESSION['login']."'";
                        $query1 = mysqli_query($connexion,$requeteupdate);
                        $resultat1= mysqli_fetch_all($query1);
                        if($resultat1['login'] != $_POST['login'] )
                            {
                                $_SESSION['login'] = $_POST['login'];
                                
                                header('Location:index.php');
                            }
                
                        elseif($resultat1['password'] != $_POST['password'])
                            {
                                $query1 = mysqli_query($connexion,$requeteupdate);
                                $_SESSION['password'] = $_POST['password'];
                                header('Location:index.php');
                            }   
                    }
                    
                    else
                    {
                        echo " Impossible de modifier les informations ";
                    }
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