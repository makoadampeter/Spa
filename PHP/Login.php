<?php
$GLOBALS["err"] = "";

require_once("../CLASS/User.php");

session_start();

if (isset($_POST["submit"])) {
    if (trim($_POST["email"]) != "" && trim($_POST["passw"]) != "") {
        $users = fopen("../DATA/users.txt", "r");

        $userExists = false;
        while (($line = fgets($users)) !== false) {
            $actUser = unserialize($line);
            if ($_POST["email"] == $actUser->getEmail()) {
                $userExists = true;
                if (password_verify($_POST["passw"], $actUser->getPassw())) {
                    session_start();
                    $_SESSION["user"] = $actUser;
                    header("Location: ../PHP/Profile.php");
                } else {
                    $GLOBALS["err"] = "Helytelen jelszó";
                }
                break;
            }
        }

        if (!$userExists) {
            $GLOBALS["err"] = "Nem létezik ilyen felhasználó";
        }

        fclose($users);
    } else {
        $GLOBALS["err"] = "Hibás adatok";
    }
}
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
            background-image: url("../RES/IMG/register.jpg");
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


<?php
if($GLOBALS["err"] != ""){ ?>
    <div class="errors">
        <?php echo($GLOBALS["err"]); ?>
    </div>  <?php
}
?>


<form class="register" action="Login.php" method="post">
    <h1>Bejelentkezés</h1>
    <label><input class="inputs" placeholder="*E-mail cím" type="email" name="email" ></label><br>
    <label><input class="inputs" placeholder="*Jelszó" type="password" name="passw"></label><br>

    <div class="button">
        <button type="submit" name="submit">BEJELENTKEZÉS</button>
        <p>Nincs még profilod<a href="Register.php">Regisztráció</a></p>
    </div>





</form>

<script src="../JS/RegisterAnimation.js"></script>
</body>
</html>

<!--© Wellness Center Mackovic Mark (IW8RXX) , Makó Ádám Péter (PH2BC8) 2023, Szegedi Tudományegyetem-->
