<?php
  session_start();
 ?>

<html>
<head>

  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="icon.ico">
  <title>Medii-De-Viață | GALERIE</title>
</head>
<body>
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
    <div class="fundal">



				<!-- Start VisualLightBox.com HEAD section -->
		<link rel="stylesheet" href="index_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="index_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
<script src="index_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="index_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
		<!-- End VisualLightBox.com HEAD section -->


		<!-- Start VisualLightBox.com BODY section id=1 -->
		<center>
	<div id="vlightbox1">
	<a class="vlightbox1" href="index_files/vlb_images1/bivol.jpg" title="Bivol"><img src="index_files/vlb_thumbnails1/bivol.jpg" alt="Bivol"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/caine.jpg" title="Câine"><img src="index_files/vlb_thumbnails1/caine.jpg" alt="caine"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/babuin.jpg" title="Babuin"><img src="index_files/vlb_thumbnails1/babuin.jpg" alt="babuin"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/cal.jpg" title="Cal"><img src="index_files/vlb_thumbnails1/cal.jpg" alt="cal"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/cameleon.jpg" title="Cameleon"><img src="index_files/vlb_thumbnails1/cameleon.jpg" alt="cameleon"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/cangur.jpg" title="Cangur"><img src="index_files/vlb_thumbnails1/cangur.jpg" alt="cangur"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/capra.jpg" title="Capră"><img src="index_files/vlb_thumbnails1/capra.jpg" alt="capra"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/cartita.jpg" title="Cârtiță"><img src="index_files/vlb_thumbnails1/cartita.jpg" alt="cartita"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/elefant.jpg" title="Elefant"><img src="index_files/vlb_thumbnails1/elefant.jpg" alt="elefant"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/gaina.jpg" title="Găină"><img src="index_files/vlb_thumbnails1/gaina.jpg" alt="gaina"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/girafa.jpg" title="Girafă"><img src="index_files/vlb_thumbnails1/girafa.jpg" alt="girafa"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/gorila.jpg" title="Gorilă"><img src="index_files/vlb_thumbnails1/gorila.jpg" alt="gorila"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/iepure.jpg" title="Iepure"><img src="index_files/vlb_thumbnails1/iepure.jpg" alt="iepure"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/koala.jpg" title="Koala"><img src="index_files/vlb_thumbnails1/koala.jpg" alt="koala"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/leu.jpg" title="Leu"><img src="index_files/vlb_thumbnails1/leu.jpg" alt="leu"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/oaie.jpg" title="Oaie"><img src="index_files/vlb_thumbnails1/oaie.jpg" alt="oaie"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/pisica.jpg" title="Pisică"><img src="index_files/vlb_thumbnails1/pisica.jpg" alt="pisica"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/porc.jpg" title="Porc"><img src="index_files/vlb_thumbnails1/porc.jpg" alt="porc"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/trigu.jpg" title="Tigru"><img src="index_files/vlb_thumbnails1/trigu.jpg" alt="trigu"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/urs.jpg" title="Urs"><img src="index_files/vlb_thumbnails1/urs.jpg" alt="urs"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/vaca.jpg" title="Vacă"><img src="index_files/vlb_thumbnails1/vaca.jpg" alt="vaca"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/zebra.jpg" title="Zebră"><img src="index_files/vlb_thumbnails1/zebra.jpg" alt="zebra"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/barza.jpg" title="Barza"><img src="index_files/vlb_thumbnails1/barza.jpg" alt="barza"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/cioara.jpg" title="Cioară"><img src="index_files/vlb_thumbnails1/cioara.jpg" alt="cioara"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/corb.jpg" title="Corb"><img src="index_files/vlb_thumbnails1/corb.jpg" alt="corb"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/gugustiuc.jpg" title="Guguștiuc"><img src="index_files/vlb_thumbnails1/gugustiuc.jpg" alt="gugustiuc"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/randunica.jpg" title="Rândunică"><img src="index_files/vlb_thumbnails1/randunica.jpg" alt="randunica"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/soim.jpg" title="Șoim"><img src="index_files/vlb_thumbnails1/soim.jpg" alt="soim"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/uliu.jpg" title="Uliu"><img src="index_files/vlb_thumbnails1/uliu.jpg" alt="uliu"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/vrabie.jpg" title="Vrabie"><img src="index_files/vlb_thumbnails1/vrabie.jpg" alt="vrabie"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/vultur.jpg" title="Vultur"><img src="index_files/vlb_thumbnails1/vultur.jpg" alt="vultur"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/balena.jpg" title="Orcă"><img src="index_files/vlb_thumbnails1/balena.jpg" alt="balena"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/balena1.jpg" title=""><img src="index_files/vlb_thumbnails1/balena1.jpg" alt="balena1"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/balena2.jpg" title=""><img src="index_files/vlb_thumbnails1/balena2.jpg" alt="balena2"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/balena3.jpg" title=""><img src="index_files/vlb_thumbnails1/balena3.jpg" alt="balena3"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/biban.jpg" title="Biban"><img src="index_files/vlb_thumbnails1/biban.jpg" alt="biban"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/broasca.jpg" title="Broască"><img src="index_files/vlb_thumbnails1/broasca.jpg" alt="broasca"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/calutmare.jpg" title="Caluț de mare"><img src="index_files/vlb_thumbnails1/calutmare.jpg" alt="calutmare"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/casalot.jpg" title="Cașalot"><img src="index_files/vlb_thumbnails1/casalot.jpg" alt="casalot"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/delfin.jpg" title="Delfin"><img src="index_files/vlb_thumbnails1/delfin.jpg" alt="delfin"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/foca.jpg" title="Focă"><img src="index_files/vlb_thumbnails1/foca.jpg" alt="foca"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/stiuca.jpg" title="Știucă"><img src="index_files/vlb_thumbnails1/stiuca.jpg" alt="stiuca"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/testoasa.jpg" title="Țestoasă"><img src="index_files/vlb_thumbnails1/testoasa.jpg" alt="testoasa"/></a>

	</div>
	<script src="index_files/vlb_engine/thumbscript1.js" type="text/javascript"></script>
	<script src="index_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
	<!-- End VisualLightBox.com BODY section -->


</div>
</div>


</body>
</html>
