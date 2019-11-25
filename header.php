<html>

<header>

    <section class="header">

        <?php 

        if(isset($_SESSION['login']))
        {
            ?> <section class="flexrow">
                    <a href="index.php">
                        <div class="nav1">
                            <div>
                                <p class="text">Page d'acceuil</p>
                            </div>
                        </div>
                    </a>
                    <a href="livre-or.php">
                        <div class="nav1">
                            <div>
                                <p class="text">Livre-or</p>
                            </div>
                        </div>
                    </a>
                    <a href="profil.php">
                        <div class="nav1">
                            <div>
                                <p class="text">Profil</p>
                            </div>
                        </div>
                    </a>
                    <a href="deconnexion.php">
                        <div class="nav1">
                            <div>
                                <p class="text">Déconnexion</p>
                            </div>
                        </div>
                    </a>
                </section>
            <?php
        }

        else 
        {
            ?> <section class="flexrow">
                  <a href="index.php">
                        <div class="nav1">
                            <div>
                                <p class="text">Page d'acceuil</p>
                            </div>
                        </div>
                    </a>
                    <a href="inscription.php">
                        <div class="nav1">
                            <div>
                                <p class="text">Inscription</p>
                            </div>
                        </div>
                    </a>
                    <a href="livre-or.php">
                        <div class="nav1">
                            <div>
                                <p class="text">Livre-or</p>
                            </div>
                        </div>
                    </a>
                    <a href="connexion.php">
                        <div class="nav1">
                            <div>
                                <p class="text">Connexion</p>
                            </div>
                        </div>
                    </a>
                </section>
                
            <?php
        }

        ?>


    </section>

</header>



</html>