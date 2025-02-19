
<?php
    require_once "Actions.php";
?>


<body>


<section class="header">
    <nav>
        <a href="index2.php"><img src="../RES/IMG/LOGOS/logow.png" alt="logo"></a>
        <div class="nav-links" id="nav-link">
            <img src="../RES/IMG/LOGOS/leftmenu.png" alt="x" id="x" onclick="hideMenu()">
            <ul>
                <li class="aa"><a href="index2.php">FŐOLDAL</a></li>
                <li class="aa"><a href="Services.php">SZOLGÁLTATÁSOK</a></li>
                <li class="aa"><a href="Galery.php">GALÉRIA</a></li>
                <li class="aa"><a href="Menu.php">ÉTKEZÉS</a></li>
                <li class="aa"><a href="Contact.php">KAPCSOLAT</a></li>
                <li class="aa"><a href="<?php if (!isset($_SESSION['user'])) echo("Login.php"); else echo("Chat.php"); ?>">TÁRSALGÓ</a></li>
                <li>
                    <?php
                    require_once '../CLASS/User.php';

                    if (!isset($_SESSION['user'])) { ?>
                        <div class="login">
                            <a href="Register.php"> <img class="logos" src="../RES/IMG/LOGOS/login.png" alt="register"> </a>
                            <a href="Login.php"> <img class="logos" src="../RES/IMG/LOGOS/profile.png" alt="register"> </a>
                        </div> <?php
                    } else { ?>
                        <div class="login">
                            <a style="font-size: 13px;color: #ffffff" href="Profile.php"> <?php echo $_SESSION['user']->getName();  ?> </a>
                            <form action="index2.php" method="post">
                                <input type="submit" name="logout" value="Kijelentkez">
                            </form>
                        </div>
                        <?php
                    }
                    ?>

                </li>


            </ul>
        </div>
        <img src="../RES/IMG/LOGOS/menuw.png" alt="menu" id="menu" onclick="showMenu()">
    </nav>
    <div class="welcome-text">
        <h1>
            Balance Studio
        </h1>
        <p>Üdvözöllek Magyarország legnagyobb üdülőköszpontjában! <br> Érzed jól magad nálunk</p>
    </div>
</section>
