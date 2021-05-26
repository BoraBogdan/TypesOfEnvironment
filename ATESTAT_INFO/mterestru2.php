<?php
  session_start();
 ?>

<html>
<head>

  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="icon.ico">
  <title>Medii-De-Viață | M-TERESTRU</title>
</head>
<body onload="myMove()">
    <ul class="navigation" >
	    <li class="nav-item"><a href="index.php">Acasă</a></li>
	    <li class="nav-item"><a href="maerian.php">Mediul Aerian</a></li>
	    <li class="nav-item"><a href="mterestru.php">Mediul Terestru</a></li>
      <li class="nav-item"><a href="msubpamant.php">Mediul Subteran</a></li>
	  	<li class="nav-item"><a href="macvatic.php">Mediul Acvatic</a></li>
	    <li class="nav-item"><a href="galerie.php">Galerie</a></li>
      <?php
      if(!isset($_SESSION['user'])){
        echo '
      <li class="nav-item"><a href="cont/login.php">Autentificare</a></li>
      <li class="nav-item"><a href="cont/register.php">Creare cont</a></li>
      ';
      }
      ?>
      <li class="nav-item"><a href="cont/test.php">Test</a></li>
    </ul>

  <input type="checkbox" id="nav-trigger" class="nav-trigger" />
  <label for="nav-trigger"></label>

<div class="site-wrap">
  <?php
  if(isset($_SESSION['user'])){
  echo '<div class = "buton"><form action = "cont/logout.php"> '
        .$_SESSION['prenume'].', '.'<input type = "submit" value = "Deconectare">
        </form></div>
        ';
} else if(!isset($_SESSION['nume'])){
  echo '<p style="float: right; font-weight: bold;">Nu sunteți autentificat</p>';
}
   ?>
   <br><br>
   <img src="margine.png" class = "margine-sus" id = "margineSus">
   <div class="bg">
     <a href="mterestru.php"><img src="prev.png" title="Prev" class="prev"></a>
     <p><u>Mediul Terestru</u></p>
<div id="reptile"><b><u>Tipuri de mers:</u></b></div>
<div id="text">
Unele mamifere terestre calcă pe toată suprafaţa tălpii. Acest tip de mers plantigrad este greoi. Mersul plantigrad este cel mai primitiv. Din el au derivat diferite tipuri de locomoţie specializată, ca: locomoţia prin salt, locomoţia arboricolă şi cea bipedă, etc.
<br><br>
Mamiferele bune alergătoare și săritoare calcă numai pe falangele degetelor, talpa fiind ridicată, este tipul digitigrade. Mamiferele care se încadrează în această categorie sunt: porcul, oaia, calul, vaca, etc.
<br><br>
Cele mai bune alegătoare si săritaore calcă numai pe ultimele falange ale degetelor, îmbrăcate în copite, este tipul unguligrade. Unele unguligrade calcă pe 4 și 5 degete (proboscidieni), altele pe 3 degete (rinocerii); o parte pe două degete, iar altă parte pe un singur deget (ecvide).
</div>


</div>
<img src="margine.png" class = "margine-jos" id = "margineJos">

<script>
function myMove() {

  var elem = document.getElementById("margineSus");
  var elem2 = document.getElementById("margineJos");
  var pos = 110;
  var pos2 = 250;
  var pos3 = 100;
  var pos4 = 255;
  var id = setInterval(frame, 5);
  function frame() {
    if (pos == 50) {
      clearInterval(id);
    } else {
      pos--;
      elem.style.top = pos + "px";

    }

    if(pos2 == 220){
      clearInterval(id);
    } else {
      pos2--;
      elem.style.left = pos2 + "px";
    }

   if(pos3 == 70){
     clearInterval(id);
   } else {
     pos3--;
     elem2.style.bottom = pos3 + "px";
   }

   if(pos4 == 50){
     clearInterval(id);
   } else {
     pos4--;
     elem2.style.right = pos4 + "px";
   }


  }
  elem.style.opacity = 1;
document.getElementById("margineSus").style.transition = "all 2s";
  elem2.style.opacity = 1;
 document.getElementById("margineJos").style.transition = "all 2s";
}
</script>


</body>
</html>
