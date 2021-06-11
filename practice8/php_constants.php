<!DOCTYPE html>
<html>
<head>
	<title>PHP Constants</title>
</head>
<body>
<?php
echo "<h3>Create a constant with a case-sensitive name:</h3>";
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";


echo "<h3>Create a constant with a case-insensitive name:</h3>";
define("GREETING2", "Welcome to W3Schools.com!", true);
echo greeting2;
echo "<br>";


echo "<h3>Create an Array constant:</h3>";
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
echo "<br>";


echo "<h3>This example uses a constant inside a function, even if it is defined outside the function:</h3>";
define("GREETING3", "Welcome to W3Schools.com!");
function myTest() {
  echo GREETING3;
}
 
myTest();
echo "<br>";

?>
</body>
</html>