<html>
<head>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style-centru.css" type="text/css">
  <link rel="shortcut icon" href="icon.ico">
  <title>Medii-De-Viata</title>

</head>
<body>
    <ul class="navigation" >
	    <li class="nav-item"><a href="index.php">Acasa</a></li>
	    <li class="nav-item"><a href="maerian.php">Mediul Aerian</a></li>
	    <li class="nav-item"><a href="mterestru.php">Mediul Terestru</a></li>
	  	<li class="nav-item"><a href="msubpamant.php">Mediul Subteran</a></li>
	  	<li class="nav-item"><a href="macvatic.php">Mediul Acvatic</a></li>
	    <li class="nav-item"><a href="galerie.php">Galerie</a></li>
	    <li class="nav-item"><a href="cont/login.php">Login</a></li>
		  <li class="nav-item"><a href="cont/register.php">Register</a></li>
      <li class="nav-item"><a href="cont/test.php">Test</a></li>
    </ul>

  <input type="checkbox" id="nav-trigger" class="nav-trigger" />
  <label for="nav-trigger"></label>

	<div class="site-wrap">

    <div class="centru">
      <h1>Bine ati venit!</h1>
    <form action="reg.php" method = "POST">

        <input type="text" name="nume" placeholder="Nume de familie*" title="Introduceti numele" required><br>
        <input type="text" name="prenume" placeholder="Prenume*" title="Introduceti prenumele" required><br>
        <input type="text" name="user" placeholder="Username*" title="Introduceti username-ul" required><br>

        <div class="pass">
          <input type="password" name="parola" id="pwd" placeholder="Parola*" title="Introduceti parola" required><br>
          <button type="button" id = "eye" class="buton" onclick="changeImage()">
              <img src="ochi.png" alt="eye" id="ochi">
        </div>

        <input type="text" name="email" placeholder="E-mail" title="Introduceti e-mail"><br>
        <input type = "submit" name="send" value="Sign Up" title="Sign Up">


    </form>

      <p id = "veti">*Pentru a putea completa testul veti avea nevoie de un cont.</p>

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
