<!DOCTYPE html>
<html>
<head>
	<title>PHP if...else...elseif Statements</title>
</head>
<body>
<?php
echo "<h3>PHP - The if Statement</h3>";
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";
echo "<br>";

if ($t < "20") {
  echo "Have a good day!";

}
echo "<br>";

echo "<h3>PHP - The if else Statement</h3>";
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";

echo "<h3>PHP - The if...elseif...else Statement</h3>";
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
</body>
</html>