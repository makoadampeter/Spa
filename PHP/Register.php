<?php
$GLOBALS["err"] = "";

require_once("../CLASS/User.php");


$validEmail = false;

if (isset($_POST["submit"])) {
    if (trim($_POST["name"]) == "") {
        $GLOBALS["err"] = "Adj meg egy nevet";
    } else if (trim($_POST["email"]) == "") {
        $GLOBALS["err"] = "Adj meg egy email címet";
    } else {
        $email = trim($_POST["email"]);
        if (substr_count($email, "@") == 1) {
            $exploded = explode("@", $email);
            if ($exploded[0] != "" && $exploded[1] != "" && substr_count($exploded[1], ".") > 0 && ctype_alpha(substr($exploded[1], -1))) {
                $validEmail = true;
            }
        }
    
        if ($validEmail) {
            if (strlen(trim($_POST["passw"])) < 6) {
                $GLOBALS["err"] = "A jelszónak legalább 6 karakternek kell lennie";
            } else if (strtolower(trim($_POST["passw"])) == trim($_POST["passw"])) {
                $GLOBALS["err"] = "A jelszónak tartalmaznia kell legalább egy nagybetűt";
            } else if (strtoupper(trim($_POST["passw"])) == trim($_POST["passw"])) {
                $GLOBALS["err"] = "A jelszónak tartalmaznia kell legalább egy kisbetűt";
            } else if ($_POST["passw"] != $_POST["passw2"]) {
                $GLOBALS["err"] = "A jelszavak nem egyeznek meg";
            } else {
                $general = fopen("../DATA/general.txt", "r");
                $id = trim(fgets($general));
                fclose($general);
                $user = new User($id);
                $users = fopen("../DATA/users.txt", "a+");

                $user->setName($_POST["name"]);
                $user->setEmail($_POST["email"]);
                $user->setPassw($_POST["passw"]);
                $userExists = false;
                while (($line = fgets($users)) !== false) {
                    $actUser = unserialize($line);
                    if ($user->getName() == $actUser->getName()) {
                        $userExists = true;
                        $GLOBALS["err"] = "Ez a név már foglalt";
                        break;
                    } else if ($user->getEmail() == $actUser->getEmail()) {
                        $userExists = true;
                        $GLOBALS["err"] = "Ez az email cím már foglalt";
                        break;
                    }
                }
                if (!$userExists) {
                    $general = fopen("../DATA/general.txt", "w");
                    fwrite($general, $id + 1);
                    fclose($general);
                    fwrite($users, serialize($user) . "\n");
                    $GLOBALS["err"] = "Sikeres regisztráció!";
                    header("Location: Login.php");
                }
                fclose($users);
            }
        } else {
            $GLOBALS["err"] = "Hibás email";
        }
    }
}

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


    <?php
    if($GLOBALS["err"] != ""){ ?>
        <div class="errors">
            <?php echo($GLOBALS["err"]); ?>
        </div>  <?php
    }
    ?>


<?php

if(empty($_SESSION['user'])){ ?>
<form class="register" action="Register.php" method="post">
    <h1>Regisztráció</h1>
    <label><input placeholder="*Név" class="inputs" type="text" name="name" value="<?php if (isset($_POST["name"])) echo($_POST["name"]); ?>"></label><br>
    <label><input class="inputs" placeholder="*E-mail cím" type="email" name="email"  value="<?php if (isset($_POST["email"])) echo($_POST["email"]); ?>"></label><br>
    <label><input class="inputs" placeholder="*Jelszó" type="password" name="passw" ></label><br>
    <label><input class="inputs" placeholder="*Jelszó mégegyszer" type="password" name="passw2"></label><br>
    <div class="button">
        <button type="submit" name="submit">Regisztráció</button>
        <p>Már van profilod?<a href="Login.php">Bejelentkezés</a></p>
    </div>

</form> <?php
}else{ ?>
<form class="register" action="Register.php" method="post">
    <h1>Profil módosítása</h1>
    <label><input class="inputs" placeholder="*Név" value="<?php  echo $_SESSION['user']->getName(); ?>" type="text" name="name"></label><br>
    <label><input class="inputs" placeholder="*E-mail cím" value="<?php  echo $_SESSION['user']->getEmail(); ?>" type="email" name="email" ></label><br>
    <label><input class="inputs" placeholder="*Régi Jelszó" type="password" name="opassw"></label><br>
    <label><input class="inputs" placeholder="Új Jelszó" type="password" name="passw"></label><br>
    <label><input class="inputs" placeholder="Jelszó mégegyszer" type="password" name="passw2"></label><br>
    <label>Email láthatósága: <input type="checkbox" name="publicEmail" <?php if ($_SESSION["user"]->isVisibleEmail()) echo("checked"); ?>> </label>
    <h2>Téma:</h2>
    <div class="thame">

            <label><img class="radio" src="../RES/IMG/register.jpg" alt=""> <input <?php if($_SESSION["user"]->getTheme() == 0) echo("checked"); ?> type="radio" value="0" name="theme"> </label>
            <label><img class="radio" src="../RES/IMG/register2.jpg" alt=""> <input <?php if($_SESSION["user"]->getTheme() == 1) echo("checked"); ?> type="radio" value="1" name="theme"> </label>
    </div>


    <div class="button">
        <button type="submit" name="change">Módosít</button>
        <p><a href="Profile.php">Vissza</a></p>
    </div>

</form> <?php

}
?>



<script src="../JS/RegisterAnimation.js"></script>
</body>
</html>

<!--© Wellness Center Mackovic Mark (IW8RXX) , Makó Ádám Péter (PH2BC8) 2023, Szegedi Tudományegyetem-->
