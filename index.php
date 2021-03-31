<?php
echo "<h1> Задача 1</h1>";
class Car {
    const NUMBER1 = 2;
    const NUMBER2 = 5;
    const NUMBER3 = 12;

    public $doors;
    public $price;
    public $wheels;
    public $fuel;

    public function __construct(int $doors = 4, int $price = 1000, int $wheels = 4, float $fuel = 0)
    {
        $this->doors = $doors;
        $this->price = $price;
        $this->wheels = $wheels;
        $this->fuel = $fuel;
    }

    /**
     * @param $distance
     * @return float|int
     */
    public function fuelConsumption($distance)
    {
        return $this->fuel * $distance / 100;
    }

    /**
     * @return mixed
     */
    public static function getMaxConstant()
    {
      return max(self::NUMBER1, self::NUMBER2, self::NUMBER3);
    }
}
$car1 = new Car;
$car1->doors = 4;
$car1->price = 1500;
$car1->fuel = 10;
$car2 = new Car;
$car2->doors = 2;
$car2->price = 3000;
$car2->wheels = 6;
$car2->fuel = 20;
$car3 = new Car(5, 1000, 4, 12);
$car4 = new Car(3, 2000, 4, 14);


echo "Fuel consumption is " . $car3->fuelConsumption(2000) . "</br>";
echo "Fuel consumption is " . $car4->fuelConsumption(3000) . "</br>";
echo "</pre>";
echo Car::getMaxConstant();

echo "<h1> Задача 2</h1>";
