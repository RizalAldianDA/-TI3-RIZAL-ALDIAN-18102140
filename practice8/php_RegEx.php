<!DOCTYPE html>
<html>
<head>
	<title>Regular Expression</title>
</head>
<body>
<?php
echo "<h2>Using preg_replace()</h2>";
$str3 = "Visit Microsoft!";
$pattern3 = "/microsoft/i";
echo preg_replace($pattern3, "W3Schools", $str3); // Outputs "Visit W3Schools!"
echo "<br>";


echo "<h2>Grouping</h2>";
$str4 = "Apples and bananas.";
$pattern4 = "/ba(na){2}/i";
echo preg_match($pattern4, $str4); // Outputs 1
echo "<br>";


echo "<h2>Using preg_match()</h2>";
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); 
echo "<br>";


echo "<h2>Using preg_match_all()</h2>";
$str2 = "The rain in SPAIN falls mainly on the plains.";
$pattern2 = "/ain/i";
echo preg_match_all($pattern2, $str2); // Outputs 4
echo "<br";

?>
</body>
</html>