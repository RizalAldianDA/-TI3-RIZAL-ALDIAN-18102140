<!DOCTYPE html>
<html>
<head>
	<title>PHP STRING</title>
</head>
<body>
<?php
echo "<h2>strlen() - Return the Length of a String</h2>";
echo strlen("Hello world!"); // outputs 12

echo "<h2>str_word_count() - Count Words in a String</h2>";
echo str_word_count("Hello world!"); // outputs 2

echo "<h2>strrev() - Reverse a String</h2>";
echo strrev("Hello world!"); // outputs !dlrow olleH

echo "<h2>strrev() - Reverse a String</h2>";
echo strpos("Hello world!", "world"); // outputs 6

echo "<h2>str_replace() - Replace Text Within a String</h2>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

echo "<h2>AND THERE'S MANY MORE</h2>";
echo "Visit ";
?>
<a href="https://www.w3schools.com/php/php_ref_string.asp">Full Reference</a>
</body>
</html>