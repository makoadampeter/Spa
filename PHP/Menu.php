<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Balance Studio</title>
  <link rel="stylesheet" href="../CSS/Global.css">
  <link rel="icon" type="image/png" href="../RES/IMG/LOGOS/logow.png">
  <link rel="stylesheet" href="../CSS/Menu.css">
</head>


<?php
include_once "header.php";
?>

<main>
  <img class="patern" src="../RES/IMG/LOGOS/paterntop.png" alt="patern">
  <div class="menu-container">
    <img class="side-pics" src="../RES/IMG/food1.jpg" alt="3">
    <div class="etlap">
      <table class="etlap-table">
        <caption>Étlap</caption>
        <colgroup>
          <col class="col-etel">
          <col class="col-ar">
          <col class="col-allergenek">
        </colgroup>
        <thead>
        <tr class="primary-header">
          <th id="levesek" colspan="3">
            Levesek
          </th>
        </tr>
        <tr class="secondary-header">
          <th class="etel" id="etel1" headers="levesek">Étel</th>
          <th class="ar" id="ar1" headers="levesek">Ár</th>
          <th class="allergenek" id="allergenek1" headers="levesek">Allergének</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td headers="levesek etel1">Gulyás leves</td>
          <td headers="levesek ar1">1 199 Ft</td>
          <td headers="levesek allergenek1">glutén, tej, tojás</td>
        </tr>
        <tr>
          <td headers="levesek etel1">Tárkonyos csirkeragu leves</td>
          <td headers="levesek ar1">1 099 Ft</td>
          <td headers="levesek allergenek1">glutén, tej, zeller</td>
        </tr>
        <tr>
          <td headers="levesek etel1">Májgaluska leves</td>
          <td headers="levesek ar1">1 199 Ft</td>
          <td headers="levesek allergenek1">glutén, tojás, zeller</td>
        </tr>
        <tr>
          <td headers="levesek etel1">Bableves</td>
          <td headers="levesek ar1">1 199 Ft</td>
          <td headers="levesek allergenek1">glutén, zeller</td>
        </tr>
        </tbody>
      </table>
      <table class="etlap-table">
        <colgroup>
          <col class="col-etel">
          <col class="col-ar">
          <col class="col-allergenek">
        </colgroup>
        <thead>
        <tr class="primary-header">
          <th id="foetelek" colspan="3">
            Főételek
          </th>
        </tr>
        <tr class="secondary-header">
          <th class="etel" id="etel2" headers="foetelek">Étel</th>
          <th class="ar" id="ar2" headers="foetelek">Ár</th>
          <th class="allergenek" id="allergenek2" headers="foetelek">Allergének</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td headers="foetelek etel2">Rántott csirkecomb rizzsel</td>
          <td headers="foetelek ar2">1 599 Ft</td>
          <td headers="foetelek allergenek2">glutén, tej, tojás</td>
        </tr>
        <tr>
          <td headers="foetelek etel2">Rántott csirkecomnb sült hasábburgonyával</td>
          <td headers="foetelek ar2">1 499 Ft</td>
          <td headers="foetelek allergenek2">glutén, tej, tojás</td>
        </tr>
        <tr>
          <td headers="foetelek etel2">Rántott harcsa rizzsel</td>
          <td headers="foetelek ar2">1 749 Ft</td>
          <td headers="foetelek allergenek2">glutén, tej, tojás, hal</td>
        </tr>
        <tr>
          <td headers="foetelek etel2">Rántott harcsa sült hasábburgonyával</td>
          <td headers="foetelek ar2">1 699 Ft</td>
          <td headers="foetelek allergenek2">glutén, tej, tojás, hal</td>
        </tr>
        <tr>
          <td headers="foetelek etel2">Carbonara spagetti</td>
          <td headers="foetelek ar2">1 449 Ft</td>
          <td headers="foetelek allergenek2">glutén, tej</td>
        </tr>
        <tr>
          <td headers="foetelek etel2">Milánói spagetti</td>
          <td headers="foetelek ar2">1 549 Ft</td>
          <td headers="foetelek allergenek2">glutén, tej, tojás</td>
        </tr>
        </tbody>
      </table>
      <table class="etlap-table">
        <colgroup>
          <col class="col-etel">
          <col class="col-ar">
          <col class="col-allergenek">
        </colgroup>
        <thead>
        <tr class="primary-header">
          <th id="salatak" colspan="3">
            Saláták
          </th>
        </tr>
        <tr class="secondary-header">
          <th class="etel" id="etel3" headers="salatak">Étel</th>
          <th class="ar" id="ar3" headers="salatak">Ár</th>
          <th class="allergenek" id="allergenek3" headers="salatak">Allergének</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td headers="salatak etel3">Görög saláta</td>
          <td headers="salatak ar3">1 799 Ft</td>
          <td headers="salatak allergenek3">tej</td>
        </tr>
        <tr>
          <td headers="salatak etel3">Cézár saláta</td>
          <td headers="salatak ar3">1 649 Ft</td>
          <td headers="salatak allergenek3">tej</td>
        </tr>
        <tr>
          <td headers="salatak etel3">Franciasaláta</td>
          <td headers="salatak ar3">1 749 Ft</td>
          <td headers="salatak allergenek3">tej</td>
        </tr>
        </tbody>
      </table>
      <table class="etlap-table">
        <colgroup>
          <col class="col-etel">
          <col class="col-ar">
          <col class="col-allergenek">
        </colgroup>
        <thead>
        <tr class="primary-header">
          <th id="desszertek" colspan="3">
            Desszertek
          </th>
        </tr>
        <tr class="secondary-header">
          <th class="etel" id="etel4" headers="desszertek">Étel</th>
          <th class="ar" id="ar4" headers="desszertek">Ár</th>
          <th class="allergenek" id="allergenek4" headers="desszertek">Allergének</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td headers="desszertek etel4">Tiramisu</td>
          <td headers="desszertek ar4">1 199 Ft</td>
          <td headers="desszertek allergenek4">glutén, tej</td>
        </tr>
        <tr>
          <td headers="desszertek etel4">Meggyes pite</td>
          <td headers="desszertek ar4">1 099 Ft</td>
          <td headers="desszertek allergenek4">glutén</td>
        </tr>
        <tr>
          <td headers="desszertek etel4">Somlói galuska</td>
          <td headers="desszertek ar4">1 199 Ft</td>
          <td headers="desszertek allergenek4">tej, dió</td>
        </tr>
        </tbody>
      </table>
    </div>
    <img class="side-pics" src="../RES/IMG/food2.jpg" alt="2">
  </div>

  <img class="paternb" src="../RES/IMG/LOGOS/paterntop.png" alt="patern">
</main>


<?php
include_once "footer.php";
?>
<!--© Wellness Center Mackovic Mark (IW8RXX) , Makó Ádám Péter (PH2BC8) 2023, Szegedi Tudományegyetem-->