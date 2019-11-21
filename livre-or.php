<?php
session_start();



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


$i=0;
while ($i<$j)
{
    
    $k=0;
    while($k<$c)
    {

        if($tabcom[$i][2]==$tabutil[$k][0])
        {
            echo 'Posté le '.$tabcom[$i][3].' par '.'<b>'.$tabutil[$k][1].'</b>'.' : '.$tabcom[$i][1].'<br/>';
            $i++;
        }
        else
        {
            $k++;
        }

    }
    
    
}








//    foreach($tabcom as $key => $value)
//    {


//     echo $value[2].' '.$value[1].' '.$value[3].'<br/>';

     
//    }

//    echo '<br/>';

//    foreach($tabutil as $key => $value)
//    {
//        echo $value[0].' '.$value[1].'<br/>';
//    }




// if(($tabutil)['Id']=($tabcom)['id_utilisateur'])
// {
//     echo 'Posté le '.$tabcom['date'].' par '.$tabutil['login'].' : '.$tabcom['commentaire'].'<br/>';
// }

// $j= count($tabcomptecol);

// echo $j;

// $i=0;

// while ($i<$j)
//         {

//             if ($tabutil['Id'][0]==$tabcom['id_utilisateur'][0])
//                 {
//                     echo 'Posté le '.$tabcom['date'].' par '.$tabutil['login'].' : '.$tabcom['commentaire'].'<br/>';
//                     $i++;  
//                 }

//         }
// {

// }


// echo ($tabutil)['login'].'<br/>'.'<br/>';

// echo $ID_utilisateur[0].'<br/>';


// echo ($tabcom)['id_utilisateur'].'<br/>';

// echo ($tabcom)['commentaire'].'<br/>';


// var_dump($tabcom).'<br/>';




// var_dump($tabutil);





?>

<html>
    <title>Livre d'or</title>


</html>