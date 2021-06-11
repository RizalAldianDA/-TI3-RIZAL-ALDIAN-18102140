<!DOCTYPE html>
<html>
<head>
	<title>PHP VARIABELS</title>
</head>
<body>
	<?php
		echo "<h1>Creating (Declaring) PHP Variables<br></h1>";
		$txt = "Hello world!";
		$x = 5;
		$y = 10.5;

		echo "Output Variables<br>";
		$web = "PHP";
		echo "I love $web!<br>";
		echo "I love " . $web . "!<br>";
		echo "<br><br>";

		echo "SUM 2 Variabels<br>";
		$u = 5;
		$t = 4;
		echo $u + $t;
		echo "<br><br>";


		echo "<h1>PHP Variables Scope</h1>";

		echo "<h2>Example Global Scope</h2>";
		$a = 5; // global scope
		function myTest() {
		  // using x inside this function will generate an error
		  echo "<p>Variable x inside function is: $a</p>";
		}
		myTest();
		echo "<p>Variable x outside function is: $a</p>";
		echo "<br>";
		$c = 5;
		$d = 10;

		function myTest1() {
		  global $c, $d;
		  $d = $c + $d;
		}
		myTest1();
		echo $d; // outputs 15
		echo "<br><br>";

		function myTest3() {
		  $GLOBALS['d'] = $GLOBALS['c'] + $GLOBALS['d'];
		}

		myTest3();
		echo $d; // outputs 20
		echo "<br><br><br>";


		echo "<h2>Example Local Scope</h2>";
		function myTest2() {
		$b = 5; // local scope
		echo "<p>Variable y inside function is: $b</p>";
		}
		myTest2();
		// using x outside the function will generate an error
		echo "<p>Variable y outside function is: $b</p>";
		echo "<br><br><br>";


		echo "<h2>Example Static Scope<br></h2>";
		function myTest4() {
			static $z = 0;
			echo $z;
			$z++;
		}

		myTest4();
		echo "<br>";
		myTest4();
		echo "<br>";
		myTest4();
		echo "<br>";
	?>

</body>
</html>