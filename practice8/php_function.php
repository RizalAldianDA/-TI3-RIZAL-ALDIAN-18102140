<!DOCTYPE html>
<html>
<head>
	<title>PHP FUNCTION</title>
</head>
<body>
<?php
function writeMsg() {
  echo "Hello world!";
}
echo "<br><br>";
writeMsg(); // call the function


function familyName($fname) {
  echo "$fname Refsnes.<br>";
}
echo "<br><br>";
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

echo "<br><br>";
function familyName2($fname2, $year) {
  echo "$fname2 Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");


echo "<br><br>";
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days"); 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

echo "<br><br>";


?>

</body>
</html>