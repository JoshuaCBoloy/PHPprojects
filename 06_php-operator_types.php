<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operator Types</title>
</head>
<h2?>OPERATOR TYPES</h2>
<body>
  <?php
  $a = 42;
  $b = 20;
  
  $c = $a + $b;
  echo "Addition Operation Result: $c <br/>";
  $c = $a - $b;
  echo "Subtraction Operation Result: $c <br/>";
  $c = $a * $b;
  echo "Multiplication Operation Result: $c <br/>";
  $c = $a / $b;
  echo "Division Operation Result: $c <br/>";
  $c = $a % $b;
  echo "Modulus Operation Result: $c <br/>";
  $c = $a++;
  echo "Increment Operation Result: $c <br/>";
  $c = $a--;
  echo "Decrement Operation Result: $c <br/>";
  ?>

  <?php 
  $x = 10;  
  $y = 6;
  $z = 19;
  echo "<br>";
  echo $x + $y;
  echo "<br>";
  echo $x - $z;
  echo "<br>";
  echo $z * $x;
  ?>
</body>
</html>