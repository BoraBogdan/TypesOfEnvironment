<?php
  session_start();
  require 'conectare.php';
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

  <style>
    table, tr, td{
      border-bottom: 1px solid black;
      text-align: center;
      width: 750px;
      font-size: 30px;
      font-family: monospace;
    }

    body{
      overflow-y: hidden;
    }

    .tabel{
      padding-top: 40px;
    }
  </style>
</head>
<body>

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


  <div class="fundal1">
    <div class="centru1">

      <center>
        <h1>Clasament</h1>
        <div class = "tabel">
      <table>
        <tr>
          <td>Nr.crt.</td>
          <td>Nume</td>
          <td>Prenume</td>
          <td>Punctaj</td>
        </tr>

      <?php
        require 'conectare.php';

        $sql = "SELECT * FROM users ORDER BY pct DESC";
        $result = mysqli_query($conectare, $sql);

        $nr = 1;
        if(isset($_GET['info']) && $_GET['info'] == "top"){
        while($row = mysqli_fetch_array($result)){

          echo '<tr>';
          echo '<td>'.$nr++.'.';
          echo '<td>'.$row['nume'];
          echo '<td>'.$row['prenume'];
          echo '<td>'.$row['pct'];
          echo '</tr>';

        }
      }
      ?>
    </table>
  </div>
      </center>


    </div>
  </div>
</body>
</html>
