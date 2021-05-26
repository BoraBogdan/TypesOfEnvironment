<?php
  session_start();
 ?>
<html>
<head>

  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="icon.ico">
  <title>Medii-De-Viață | M-AERIAN</title>
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
     <a href="maerian.php"><img src="prev.png" title="Prev" class="prev"></a>
     <p><u>Mediul Aerian</u></p>
     <div id="text">
Densitatea mică a aerului condiţionează o peresiune relativ joasă pe uscat. <br><br>
În normă ea este egală cu 760 mm col de mercur. <br><br>
Cu mărirea înălţimii deasupra nivelului mării presiunea se micşorează.<br><br>
 <!--La înălţimea de 5800 m ea constituie doar jumătate din normă. Presiunea joasă poate limita răspunderea speciilor în munţi. Pentru majoritatea verebratelor limita superioară a vieţii este de circa 6000 m. Micşorarea presiunii implică şi reducerea asigurării cu oxigen şi deshidratarea animalelor în urma măririi frecvenţei respiraţiei. -->
<br><img src="bird.png" title="Pasare" id = "bird">
     </div>
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
