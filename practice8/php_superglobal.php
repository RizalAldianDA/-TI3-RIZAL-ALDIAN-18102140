<!DOCTYPE html>
<html>
<head>
	<title>PHP SUPERGLOBAL</title>
</head>
<body>
<h3>PHP GET</h3>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
<br>
<br>
<h3>PHP REQUEST</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
echo "<br>";
echo "<br>";


echo "<h3>PHP GLOBALS</h3>";
$x = 75;
$y = 25;
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
echo "<br>";
echo "<br>";


echo "<h3>PHP SERVER</h3>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "<br>";


?>

</body>
</html>