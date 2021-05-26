<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: index.php?info=cont");
  }
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

      <center><a href="index.php"><img src="logoo.png" class = "img" alt="logo" ></a></center>
      <ul>
        <li><a href = "login.php">LOGIN</a></li>
        <li><a href = "index.php">ACASA</a></li>
        <?php
          if(!isset($_SESSION['user'])){
            echo '
            <li><a href = "register.php">REGISTER</a></li>
                ';
          }
         ?>


        <li><a href = "test.php">TEST</a></li>

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


  <div class="fundal1">
    <div class="centru1">
      <h1>Welcome aboard!</h1>

    </div>
  </div>

</body>
</html>
