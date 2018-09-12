<!DOCTYPE html>
<html>
<body>

<?php

define("studentNum", "Student Number: 040-777-969");
define ('Lab1', 'http://www.neal3991.com/CST8238/Lab1/index.html');
define ('Lab2', 'http://www.neal3991.com/CST8238/Lab2/index.html');
define ('Lab3', 'http://www.neal3991.com/CST8238/Lab3/index.html');
define ('Lab4', 'http://www.neal3991.com/CST8238/Lab4/index.html');
define ('Assignment1', 'http://www.neal3991.com/CST8238/Assignment1/index.html');

$firstName = "Niladri";
$lastName = "Sengupta";
$str1="Hello World!";
$str2="I am using PHP!";

echo "<strong>This is Lab 5 coded in PHP</strong>";
echo "<br><br>";
echo "Student Name: ";
echo $firstName . " " . $lastName;
echo "<br>";
echo studentNum;
echo "<br><br>";
echo "\n" . $str1 . " " . $str2 ; 
echo "<br><br>";


?> 

<a href="<?php echo Lab1; ?>">Lab 1</a>
<a href="<?php echo Lab2; ?>">Lab 2</a>
<a href="<?php echo Lab3; ?>">Lab 3</a>
<a href="<?php echo Lab4; ?>">Lab 4</a>
<a href="<?php echo Assignment1; ?>">Assignment 1</a>

</body>
</html>