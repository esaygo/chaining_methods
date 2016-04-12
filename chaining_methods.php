<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php


class Bike
{
  public $price;
  public $max_speed;
  public $miles = 0;

  public function __construct($price, $max_speed)
  {
    $this->price = $price;
    $this->max_speed = $max_speed;
  }

  public function drive($miles) {
    echo "driving!!! </br>";
    $this->miles += 10;
    echo " new mileage is $this->miles </br>";
    return $this;
  }

  public function reverse($miles) {
    echo "reversing!!! </br>";
    if($this->miles >= 5) {
    $this->miles -= 5;
  }
    echo " new mileage is $this->miles </br>";
    return $this;
  }

  public function displayInfo($bike) {
    echo "this is the price: $this->price || ";
    echo "this is the max speed: $this->max_speed || ";
    echo "this is the miles:" . $this->miles . "</br>";
    return $this;
  }
}

$bike1 = new Bike(20, 30);
$bike2 = new Bike(30,40);
$bike3 = new Bike(50, 60);

//var_dump($bike1);

echo "first bike actions:" . "</br></br>";
$bike1->drive()->drive()->drive()->reverse()->displayInfo();

echo "</br>";

echo "second bike actions:" . "</br></br>";
$bike2->drive()->drive()->reverse()->reverse()->displayInfo();

echo "</br>";
echo "third bike actions:" . "</br></br>";
$bike3->reverse()->reverse()->reverse()->displayInfo();

 ?>
</body>
</html>
