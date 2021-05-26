<?php
 require 'conectare.php';

  $sql = "SELECT * FROM users ORDER BY pct DESC";
  $result = mysqli_query($conectare, $sql);

  $nr = 1;
  while($row = mysqli_fetch_array($result)){
    echo '<table class = "top">';
    echo '<tr>';
    echo '<td>'.$nr++.'.';
    echo '<td>'.$row['nume'];
    echo '<td>'.$row['prenume'];
    echo '<td>'.$row['pct'];
    echo '</tr>';
    echo '</table>';

  }
?>
