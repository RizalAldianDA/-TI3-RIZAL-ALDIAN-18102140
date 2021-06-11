<!DOCTYPE html>
<html>
<head>
	<title>PHP DATA TYPE</title>
</head>
<body>
<?php
$x = "Hello world!";
$y = 'Hello world!';
$z = 5985;
$a = 10.365;
$b = true;
$c = false;
$d = "Hello world!";
$d = null;
$cars = array("Volvo","BMW","Toyota");

echo "<h2>PHP String</h2><br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

echo "<h2>PHP Integer</h2><br>";
var_dump($z);
echo "<br>";

echo "<h2>PHP Float</h2><br>";
var_dump($a);
echo "<br>";

echo "<h2>PHP Boolean</h2><br>";
echo "Booleans are often used in conditional testing.<br>";

echo "<h2>PHP Array</h2><br>";
var_dump($cars);
echo "<br>";

echo "<h2>PHP Object</h2><br>";
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
echo "<br>";

echo "<h2>PHP Null Value</h2><br>";
var_dump($d);
echo "<br>";

echo "<h2>PHP Resource</h2><br>";
echo "<p>The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.<br>
A common example of using the resource data type is a database call</p>";

?>
</body>
</html>