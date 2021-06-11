<!DOCTYPE html>
<html>
<head>
	<title>PHP Loops</title>
</head>
<body>
<?php
echo "<h2>While Loops</h2>";
echo "<h3>The example below displays the numbers from 1 to 5:</h3>";
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
echo "<br>";

echo "<h3>This example counts to 100 by tens:</h3>";
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
echo "<br>";





echo "<h2>Do While Loops</h2>";
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
echo "<br>";
echo "<h3>This example checked only origin number because condition:</h3>";
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
echo "<br>";




echo "<h2>For Loops</h2>";
echo "<h3>The example below displays the numbers from 0 to 10:</h3>";
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
echo "<br>";
echo "<h3>This example counts to 100 by tens:</h3>";
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}




echo "<h2>Foreach Loops</h2>";
echo "<h3>The following example will output the values of the given array colors:</h3>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
echo "<br>";
echo "<h3>The following example will output both the keys and the values of the given array age:</h3>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}






echo "<h2>PHP Break and Continue</h2>";
echo "<h3>PHP Break</h3>";
echo "<h3>This example jumps out of the loop when x is equal to 4:</h3>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
echo "<br>";
echo "<h3>PHP Continue</h3>";
echo "<h3>This example skips the value of 4:</h3>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
echo "<h3>Break and Continue in While Loop</h3>";
$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
echo "<br>";
$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}


?>
</body>
</html>