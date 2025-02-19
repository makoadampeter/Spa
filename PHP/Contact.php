<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Balance Studio</title>
  <link rel="stylesheet" href="../CSS/Global.css">
  <link rel="icon" type="image/png" href="../RES/IMG/LOGOS/logow.png">
  <link rel="stylesheet" href="../CSS/Contact.css">
</head>


<?php
include_once "header.php";
?>


<main>
  <div class="image">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2759.168850033667!2d20.1469232!3d46.246871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4744886557ac1407%3A0x8ef6cdceb30443a2!2sSzegedi%20Tudom%C3%A1nyegyetem%20Irinyi%20%C3%A9p%C3%BClet!5e0!3m2!1shu!2shu!4v1679153968365!5m2!1shu!2shu" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="contact">
    <div class="contact-text">
      <div class="title">
        <h1>Elérhetőségeink:</h1>
      </div>
      <ul>
        <li>Cím: <a href="https://www.google.com/maps/place/Szegedi+Tudom%C3%A1nyegyetem+Irinyi+%C3%A9p%C3%BClet/@46.246871,20.1447345,17z/data=!3m1!4b1!4m6!3m5!1s0x4744886557ac1407:0x8ef6cdceb30443a2!8m2!3d46.246871!4d20.1469232!16s%2Fg%2F1pp2tk56v" target="_blank">Szeged, Tisza Lajos krt. 103, 6725 </a></li>
        <li>E-mail: <a href="https://www.google.com/gmail/about/" target="_blank">balancestudio@gmail.com</a></li>
        <li>Telefon: 06-20-977-1577</li>
      </ul>
      <div class="open">
        <h1>Nyitvatartás:</h1>
        <div class="days">
          <ul>
            <li>Hétfő-Csütörtök:</li>
            <li>Péntek-Szombat:</li>
            <li>Vasárnap:</li>
          </ul>
        </div>
        <div class="time">
          <ul>
            <li>6:00 - 24:00</li>
            <li>10:00 - 24:00</li>
            <li>10:00 - 20:00</li>
          </ul>
        </div>
      </div>

      <div class="closed">
        <p>A következő napokon zárva tartunk:</p>
        <ul>
          <li>Január 1.</li>
          <li>Március 15.</li>
          <li>Május 1.</li>
          <li>December 24.</li>
        </ul>
      </div>
    </div>
    <div class="contact-formsheet" id="message">
      <div class="title"><h1>Lépj kapcsolatba velünk</h1></div>
      <form class="contact-form" method="POST">
        <div class="form-top">
          <div class="form-left">
            <div class="input">
              <label for="nev">Név*</label><br/>
              <input class="text-input" oninput="setCustomValidity('')" oninvalid="setCustomValidity('Kérlek add meg a neved!')" value=" <?php if (isset($_SESSION["user"])) {echo($_SESSION['user']->getName());}  ?>" name="nev" type="text" id="nev" title="Kötelező mező!" required/>
            </div>
            <div class="input">
              <label for="telefon">Telefonszám</label><br/>
              <input class="text-input" name="telefon" type="tel" id="telefon" placeholder="06 01 234 5678"/>
            </div>
          </div>
          <div class="form-right">
            <div class="input">
              <label for="email">E-mail cím*</label><br/>
              <input class="text-input" oninput="setCustomValidity('')" oninvalid="setCustomValidity('Kérlek add meg az e-mail címedet!')" value=" <?php if (isset($_SESSION["user"])) {echo($_SESSION['user']->getEmail());}  ?>" name="email" type="email" id="email" title="Kötelező mező!" required/>
            </div>
            <div class="input">
              <label for="targy">Tárgy*</label><br/>
              <select class="text-input" name="targy" id="targy" required>
                <option value="" selected>Válassz</option>
                <option value="kerdes">Kérdés a Balance Studioról</option>
                <option value="elvesztett">Elvesztett tárgyak</option>
                <option value="foglalas">Jakuzzi foglalás</option>
                <option value="egyeb">Egyéb</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-bottom">
          <div class="input">
            <label for="uzenet">Üzenet*</label><br/>
            <textarea class="text-input" oninput="setCustomValidity('')" oninvalid="setCustomValidity('Kérlek írj be egy üzenetet!')" name="uzenet" id="uzenet" title="Kötelező mező!" placeholder="Írd ide az üzenetet!" autocomplete="off" maxlength="1000" rows="5" required></textarea>
          </div>
        </div>
        <div class="buttons">
          <button class="button" type="submit" name="submit-button">Küldés</button>
          <button class="button" type="reset" name="reset-button">Törlés</button>
        </div>
      </form>
    </div>
  </div>

</main>

<?php
include_once "footer.php";
?>

<!--© Wellness Center Mackovic Mark (IW8RXX) , Makó Ádám Péter (PH2BC8) 2023, Szegedi Tudományegyetem-->


