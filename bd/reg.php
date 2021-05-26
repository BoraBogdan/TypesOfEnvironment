<?php
  require 'conectare.php';
  if(!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['user']) && !empty($_POST['parola'])){
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $user = strtolower($_POST['user']);
    $parola = $_POST['parola'];
    $mail = $_POST['mail'];

    $sql = "SELECT user FROM users WHERE user = '$user'";
    $result = mysqli_query($conectare, $sql);
    $check = mysqli_num_rows($result);

    if($check > 0){
      header("Location: register.php?info=exista");
      die();
    }
    else {
      $sql = "INSERT INTO users (nume, prenume, parola, user, mail) VALUES ('$nume', '$prenume', '$parola', '$user', '$mail')";
      $result = mysqli_query($conectare, $sql);

      header("Location: register.php?info=ok");
    }
  }
  else {
    header("Location: register.php?info=eroare");
  }
 ?>
