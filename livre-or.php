<?php
session_start();

include("header.php");

date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d H:i:s");

$newdate=date("d-m-Y à H:i:s",strtotime($date));



// REQUETE SUR TOUT SUR TABLE COMMENTAIRES
$connexion3= mysqli_connect("localhost","root","","livreor");
$requete3 = "SELECT * FROM commentaires ORDER BY `Id` DESC";
$query3 = mysqli_query($connexion3,$requete3);
$tabcom = mysqli_fetch_all($query3);



// REQUETE COMPTE NOMBRE DE COLONNE DANS BDD MySQL
$query3 = mysqli_query($connexion3,$requete3);
$tabcomptecol = mysqli_fetch_all($query3);


// REQUETE SUR LOGIN SUR TABLE UTILISATEURS
$connexion= mysqli_connect("localhost","root","","livreor");
$requete2 = "SELECT Id,login FROM utilisateurs "; // WHERE id='$ID_utilisateur'
$query2 = mysqli_query($connexion,$requete2);
$tabutil = mysqli_fetch_all($query2);

?>

<html>

<head>
    <title>Livre d'or</title>
    <link rel="stylesheet" href="livre-or.css" type="text/css">
</head>

<body>

    <main>





        <?php
        echo '<p class="text3">'.'Il y a '.'<b>'.count($tabutil).' utilisateurs'.'</b>'.' inscrits sur le site.'.'</p>';
        echo '<p class="text3">'.'Et il y a '.'<b>'.count($tabcom).' commentaires'.'</b>'.' postés.'.'</p>'.'<br/>'.'<br/>';



        $j= count($tabcomptecol);
        $c=count($tabutil);




        if (isset($_SESSION['login']))

        {
            ?> <a href="commentaire.php">
                    <div class="com text2 ">Poster un commentaire</div>
                </a><br> <?php
        }

        else {
            echo '<b><p class="text5">'.'Vous devez vous connecter pour poster un message'.'</p></b>'.'<br>'.'<br>';
        }


        ?>
                <div class="co">
                    <?php

        $i=0;
        while ($i<$j)
        {
            
            $k=0;
            while($k<$c)
            {

                if($tabcom[$i][2]==$tabutil[$k][0])
                {
                    $date = $tabcom[$i][3];
                    $newdate=date('d-m-Y à H:i:s',strtotime($date));
                    echo '<u>'.'Posté le '.'<b class="col1">'.$newdate.'</b>'.' par '.'<b class="up"><p>'.$tabutil[$k][1].'</p></b>'.'</u>'.'<i class="up"><p class="col">'.'"'.$tabcom[$i][1].'"'.'</p></i>';
                    ?> <p class="p1"></p><?php
                    
                    $i++;
                break;   
                }

                else
                {
                    $k++;
                }
            }
        }


            ?>
                    </div>

                    <?php
            if (isset($_SESSION['login']))

            {
                ?> <a href="commentaire.php">
                        <div class="com text2 ">Poster un commentaire</div>
                    </a><br> <?php
            }

            else {
                echo '<b><p class="text5">'.'Vous devez vous connecter pour poster un message'.'</p></b>'.'<br>'.'<br>';
            }
            ?>

        <footer>
            <section class="footer1">
                <p class="text4">Copyright 2019, Bouchakour Amine</p>
            </section>
        </footer>

    </main>
    
</body>


</html>