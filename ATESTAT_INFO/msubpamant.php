<?php
  session_start();
 ?>

<html>
<head>

  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="icon.ico">
  <title>Medii-De-Viață | M-SUBTERAN</title>
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
     <p><u>Mediul Subteran</u></p>
      <div id="text">
        Dintre toate ecositemele naturale, ecositemul subteran este unul dintre cele mai vulnerabile.<br><br>
        Datorită constantei ridicată a factorilor abiotici și a specializării ridicate a organismelor cavernicole. De aceea orice modificare a nunui factor abiotic atrage după sine schimbări majore în cadrul realităților cu alți factori biotici si abiotici. <br><br>
        Mediul subteran reprezintă un adăpost temporar sau permanent a unei faune nu prea variate.<!-- cu origini geografice diferite o parte din aceste animale fiind troglofile, troglobionte strict adoptate mediului subteran. Dintre animalele cavernicole terestre chiropterele reprezintă una din grupele reprezentative pesterii, atăt datorită poziției ocupate în regnul animal și al numărului mare de indivizi, cât și impactul aspra peșterii, cum este de exemplu cel indus prin guanul și procesele sale de mineralogeneză. Întrucat chiropterele sunt animalele strict protejate, se impune conservarea populațiilor importante și a mediului lor de viață. -->
      </div>

      <img src="cartita.png" alt="Cartita" style = "height: 35%; margin-left: 400px; transform: rotate(-30deg);">

   </div>
   <img src="margine.png" class = "margine-jos" id = "margineJos">

</div>

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
