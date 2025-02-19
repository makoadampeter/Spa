<?php
    require_once("../CLASS/Comment.php");
    require_once("../CLASS/User.php");

    session_start();
    $GLOBALS["err"] = "";

    if (array_key_exists("send", $_POST)) {
        if (!isset($_SESSION["user"])) $GLOBALS["err"] = "Hozzászólás küldéséhez be kell jelentkezni";
        else {
            if ($_POST["message"] != "") {
                $comment = new Comment($_SESSION["user"]->getName(), $_SESSION["user"]->getId(), $_POST["message"], new DateTime());
                $comments = fopen("../DATA/comments.txt", "a");
                fwrite($comments, serialize($comment) . "\n");
                fclose($comments);
                header("Location: {$_SERVER['REQUEST_URI']}"); // Törli a $_POST["message"]-t így frissítéskor nem küldi újra az üzenetet
            } else {
                $GLOBALS["err"] = "Írd be az üzenetet";
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Balance Studio</title>
        <link rel="stylesheet" href="../CSS/Chat.css">
        <link rel="icon" type="image/png" href="../RES/IMG/LOGOS/logow.png">
        <style>
            body {
                background-image: url("<?php if(isset($_SESSION["user"])) {if ($_SESSION["user"]->getTheme() == 0) {echo("../RES/IMG/register.jpg");} else {echo("../RES/IMG/register2.jpg");}} else {echo("../RES/IMG/register.jpg");} ?>");
            }
        </style>
    </head>
    <body>

        <div class="home-page">
        <a href="index2.php">Kezdőoldal</a>
        </div>


        <div class="comments">
            <?php
            $comments = fopen("../DATA/comments.txt", "r");
            while (($line = fgets($comments)) !== false) {
                $actComment = unserialize($line);
                $actOp = $actComment->getOp();
                $actId = $actComment->getOpId();
                $actText = $actComment->getText();
                $actDate = $actComment->getDate()->format('Y-m-d H:i:s');
                $userExists = false;
                $users = fopen("../DATA/users.txt", "r");
                while (($line = fgets($users)) !== false) {
                    $actUser = unserialize($line);
                    if ($actId == $actUser->getId()) $userExists = true;
                }
                fclose($users);
                echo "<div class='chat'>";
                if ($userExists) {
                    if (isset($_SESSION["user"]) && $actOp == $_SESSION["user"]->getName()) {
                        echo("<a href='Profile.php' class='username'>$actOp</a>");
                    } else {
                        echo("<a href='Profile2.php?owner=$actId' class='username'>$actOp</a>");
                    }
                } else {
                    echo("<span class='username'>Törölt felhasználó</span>");
                }
                echo("
                <p class='text'>$actText</p><br>
                <span class='date'>$actDate</span>
            </div>
            ");
            }
            fclose($comments);
            ?>
            <form class="chat form" action="Chat.php" method="post">
                <label><input  placeholder="Üzenet küldése" type="text" name="message" ></label><br>
                <div class="button">
                    <button type="submit" name="send">Elküld</button>
                </div>
            </form>
        </div>



    </body>
</html>
