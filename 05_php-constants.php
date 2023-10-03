<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constants</title>
</head>
<body>
  <?php 
  echo"constant function<br>Examples:<br>";
  define("MINSIZE", 50);
  echo'<br><br>';
  echo MINSIZE;
  echo constant("MINSIZE"); 
  echo'<br><br>';
// Defining constant

// Valid constant names
define("ONE", "first thing");
define("TWO2", "second thing");
define("THREE_3", "third thing");
echo ONE;
echo "<br>";
echo TWO2;
echo "<br>";
echo THREE_3;
echo "<br>";

echo "<br>";
define("HANDSOME", "JOSHUA CASAS BOLOY");
echo HANDSOME;
  ?>
</body>
</html>