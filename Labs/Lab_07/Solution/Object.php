<!DOCTYPE html>
<html>
<head>
<title>Object</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<?php include "Header.php"; ?>
<?php include "Menu.php"; ?>

<div class="content">

<?php
class Vehicle {
	
	protected $make;
	protected $model;
	protected $year;
	protected $price;
	
	function __construct($make, $model, $year, $price) {
		$this->make = $make;
		$this->model = $model;
		$this->year = $year;
		$this->price = $price;
	}
	
	public function displayObject() {
		return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->year . ", Price " . $this->price;
	}
}
class LandVehicle extends Vehicle {
	private $maxSpeed;
	
	function __construct($make, $model, $year, $price, $maxSpeed) {
		parent::__construct ($make, $model, $year, $price);
		$this->maxSpeed = $maxSpeed;
	}
	
	public function displayObject() {
		return parent::displayObject () . ", Speed Limit: " . $this->maxSpeed . "<br/>";
	}
}
echo "<br/>";
echo "<br/>";
$land = new LandVehicle ("Nissan", "GTR", 2015, 120000, 300);
echo $land->displayObject ();
$land = new LandVehicle ("Lamborghini", "Aventador", 2015, 400000, 340);
echo $land->displayObject ();
$land = new LandVehicle ("Bugatti", "Veryon", 2015, 1200000, 400);
echo $land->displayObject ();
echo "<br/>";
echo "<br/>";
class WaterVehicle extends Vehicle {
	private $boatCapacity;
	
	function __construct($make, $model, $year, $price, $boatCapacity) {
		parent::__construct ($make, $model, $year, $price);
		$this->boatCapacity = $boatCapacity;
		
	}
	
	public function displayObject() {
		return parent::displayObject () . ", Boat Capacity: " . $this->boatCapacity . "<br/>";
	}
}
$water = new WaterVehicle ("Black Pearl", "Single Edition", 1786, 700000, 25);
echo $water->displayObject ();
$water = new WaterVehicle ("Aquaholic", "Turbo", 2012, 72000, 8);
echo $water->displayObject ();
$water = new WaterVehicle ("Speedster", "RT", 2014, 22000, 3);
echo $water->displayObject ();
?>

</div>

<?php include "Footer.php"; ?>

</body>

</html>
