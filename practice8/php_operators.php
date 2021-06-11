<!DOCTYPE html>
<html>
<head>
	<title>PHP Operator</title>
</head>
<body>
<?php
$x = 10;  
$y = 6;


echo "<h3>PHP Arithmetic Operators</h3>";
echo $x;
echo "<br>";
echo $y;
echo "<br><br>";
echo $x + $y;
echo "<br><br>";
echo $x - $y;
echo "<br><br>";
echo $x * $y;
echo "<br><br>";
echo $x / $y;
echo "<br><br>";
echo $x % $y;
echo "<br><br>";
echo $x ** $y;
echo "<br><br>";


echo "<h3>PHP Assignment Operators</h3>";
$x = 20; 
echo $x;
echo "<br>";
$x += 100;
echo $x;
echo "<br>";
$x -= 30;
echo $x;
echo "<br>";
$x *= 6;
echo $x;
echo "<br>";
$x /= 5;
echo $x;
echo "<br>";
$x %= 4;
echo $x;
echo "<br>";


echo "<h3>PHP Comparison Operators</h3>";
$x ="100";  
$y = "100";

var_dump($x == $y); // returns true because values are equal
echo "<br>";
var_dump($x === $y); // Returns true if $x is equal to $y, and they are of the same type
echo "<br>";
var_dump($x != $y); // Returns true if $x is not equal to $y
echo "<br>";
var_dump($x <> $y); // Returns true if $x is not equal to $y
echo "<br>";
var_dump($x !== $y); // Returns true if $x is not equal to $y, or they are not of the same type
echo "<br>";
var_dump($x > $y); // Returns true if $x is greater than $y
echo "<br>";
var_dump($x < $y); // Returns true if $x is less than $y
echo "<br>";
var_dump($x >= $y); // Returns true if $x is greater than or equal to $y
echo "<br>";
var_dump($x <= $y); // Returns true if $x is less than or equal to $y
echo "<br>";
var_dump($x <=> $y); // Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
echo "<br>";


echo "<h3>PHP Increment / Decrement Operators</h3>";
$x = 10;  
echo ++$x;
echo "<br>";
$x = 10; 
echo $x++;
echo "<br>";
$x = 10; 
echo --$x;
echo "<br>";
$x = 10; 
echo $x--;
echo "<br>";


echo "<h3>PHP Logical Operators</h3>";
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo "<br>";

if ($x == 100 or $y == 50) {
    echo "Hello world!";
}
echo "<br>";

if ($x == 100 xor $y == 50) {
    echo "Hello world!";
}
echo "<br>";

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
echo "<br>";

if ($x == 100 || $y == 50) {
    echo "Hello world!";
}
echo "<br>";

if ($x !== 90) {
    echo "Hello world!";
}
echo "<br>";



echo "<h3>PHP String Operators</h3>";
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
echo "<br>";

$txt1 .= $txt2;
echo $txt1;
echo "<br>";



echo "<h3>PHP Array Operators</h3>";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";



echo "<h3>PHP Conditional Assignment Operators</h3>";
	// if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";

   echo "<br><br>";

   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>  
</body>
</html>