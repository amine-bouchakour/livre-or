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
            echo 'Bienvenue à toi '.$_SESSION['login'].'<br/>';
        }
        else 
        echo 'Bienvenue à toi !!!'.'<br/>';

        ?>






    </main>

    <footer>
        <section class="footer1">
            <p class="text4">Copyright 2019, Bouchakour Amine </p>
        </section>
    </footer>

</body>

</html>