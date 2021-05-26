<?php
    require 'conectare.php';
    session_start();

    $nr = 0;

    if($_POST['1'] == "b"){
      $nr++;
    }
    if($_POST['2'] == "a"){
      $nr++;
    }
    if($_POST['3'] == "c"){
      $nr++;
    }
    if($_POST['4'] == "b"){
      $nr++;
    }
    if($_POST['5'] == "b"){
      $nr++;
    }
    if($_POST['6'] == "a"){
      $nr++;
    }
    if($_POST['7'] == "c"){
      $nr++;
    }
    if($_POST['8'] == "b"){
      $nr++;
    }
    if($_POST['9'] == "a"){
      $nr++;
    }
    if($_POST['10'] == "b"){
      $nr++;
    }

    $user = $_SESSION['user'];
    $sql = "UPDATE users SET pct = '$nr' where user = '$user'";
    $result = mysqli_query($conectare, $sql);

    $message = 'Ai raspuns corect la '.$nr.' intrebari din 10.';
  //  echo "<script type = 'text/javascript'>windows.alert('$message'); window.location.href = 'index.php';</script>";
  if($nr != 0 || $nr == 0){
    echo "<script type=\"text/javascript\">window.alert('$message');
      window.location.href = 'top.php?info=top';</script>";
exit;

  }
 ?>
