<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: register.php?info=cont");
  }
 ?>

<html>
<head>
  <link rel="shortcut icon" href="icon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Medii-De-Viață | TEST</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
</head>
<body>

  <style>
  .fundal2{

    width: 100%;
    padding-top: 50px;
    background-color: red; /* For browsers that do not support gradients */
    background-image: radial-gradient(circle, #80beba, #4ca1ac, #77c0d4); /* Standard syntax (must be last) */
  }

  .centru2{
    width: 50%;

    margin: 0 auto;
    background-image: radial-gradient(circle, #80beba, #77c0d4); /* Standard syntax (must be last) */
    box-shadow: 0 4px 50px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .centru2 h3{
    text-align: center;
    padding-top: 2%;
    font-size: 70px;
    font-family: Monotype Corsiva;
  }

  .centru2 h1{
    text-align: center;
    padding-top: 2%;
    font-size: 70px;
    font-family: Monotype Corsiva;
  }
  </style>

  <div class="menu">

      <center><a href="../index.php"><img src="logoo.png" class = "img" alt="logo" ></a></center>
      <ul>
        <!-- <li><a href = "login.php">LOGIN</a></li> -->
        <li><a href = "../index.php">ACASĂ</a></li>
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
              .$_SESSION['prenume'].', '.'<input type = "submit" value = "Deconectare">
              </form></div>
              ';
      }
         ?>
       </li>


    </ul>
    </div>


  <div class="fundal2">
    <div class="centru2">
      <h3>Test</h3>
      <div class="intrebari">
        <form action="testpct.php" method="POST">

          <h2>1. Ce reprezintă mediul de viață?</h2>
          <div class="radio">
        <input type="radio" name="1" value="a" required id="1"><label for="1">totalitatea condițiilor artificiale </label><br>
        <input type="radio" name="1" value="b" required id="2"><label for="2">totalitatea condițiilor naturale </label><br>
        <!--<label for="3">C </label><input type="radio" name="1" value="c" required id="3"> -->
          </div>

          <h2>2. Din ce pcdv mediul aerian este cel mai complicat?</h2>
          <div class="radio">
        <input type="radio" name="2" value="a" required id="4"><label for="4">după condițiile ecologice </label><br>
        <input type="radio" name="2" value="b" required id="5"><label for="5">după complexitatea lui </label><br>
        <input type="radio" name="2" value="c" required id="6"><label for="6">după numărul de viețuitoare </label><br>
          </div>

          <h2>3. Este posibilă viața în stare suspendată?</h2>
          <div class="radio">
        <input type="radio" name="3" value="a" required id="7"><label for="7">da </label><br>
        <input type="radio" name="3" value="b" required id="8"><label for="8">probabil </label><br>
      <input type="radio" name="3" value="c" required id="9"><label for="9">nu </label><br>
          </div>

          <h2>4. Presiunea se micșorează cu:</h2>
          <div class="radio">
        <input type="radio" name="4" value="a" required id="10"><label for="10">creșterea greutății </label><br>
        <input type="radio" name="4" value="b" required id="11"><label for="11">creșterea înălțimii </label><br>
        <input type="radio" name="4" value="c" required id="12"><label for="12">scăderea înălțimii </label><br>
          </div>

          <h2>5. Câte medii de viață există?</h2>
          <div class="radio">
        <input type="radio" name="5" value="a" required id="13"><label for="13">2 </label><br>
        <input type="radio" name="5" value="b" required id="14"><label for="14">4 </label><br>
        <input type="radio" name="5" value="c" required id="15"><label for="15">5 </label><br>
          </div>

          <h2>6. Care sunt mamiferele bune alergătoare?</h2>
          <div class="radio">
        <input type="radio" name="6" value="a" required id="16"><label for="16">porcul, oaia, vaca </label><br>
        <input type="radio" name="6" value="b" required id="17"><label for="17">leul, delfinul </label><br>
        <input type="radio" name="6" value="c" required id="18"><label for="18">pisica, șoarecele, câinele </label><br>
          </div>

          <h2>7. Care ecosistem natural este cel mai vulnerabil?</h2>
          <div class="radio">
        <input type="radio" name="7" value="a" required id="19"><label for="19">aerian </label><br>
        <input type="radio" name="7" value="b" required id="20"><label for="20">acvatic </label><br>
        <input type="radio" name="7" value="c" required id="21"><label for="21">subteran </label><br>
          </div>

          <h2>8. Care este cel mai complex mediu?</h2>
          <div class="radio">
        <input type="radio" name="8" value="a" required id="22"><label for="22">aerian </label><br>
        <input type="radio" name="8" value="b" required id="23"><label for="23">acvatic </label><br>
        <input type="radio" name="8" value="c" required id="24"><label for="24">terestru </label><br>
          </div>

          <h2>9. Unde se găsesc plantele?</h2>
          <div class="radio">
        <input type="radio" name="9" value="a" required id="25"><label for="25">unde se găsesc cele necesare vieții </label><br>
        <input type="radio" name="9" value="b" required id="26"><label for="26">peste tot </label><br>
        <input type="radio" name="9" value="c" required id="27"><label for="27">doar in mediul urban </label><br>
          </div>

          <h2>10. Ce determină densitatea joasă a aerului?</h2>
          <div class="radio">
        <input type="radio" name="10" value="a" required id="28"><label for="28">forța mare de ascensiune și de sprijin </label><br>
        <input type="radio" name="10" value="b" required id="29"><label for="29">forța mică de ascensiune și de sprijin </label><br>
        <input type="radio" name="10" value="c" required id="30"><label for="30">forța medie de ascensiune și de sprijin </label><br>
      </div><br>
          <center><input type="submit" value="Afla raspuns!" id = "but"></center>
        </form>

      </div>

    </div>
  </div>
</body>
</html>
