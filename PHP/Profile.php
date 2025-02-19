<?php
require_once "Actions.php";
?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Balance Studio</title>
    <link rel="stylesheet" href="../CSS/Global.css">
    <link rel="stylesheet" href="../CSS/Register.css">
    <link rel="icon" type="image/png" href="../RES/IMG/LOGOS/logow.png">
    <style>
        body {
            background-image: url("<?php if(isset($_SESSION["user"])) {if ($_SESSION["user"]->getTheme() == 0) {echo("../RES/IMG/register.jpg");} else {echo("../RES/IMG/register2.jpg");}} else {echo("../RES/IMG/register.jpg");} ?>");
        }
        nav {
            position: absolute;
            top: 0;

            width: 100%;
        }
    </style>
</head>
<body>

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



<div class="user-data">

    <h1>Profil információ</h1>

    <table>
        <tr>
            <td>Név:</td>
            <td> <?php echo $_SESSION['user']->getName(); ?></td>
            <td></td>
        </tr>
        <tr>
            <td>Email-cím:</td>
            <td> <?php echo $_SESSION['user']->getEmail(); ?>

            </td>
            <?php
            if($_SESSION['user']->isVisibleEmail()){ ?>
                <td><img src="../RES/IMG/LOGOS/eye.png" class="logos" title="Látható a többi felhasználó által" alt="show"></td>
                <?php
            }else{ ?>
                <td><img src="../RES/IMG/LOGOS/noeye.png" class="logos" title="Nem látható a többi felhasználó által" alt="show"></td>
                <?php
            }
            ?>
        </tr>
    </table>

    <div class="profile-buttons">
        <form id="form-buttons" action="Actions.php" method="post">
            <input class="input-buttons" type="submit" name="logout" value="Kijelentkez">
            <input  class="input-buttons" type="submit" name="delete" value="Profil törlése">
            <a id="a" href="Register.php">Módosít</a>
        </form>

    </div>


</div>

<script src="../JS/RegisterAnimation.js"></script>

</body>
</html>

<!--© Wellness Center Mackovic Mark (IW8RXX) , Makó Ádám Péter (PH2BC8) 2023, Szegedi Tudományegyetem-->


