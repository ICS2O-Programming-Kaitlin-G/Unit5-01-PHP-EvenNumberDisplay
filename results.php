<?php
  //getting user input
  $userMin = intval($_POST["minimum"]);
  $userMax = intval($_POST["maximum"]);
  $counter = $userMin;
  //initializing empty string
  $numbers = "";
  //while loop that will allow the numbers to be displayed in order 
  while ($counter <= $userMax) {
    $numbers = $numbers . $counter . "<br>";
    $counter++;
  }
  //echo element that will display the counter
  echo $numbers;
?>