<html>

<head>
    <title>Index</title>
    <link rel="stylesheet" href="livre-or.css" type="text/css">
</head>


<body>

    <main>




        <?php

        session_start();
        include("header.php");

        if(isset($_SESSION['login']))
        {
            echo '<p class="text6">'.'Bienvenue à toi '.'<b class="up">'.$_SESSION['login'].'</b> !!'.'</p>';
        }
        else 
        echo '<p class="text6">'.'Bienvenue à toi !'.'</p>';

        ?>

        <div>
            <p class="text3 font">Les instants précieux que l'on garde en mémoire <br>
                font de nos souvenirs de très jolies histoires.<br><br>
                Si l'on dit le silence est d'or<br>
                les écrits restent à tout jamais un trésor.<br><br>
                <b>Laissez nous quelques mots</b><br><br>
                Pour qu'aujourd'hui, demain, toujours,<br>
                Les jours de pluie quand nos cheveux seront gris<br>
                Nous puissions nous souvenir de vos messages partagés.
                <?php if(isset($_SESSION['login'])){} else {echo '<p class="petit">'.'Vous devez vous inscrire et vous connecter pour poster un message'.'</p>';} ?></p> <br>
                
            <img src="" alt="">
            
        </div>





    </main>

    <footer>
        <section class="footer1">
            <p class="text4">Copyright 2019, Bouchakour Amine </p>
        </section>
    </footer>

</body>

</html>