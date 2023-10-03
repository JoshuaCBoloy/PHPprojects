<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
</head>
<h1>Variables</h1>
<body>
  <?php 
  echo "INTEGERS";
  $int_var = 12345;
  $another_int = -12345 + 12345;
  echo "<br> $int_var";
  echo "<br> $another_int"; 
  ?>

  <?php
  echo"<br>";

  echo "<br> DOUBLES";
  $many = 2.2888800;
  $many_2 = 2.2111200;
  $few = $many + $many_2;
  print("<br> .$many + $many_2 = $few.");
  ?>

  <?php
  echo"<br>";

  echo"<br> BOOLEAN";
  if (TRUE)
  print(" <br> This will always print<br>");
  else
  print("This will never print<br>");
  $true_num = 3 + 0.14159;
  $true_str = "Tried and true";
  $true_array [49] = "An array element";
  $false_array = array();
  $false_null = NULL;
  $false_num = 999 - 999;
  $false_str = "";
  ?>

  <?php
  echo"<br>";
  echo"<br> NULL";
  $my_var = NULL;
  $my_var = null;
  ?>

  <?php
  echo "<br>";
  echo "<br> STRINGS";
  $string_1 = "This is a string in double quotes";
  $string_2 = "This is a somewhat longer, singly quoted string";
  $string_39 = "This string has thirty-nine characters";
  $string_0 = ""; // a string with zero characters

  echo "<br>$string_1";
  echo "<br>$string_2";
  echo "<br>$string_39";
  echo "<br>$string_0";

  $variable = "name";
  $literally = 'My $variable will not print!\\n';
  print "<br>$literally";
  $literally = "My $variable will print!\\n";
  print"<br>$literally";
  ?>

  <?php
  echo "<br>";
  echo "<br> LOCAL VARIABLES";

  $x = 4;
  function assignx (){
    $x = 0;
    print "<br> \$x inside function is $x.
    ";
  }
  assignx();
  print "<br> \$x outside of function is $x.
  ";
  ?>

  <?php
  echo "<br>";
  echo "<br> PHP FUNCTION PARAMTERS";
  
  // multiply a value by 10 and return it to the caller
function multiply ($value) {
  $value = $value * 10;
  return $value;
 }
 $retval = multiply (10);
 Print "<br> Return value is $retval\n";
  ?>

  <?php
  echo "<br>";
  echo "<br> PHP GLOBAL VARIABLES";

  $somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "<br> Somevar is $somevar";
}
addit();
  ?>

  <?php
  echo "<br>";
  echo "<br> PHP STATIC VARIABLES";

  function keep_track() {
    STATIC $count = 0;
    $count++;
    print "<br> $count";
    print "";
  }
  keep_track();
  keep_track();
  keep_track();
  
  ?>
</body>
</html>
