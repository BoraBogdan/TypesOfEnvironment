<?php
  session_start();
  require 'conectare.php';

  if(isset($_POST['user']) && isset($_POST['parola'])){
    $user = strtolower($_POST['user']);
    $parola = $_POST['parola'];

      $sql = "SELECT * FROM users WHERE user = '$user' AND parola = '$parola'";
      $result = mysqli_query($conectare, $sql);
      $check = mysqli_num_rows($result);

      if($check == 0){
        header("Location: login.php?info=exxista");
      }

      $sql = "SELECT * FROM users WHERE user = '$user' AND parola = '$parola'";
      $result = mysqli_query($conectare, $sql);

      if(!$row = $result->fetch_assoc()){
        echo "Parola sau usernameul nu sunt bune.";
      } else {
        $_SESSION['nume'] = $row['nume'];
        $_SESSION['prenume'] = $row['prenume'];
        $_SESSION['user'] = $row['user'];
        $_SESSION['pct'] = $row['pct'];
        header("Location: ../index.php");
      }

    }

 ?>
