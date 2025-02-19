

<footer>
    <div class="mail-box">
        <h2>Értesülj elsőként kedvezvményes ajánlatainkról!</h2>
        <form method="post">
            <input class="mail-input" value="<?php if (isset($_SESSION["user"])) {echo $_SESSION["user"]->getEmail();}?>" type="email" placeholder="Email-cím" autocomplete="off">
            <button class="button" type="button">Felíratkozom</button>
        </form>
    </div>
    <section class="footer-container">
        <div class="separation" id="footer-one">
            <h2>Balance Studio</h2>
            <p>A Balance Studioban 1986 óta nyújtunk kényelmet vendégeinknek. Időseket és fiatalokat egyaránt szeretettel várunk üdülőközpontunkban, amit több évtizedes tapasztalatunkkal kiépítettünk, folyamatosan javítottunk.</p>
        </div>
        <div class="separation ">
            <h2>Elérhetőségek</h2>
            <span><a href="https://www.google.com/maps/place/Szegedi+Tudom%C3%A1nyegyetem+Irinyi+%C3%A9p%C3%BClet/@46.246871,20.1447345,17z/data=!3m1!4b1!4m6!3m5!1s0x4744886557ac1407:0x8ef6cdceb30443a2!8m2!3d46.246871!4d20.1469232!16s%2Fg%2F1pp2tk56v" target="_blank">Szeged, Tisza Lajos krt. 103, 6725 </a></span>
            <span><a href="https://www.google.com/gmail/about/" target="_blank">balancestudio@gmail.com</a></span>
            <span><a href="#top">Telefon: 06-20-977-1577</a></span>
        </div>
        <div class="separation ">
            <h2>Nyitvatartás</h2>
            <table>
                <tr>
                    <th>Hétfő-Péntek</th>
                    <th>06:00-14:00</th>
                </tr>
                <tr>
                    <th>Szombat</th>
                    <th>08:00-22:00</th>
                </tr>
                <tr>
                    <th>Vasárnap</th>
                    <th>06:00-22:00</th>
                </tr>
            </table>
        </div>
    </section>
    <div class="social-container">
        <a href="https://www.facebook.com/" target="_blank"><img class="social" src="../RES/IMG/LOGOS/face.png" alt="facebook"></a>
        <a href="https://www.instagram.com/" target="_blank"><img class="social" src="../RES/IMG/LOGOS/insta.png" alt="insta"></a>
        <a href="https://twitter.com/" target="_blank"><img class="social" src="../RES/IMG/LOGOS/twitter.png" alt="twitter"></a>
        <a href="https://www.whatsapp.com" target="_blank"><img class="social" src="../RES/IMG/LOGOS/whats.png" alt="whats"></a>
    </div>
    <div class="copyright">
        <p>© 2023 Szegedi Tudományegyetem, Minden Jog Fenntartva!</p>
    </div>
</footer>

<div class="scroll">
    <p>Görgess</p>
    <img id="arrow" src="../RES/IMG/LOGOS/arrowdownw.png" alt="/">
</div>

<div class="to-top">
    <a href="#top"> <img src="../RES/IMG/LOGOS/totop.png" id="to-top" alt="/"> </a>
</div>

<script src="../JS/Animation.js"></script>

</body>
</html>