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
            echo '<p class="text3">'.'Bienvenue à toi '.'<b class="up">'.$_SESSION['login'].'</b> !!'.'</p>'.'<br/>';
        }
        else 
        echo '<p class="text3">'.'Bienvenue à toi !'.'</p>'.'<br/>';

        ?>

        <div>
            <p class="text3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates blanditiis nam repellendus perferendis animi, assumenda reprehenderit aperiam nihil ad vero numquam delectus vel nesciunt voluptas tenetur quidem modi ea! Ipsam facere fuga nesciunt reiciendis, sed temporibus cum error fugit quos eos vitae distinctio aliquid voluptatum. Libero, fugit aut. Eos, veritatis.</p> <br>
            <img src="" alt="">
            <p class="text3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates blanditiis nam repellendus perferendis animi, assumenda reprehenderit aperiam nihil ad vero numquam delectus vel nesciunt voluptas tenetur quidem modi ea! Ipsam facere fuga nesciunt reiciendis, sed temporibus cum error fugit quos eos vitae distinctio aliquid voluptatum. Libero, fugit aut. Eos, veritatis.</p>
        </div>





    </main>

    <footer>
        <section class="footer1">
            <p class="text4">Copyright 2019, Bouchakour Amine </p>
        </section>
    </footer>

</body>

</html>