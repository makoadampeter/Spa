

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Balance Studio</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/Global.css">
    <link rel="icon" type="image/png" href="../RES/IMG/LOGOS/logow.png">
</head>



<?php
include_once "header.php";
?>


<section class="advice">

    <div class="advice-container">

        <div class="advice-text">
            <div id="rotated-text">
                MERT MEGÉRDEMLED
            </div>
            <div id="advice-else">
                <h1>Rólunk</h1>
                <p> A Balance Studioban 1986 óta nyújtunk kényelmet vendégeinknek. Időseket és fiatalokat egyaránt szeretettel várunk üdülőközpontunkban, amit több évtizedes tapasztalatunkkal kiépítettünk, folyamatosan javítottunk. A szolgáltatásainkat gyakran bővítjük, így az is talál újdonságot, aki nem először látogat minket. Örömmel várunk titeket:</p>
                <div id="lista">
                    <ul>
                        <li>Wellness szolgáltatásainkkal</li>
                        <li>Szaunáinkkal</li>
                        <li>Medencéinkkel</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="advice-image-container">
        <div class="img-shadow">
            <img class="advice-pic" src="../RES/IMG/mainmodell.jpeg" alt="advice">
        </div>
    </div>
</section>

<div class="fix-image-container">
    <div class="deep-img">
    </div>
    <div class="deep-text">
        <h2>Kényeztetés egy új szinten!</h2>
    </div>
    <div class="deep-text">
        <p>Jakuzzi medencéink, a masszázs és az akupunktúra időponthoz kötött, itt tudnak időpontot folgalni</p>
    </div>
    <form method="post">
        <button class = "button" type="submit" value="Időpontot">Időpontot</button>
    </form>
</div>

<section class="review">
    <div class="rev-title">Ti mondtátok</div>
    <div><p>Ezeket az értékeléseket kaptuk kedves látogatóinktól</p></div>
    <div class="review-table-container">
        <div class="review-table">
            <div class="image">
                <img class="profpics" src="../RES/IMG/1prof.jpeg" alt="profilepic">
                <div class="proftext">Nagyon szép a fürdő.Télen nyáron egyaránt sok medence várja a pihenni vágyókat.</div>
            </div>
            <div class="textname">
                <div class="profname">
                    Gulyás Krisztián
                    <img class="stars" src="../RES/IMG/LOGOS/5star.png" alt="stars">
                </div>
            </div>
        </div>


        <div class="review-table">
            <div class="image">
                <img class="profpics" src="../RES/IMG/2prof.jpeg" alt="profilepic">
                <div class="proftext">Férjemmel először, de nem utoljára jártunk itt. Nagyon tetszett minden. Tisztaság kiváló. Segítőkész személyzet!</div>

            </div>
            <div class="textname">
                <div class="profname">
                    Török Éva
                    <img class="stars" src="../RES/IMG/LOGOS/5star.png" alt="stars">
                </div>
            </div>
        </div>
        <div class="review-table">
            <div class="image">
                <img class="profpics" src="../RES/IMG/3prof.jpeg" alt="profilepic">
                <div class="proftext">Nagyon attraktív ez a gyógyfürdő. Szép, tiszta, rendezett. Sok medence, minden ami hozzá tartozik (szauna, masszázs)
                    Csak ajánlani tudom mindenkinek!</div>
            </div>
            <div class="textname">
                <div class="profname">
                    Kovács István
                    <img class="stars" src="../RES/IMG/LOGOS/5star.png" alt="stars">
                </div>
            </div>
        </div>
    </div>

    <!--            <div class="review-pic-container">-->
    <!--                <div class="img-shadow">-->
    <!--                    <img class="review-img" src="../RES/IMG/hand.jpg" alt="kéz">-->
    <!--                </div>-->
    <!--                <div class="img-shadow">-->
    <!--                    <img class="review-img" src="../RES/IMG/hand2.jpg" alt="kéz">-->
    <!--                </div>-->
    <!--            </div>-->
</section>


<?php
include_once "footer.php";
?>




