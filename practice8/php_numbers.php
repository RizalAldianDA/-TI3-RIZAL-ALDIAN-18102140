<!DOCTYPE html>
<html>
<head>
	<title>PHP NUMBERS</title>
</head>
<body>
<?php
echo "<h2>Check if the type of a variable is integer:</h2>";
$x = 5985;
echo $x;
echo "<br>";
var_dump(is_int($x));
echo "<br>";
echo "<br>";
$x = 59.85;
echo $x;
echo "<br>";
var_dump(is_int($x));


echo "<h2>Check if the type of a variable is float:</h2>";
$x = 10.365;
echo $x;
echo "<br>";
var_dump(is_float($x));


echo "<h2>Check if the type of a variable is finite or infinite:</h2>";
$x = 1.9e411;
var_dump($x);


echo "<h2>Invalid calculation will return a NaN value:</h2>";
$x = acos(8);
var_dump($x);


echo "<h2>Check if the variable is numeric:</h2>";
$x = 5985;
echo $x;
echo " ";
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
echo $x;
echo " ";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
echo $x;
echo " ";
var_dump(is_numeric($x));
echo "<br>";

$x = "Hello";
echo $x;
echo " ";
var_dump(is_numeric($x));
echo "<br>";



echo "<h2>PHP Casting Strings and Floats to Integers</h2>";
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
</body>
</html>