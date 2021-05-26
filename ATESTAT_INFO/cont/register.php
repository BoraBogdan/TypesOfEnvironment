

<html>
<head>
  <link rel="shortcut icon" href="icon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Medii-De-Viață | CREARE CONT</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
</head>
<body>

  <style>
    body{
      overflow-y: hidden;
    }
  </style>

  <div class="menu">
    <div class="container">
      <center><a href="../index.php"><img src="logoo.png" class = "img" alt="logo" ></a></center>
      <ul>
      <!--  <li><a href = "login.php">LOGIN</a></li> -->
        <li><a href = "../index.php">ACASĂ</a></li>
      <!--  <li><a href = "register.php">REGISTER</a></li> -->
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

  <div class="fundal1">



    <div class="centru1">
      <div id="continut">



        <h1>Bine ati venit!</h1>

        <form action="reg.php" method="POST">
            <input type="text" name="nume" placeholder="Nume*" title="Introduceti numele*" required><br>
            <input type="text" name="prenume" placeholder="Prenume*"  title="Introduceti prenumele*" required><br>
            <input type="text" name="user" placeholder="Username*"  title="Introduceti username-ul*" required><br>
            <div class="pass">
              <input type="password" name="parola" id = "pwd" placeholder="Introduceti parola*"  title="Introduceti parola" required class="parola"><br>
              <input type="password" name="reparola" id = "pwd1" placeholder="Reintroduceti parola*"  title="Rentroduceti parola" required><br>
                <button type="button" id = "eye" class="buton" onclick="changeImage()">
                <img src="ochi.png" alt="eye" id="ochi">
            </div>
            <input type="text" name="mail" placeholder="E-mail" title="Introduceti mail-ul"><br>
            <input type="submit"  value="Creare cont" title="Creare cont">
        </form>

        <?php
          if(isset($_GET['info']) && $_GET['info'] == "cont"){
            echo '<marquee scrollamount = "15"><p style = "color:red; text-align: center; font-size: 40px;">Pentru a completa "Testul" veti avea nevoie de cont.</p></marquee>';
          }
         ?>

          <?php
            if(isset($_GET['info']) && $_GET['info'] == 'exista'){
              echo '<p style = "color: red">Username ul exista!</p>';
            } else if(isset($_GET['info']) && $_GET['info'] == 'ok'){
              echo '<p style = "color: green">Contul a fost creat cu succes</p>';
            } else if(isset($_GET['info']) && $_GET['info'] == 'eroare'){
              echo '<p style = "color: red">Ceva nu este bine! :(</p>';
            } else if(isset($_GET['info']) && $_GET['info'] == 'parola'){
              echo '<p style = "color: red">Parolele nu se potrivesc.</p>';
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
