<!DOCTYPE html>
<!-- ICS2O-Unit5-01-PHP-EvenNumberDisplay -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This program will list all numbers from the minimum number the user enters to the maximum number the user enters. This is possible through the use of a WHILE loop.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Numbers! Lists!!</title>
 
    <!-- The favicon on this page is summoned (displayed) with these lines of code -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- Header, more specifically the largest header possible, primarily for visual structural aesthetic. -->
  <?php 
    echo "<h1>Numbers! Lists!!</h1>";
  ?>

  <!-- some basic text explaining the function of this website and how to use it -->
  <?php
    echo "<p>This website is quite simple, but still incredibly gorgeous: enter your minimum and maximum numbers, and the program will count from the min to the max in a nice, neat order :)</p>"
  ?>
  <br>

  <!-- form to collect user's minimum and maximum numbers -->
  <form action="./results.php" method="post" target="counted-numbers">
    <label for="minimum">Minimum Number</label>
    <input type="number" name="minimum" id="minimum" step="1" placeholder="Min...">
    <br>
    <br>
    <label for="maximum">Maximum Number</label>
    <input type="number" name="maximum" id="maximum" step="1" placeholder="Max...">
    <br>
    <br>

    <!-- button that will submit things and start the count -->
    <input type="submit" value="Start The Count">
    <br>
    <br>
  </form>
  <!-- frame which the results will be posted to -->
  <iframe id="counted-numbers" name="counted-numbers">
  </iframe>
</body>
</html>