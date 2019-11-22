<html>
    
<head>
<title>Header</title>
<link rel="stylesheet" href="livre-or.css" type="text/css">
</head>


<header>



<section>

<?php 

if(isset($_SESSION['login']))
{
    ?> <section class="flexrow">
    <div class="nav1"><a href="index.php"><div><p class="text">Page d'acceuil</p></div></a></div>
    <div class="nav1"><a href="livre-or.php"><div><p class="text">Livre-or</p></div></a></div>
    <div class="nav1"><a href="profil.php"><div><p class="text">Profil</p></div></a></div>
    <div class="nav1"><a href="deconnexion.php"><div><p class="text">Déconnexion</p></div></a></div>   
    </section>
    <?php
}

else 
{
    ?> <section class="flexrow">
        <div class="nav"><a href="inscription.php"><div><p class="text">Inscription</p></div></a></div>
        <div class="nav"><a href="livre-or.php"><div><p class="text">Livre-or</p></div></a></div>
        <div class="nav"><a href="connexion.php"><div><p class="text">Connexion</p></div></a></div>
    </section>
    <?php
}

?>


</section>

</header>



</html>