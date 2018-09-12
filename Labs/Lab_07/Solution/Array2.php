<html>

<head>
<title>Array2</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<?php include "Header.php";?>	

	<?php include "Menu.php";?>

	<div class="content">
		<form action="Form.php" method="post">
                    <?php
                    $currencies = array("CAD" => "Canadian Dollar", "NZD" => "New Zealand Dollar", "USD" => "US Dollar");
                    ?>
                    Convert: <input type="number" name="Convert_1" step = "any">                    
                    <select name = "number1">
                        <!--<option selected="selected">Choose one</option> -->                  
                        <?php                        
                        foreach($currencies as $item){
                        ?>
                        <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                        <?php
                        }
                        ?>                        
                    </select>
                    <p>to</p>
                    <!--<form action="Form.php" method="post">
                    Convert: <input type="number" name="Convert_2">-->
                    <select name = "number2">
                        <!--<option selected="selected">Choose one</option>-->
                        <?php
                        /*$currencies = array("CAD" => "Canadian Dollar", "NZD" => "New Zealand Dollar", "USD" => "US Dollar");*/
                        foreach($currencies as $item){
                        ?>
                        <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                        <?php
                        }
                        ?>                          
                    </select>
                    <br />
                    <br />
                    <br />
                    <input type="submit" value="Submit">
                </form>	
	</div>
	
	<?php include "Footer.php";?>

</body>
</html>