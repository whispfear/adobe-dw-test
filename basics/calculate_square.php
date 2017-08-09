<?php
   $number = $_POST["number"];
   $square = $number * $number;
   ?>
<html>
  <head>
    <title>Calculating Square</title>
  </head>
  <body>
    <p>Square of <?php echo $number; ?> is <?php echo $square ?></p>
  </body>
</html>
