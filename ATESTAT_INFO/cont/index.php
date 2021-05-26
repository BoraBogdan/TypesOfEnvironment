<?php
  session_start();
 ?>

<html>
<head>
  <link rel="shortcut icon" href="icon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Medii-De-Viata</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
</head>
<body>

  <div class="menu">
    <div class="container">
      <center><a href="../index.php"><img src="logoo.png" class = "img" alt="logo" ></a></center>
      <ul>
        <li><a href = "login.php">LOGIN</a></li>
        <li><a href = "../index.php">ACASA</a></li>
        <?php
          /*if(!isset($_SESSION['user'])){
            echo '
            <li><a href = "register.php">REGISTER</a></li>
                ';
          }*/
         ?>
      <!--  <li><a href = "test.php">TEST</a></li> -->

        <li>
        <?php
        if(isset($_SESSION['user'])){
        echo '<div class = "buton"><form action = "logout.php"> '
              .$_SESSION['user'].' '.'<input type = "submit" value = "Log Out">
              </form></div>
              ';
      }
         ?>
       </li>
      </ul>

    </div>
  </div>

  <div class="fundal">
    <?php
      if(isset($_GET['info']) && $_GET['info'] == "cont"){
        echo '<marquee scrollamount = "25"><p style = "color:red; text-align: center; font-size: 50px;">Pentru a completa "Testul" veti avea nevoie de cont.</p></marquee>';
      }
     ?>
    <div class="centru">


      <h1>Welcome aboard!</h1>
      <h2><div id="continut">
        The National Aeronautics and Space Administration (NASA) is an independent agency of the United States Federal Government responsible for the civilian space program, as well as aeronautics and aerospace research.
NASA was established in 1958, succeeding the National Advisory Committee for Aeronautics (NACA). The new agency was to have a distinctly civilian orientation, encouraging peaceful applications in space science. Since its establishment, most US space exploration efforts have been led by NASA, including the Apollo Moon landing missions, the Skylab space station, and later the Space Shuttle. NASA is supporting the International Space Station and is overseeing the development of the Orion Multi-Purpose Crew Vehicle, the Space Launch System and Commercial Crew vehicles. The agency is also responsible for the Launch Services Program which provides oversight of launch operations and countdown management for unmanned NASA launches.
NASA science is focused on better understanding Earth through the Earth Observing System. advancing heliophysics through the efforts of the Science Mission Directorate's Heliophysics Research Program. exploring bodies throughout the Solar System with advanced robotic spacecraft missions such as New Horizons. and researching astrophysics topics, such as the Big Bang, through the Great Observatories and associated programs
      </div></h2>
    </div>
  </div>



</body>
</html>
