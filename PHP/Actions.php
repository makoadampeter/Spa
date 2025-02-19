<?php

require_once("../CLASS/User.php");


session_start();

if (array_key_exists("logout", $_POST)) {
    session_unset();
    session_destroy();
    header("Location: index2.php");
}

if (array_key_exists("delete", $_POST)) {
    delete();
    session_unset();
    session_destroy();
    header("Location: Login.php");
}

if (array_key_exists("change", $_POST)) {
    if (password_verify($_POST["opassw"], $_SESSION["user"]->getPassw())){
        if (trim($_POST["name"]) == "" && $_POST["email"] == "" && $_POST["passw"] == "") {
            $GLOBALS["err"] = "Add meg a változtatni kívánt adatot";
        } else {
            if ($_POST["passw"] != "") {
                if (strlen(trim($_POST["passw"])) < 6){
                    $GLOBALS["err"] = "A jelszónak legalább 6 karakternek kell lennie";
                } else if (strtolower(trim($_POST["passw"])) == trim($_POST["passw"])) {
                    $GLOBALS["err"] = "A jelszónak tartalmaznia kell legalább egy nagybetűt";
                } else if (strtoupper(trim($_POST["passw"])) == trim($_POST["passw"])) {
                    $GLOBALS["err"] = "A jelszónak tartalmaznia kell legalább egy kisbetűt";
                } else if ($_POST["passw"] != $_POST["passw2"]) {
                    $GLOBALS["err"] = "A jelszavak nem egyeznek meg";
                } else change();
            } else change();
        }
    } else {
        $GLOBALS["err"] = "Helytelen jelszó";
    }
}

// A jelenleg bejelentkezett felhasználót törli a users.txt-ből
function delete() {
    $usersArray = file("../DATA/users.txt");

    $users = fopen("../DATA/users.txt", "w");

    foreach ($usersArray as $actUser) {
        if (strcmp($actUser, serialize($_SESSION["user"]) . "\n") != 0) {
            fwrite($users, $actUser);
        }
    }

    fclose($users);
}

function change() {
    $users = fopen("../DATA/users.txt", "a+");
    $user = $_SESSION["user"];

    delete();

    $userExists = false;

    $validEmail = false;

    $email = trim($_POST["email"]);
    if ($email == "") {
        $validEmail = true;
    } else {
        if (substr_count($email, "@") == 1) {
            $exploded = explode("@", $email);
            if ($exploded[0] != "" && $exploded[1] != "" && substr_count($exploded[1], ".") > 0 && ctype_alpha(substr($exploded[1], -1))) {
                $validEmail = true;
            }
        }
    }

    if ($validEmail) {
        while (($line = fgets($users)) !== false) {
            $actUser = unserialize($line);
            if ($_POST["name"] == $actUser->getName()) {
                $userExists = true;
                $GLOBALS["err"] = "Ez a név már foglalt";
                break;
            } else if ($_POST["email"] == $actUser->getEmail()) {
                $userExists = true;
                $GLOBALS["err"] = "Ez az email cím már foglalt";
                break;
            }
        }

        if (!$userExists) {

            if ($_POST["name"] != "") {
                $user->setName($_POST["name"]);
            }
            if ($_POST["email"] != "") {
                $user->setEmail($_POST["email"]);
            }
            if ($_POST["passw"] != "") {
                $user->setPassw($_POST["passw"]);
            }
            if ($_POST["theme"] == "0") {
                $user->setTheme(0);
            } else {
                $user->setTheme(1);
            }
            $user->setVisibleEmail(isset($_POST["publicEmail"]));

            $GLOBALS["err"] = "Sikeres módosítás!";
        }
    } else {
        $GLOBALS["err"] = "Hibás email cím";
    }

    fwrite($users, serialize($user) . "\n");

    fclose($users);
}
?>
