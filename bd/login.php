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
  </div>

  <div class="fundal1">
    <div class="centru1">
      <div id="continut">

        <h1>Bine ati venit!</h1>

        <form action="log.php" method="POST">
            <input type="text" name="user" placeholder="Username" title="Introduceti username-ul" required><br>
            <div class="log">
              <input type="password" name="parola" id = "pwd" placeholder="Parola" title="Introduceti parola" required><br>
                <button type="button" id = "eye" class="buton1" onclick="changeImage()">
                <img src="ochi.png" alt="eye" id="ochi">
            </div>
            <input type="submit"  value="Log In" title="Log In">
        </form>
        <?php
        if(isset($_GET['info']) && $_GET['info'] == 'gresit'){
          echo '<p style = "color: red">Ceva nu este bine!</p>';
        } else if(isset($_GET['info']) && $_GET['info'] == 'exxista'){
          echo '<p style = "color: red">Parola sau username ul sunt gresite!</p>';
        }
         ?>
      </div>
    </div>
  </div>
  <script>
  function show() {
      var p = document.getElementById('pwd');
      p.setAttribute('type', 'text');
  }

  function hide() {
      var p = document.getElementById('pwd');
      p.setAttribute('type', 'password');
  }

  var pwShown = 0;

  document.getElementById("eye").addEventListener("click", function () {
      if (pwShown == 0) {
          pwShown = 1;
          show();
      } else {
          pwShown = 0;
          hide();
      }
  }, false);
  </script>

  <script>
      function changeImage() {
          var image = document.getElementById('ochi');
          if (image.src.match("ochi.png")) {
              image.src = "ochi1.png";
          }
          else {
              image.src = "ochi.png";
          }
      }
  </script>
</body>
</html>
