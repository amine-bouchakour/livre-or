<html>

<head>
<title>Index</title>
<link rel="stylesheet" href="livre-or.css" type="text/css">
</head>





<?php



session_start();
include("header.php");

if(isset($_SESSION['login']))
{
    echo 'Bienvenue à toi '.$_SESSION['login'].'<br/>';
}
else 
echo 'Bienvenue à toi !!!'.'<br/>';




?>











</html>