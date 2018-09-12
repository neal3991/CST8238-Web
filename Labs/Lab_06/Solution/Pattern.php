<html>

<head>
<title>Random</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<?php include "Header.php";?>	

	<?php include "Menu.php";?>

	<div class="content">
        <?php
            echo "<br>"; 
            echo "<br>"; 
            $n=11;  
            for($i=1; $i<=$n; $i+=2){
                for($j=1; $j<=$i; $j++){
                    echo ' * ';
                }  
                echo "<br>";  
            }  
            for($i=$n; $i>=1; $i-=2){
                for($j=1; $j<=$i; $j++){
                    echo ' * ';  
                }  
                    echo "<br>";  
            }  
        ?>	
	</div>
	
	<?php include "Footer.php";?>

</body>
</html>