<html>

<head>
<title>Random_Submitted</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<?php include "Header.php";?>	

	<?php include "Menu.php";?>
    
        <div class="content">
    
	<?php
	
	$number = rand ( $_POST["range1"], $_POST["range2"] );
        $range1 = $_POST["range1"];
        $range2 = $_POST["range2"];
	
	echo "The Web Server has selected the random number $number from the $range1 to $range2.";
	echo "<br/>";
	if ($number % 2 != 0) {
		echo "$number Bottles of Beer can serve odd number of guests.";
	} else {
		echo "$number Bottles of Beer can serve even number of guests.";
	}
	
	?>
        </div>
            <?php include "Footer.php";?>
	
	</body>
</html>