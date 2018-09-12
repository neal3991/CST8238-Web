<html>
<head>
<title>Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<?php include "Header.php";?>	

	<?php include "Menu.php";?>
    
        <div class="content">
    
	<?php
	
	$rates = array("canadian dollar" => 0.97645, "new zealand dollar" => 1.20642, "us dollar" => 1.0);
        $range1 = false;
        $curr1 = false;
        $curr2 = false;
        
        if(isset($_POST['Convert_1'])){
            $range1 = $_POST['Convert_1'];
        }
        
        if(isset($_POST['number1'])){
            $curr1 = $_POST['number1'];
        }
        
        if(isset($_POST['number2'])){
            $curr2 = $_POST['number2'];
        }
        
        
        $result = false;
        $result = (($range1/($rates[$curr1])) * ($rates[$curr2]));
        
	echo "<h3> Conversion Results </h3>";
	echo number_format((float)$range1, 2, '.', '');
        echo "  $curr1 converts to ";
        echo number_format((float)$result, 2, '.', '');
        /*echo round($result, 2);*/
        echo " $curr2";
	echo "<br/>";
	echo "<br/>";
	
	?>
        </div>
            <?php include "Footer.php";?>
	
	</body>
</html>