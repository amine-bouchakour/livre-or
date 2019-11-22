<?php
session_start();

date_default_timezone_set('Europe/Paris');
$date = date("Y/m/d H:i");

$newdate=date('d-m-Y à H:i',strtotime($date));

echo $date.'<br/>';
echo $newdate.'<br/>';

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

echo count($tabutil).' utilisateurs'.'<br/>';
echo count($tabcom).' commentaires'.'<br/>'.'<br/>';



$j= count($tabcomptecol);
$c=count($tabutil);

date_default_timezone_set('Europe/Paris');


if(isset($_SESSION))
{
    echo 'Salut, tu es bien connecté !'.'<br/>'.'<br/>';
}
else {
    echo 'Vous devez vous connectez pour pouvoir poster un commentaire'.'<br/>';
}


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
            echo 'Posté le '.$newdate.' par '.'<b>'.$tabutil[$k][1].'</b>'.' : '.'<br/>'.$tabcom[$i][1].'<br/>'.'<br/>'.'<br/>';
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

<html>
    <title>Livre d'or</title>
    <link rel="stylesheet" href="livre-or.css" type="text/css">


</html>