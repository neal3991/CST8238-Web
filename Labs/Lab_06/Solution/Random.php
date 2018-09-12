<html>

<head>
<title>Random</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<?php include "Header.php";?>	

	<?php include "Menu.php";?>

	<div class="content">
		<form action="random_submitted.php" method="post">
			Range 1: <input type="number" name="range1"><br /> 
			Range 2: <input type="number" name="range2"><br /> 
			<input type="submit" value="Order" />		
		</form>	
	</div>
	
	<?php include "Footer.php";?>

</body>
</html>