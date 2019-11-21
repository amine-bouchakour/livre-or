<?php
session_start();



$connexion = mysqli_connect("localhost","root","","livreor");
$requete = "SELECT * FROM utilisateurs WHERE login='".$_SESSION['login']."' ";
$query = mysqli_query($connexion,$requete);
$resultat= mysqli_fetch_assoc($query);

echo $_SESSION['login']
?>

                     
<html>

<head>
    <meta charset="utf-8">
    <title>Profil</title>
    <link rel="stylesheet" href="" type="text/css">
    
</head>


<!-- FORMULAIRE CHANGEMENT DONNEES PROFIL -->

<form  action="profil.php" name="modification" method="post">
<label  for="login">LOGIN</label> <input class="bor" type="text" name="login" value="<?php echo $_SESSION['login'] ; ?>"  required><br>
<label  for="password">PASSWORD</label> <input class="bor" type="text" name="password" value="<?php echo $resultat['password']; ?>"  required><br>
<label  for="confirmpassword">CONFIRMATION PASSWORD</label>  <input class="bor" type="text" name="confirmpassword" value="<?php echo $resultat['password']; ?>" required><br>
<input type="submit" name="submit" value="Modifier profil"></div>
</form>
<p class="align"><?php verificationprof() ?></p>




<!-- PHP -->
<?php



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




</html>