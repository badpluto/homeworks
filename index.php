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
//Задача 2
abstract class Figure {
    public $square;
    public $color;
    public function __construct(int $square, string $color){
        $this->square = $square;
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function infoAbout(){
        return "Это геометрическая фигура!";
    }
    abstract public function getArea();
}
class Rectangle extends Figure{
    const SIDES_COUNT = 4;
    private $a;
    private $b;
    public function __construct(int $a, int $b){
        $this->a = $a;
        $this->b = $b;
    }
    public function getArea(){
        return $this->a * $this->b;
    }
    final public function infoAbout(){
        return 'Это ' . __CLASS__ . '. У него' . self::SIDES_COUNT . ' стороны. </br>';
    }

}
class Triangle extends Figure{
    const SIDES_COUNT = 3;
    private $a;
    private $b;
    private $c;
    public function __construct(int $a, int $b,int $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getArea(){
        return $this->a * $this->b * $this->c;
    }
    final public function infoAbout(){
        return 'Это ' . __CLASS__ . '. У него' . self::SIDES_COUNT . ' стороны. </br>';
    }
}
class Square extends Figure{
    const SIDES_COUNT = 4;
    private $a;
    public function __construct(int $a){
        $this->a = $a;
    }
    public function getArea(){
        return $this->a * $this->a;
    }
    final public function infoAbout(){
        return 'Это ' . __CLASS__ . '. У него' . self::SIDES_COUNT . ' стороны. </br>';
    }
}

$rectangle1 = new Rectangle(2, 3);
$rectangle2 = new Rectangle(3, 6);
$triangle1 = new Triangle(2, 3, 5);
$triangle2 = new Triangle(5, 6, 7);
$square1 = new Square(2);
$square2 = new Square(4);

echo $rectangle1->infoAbout();
echo $triangle1->infoAbout();
echo $square1->infoAbout();
echo "</pre>";
echo $rectangle1->getArea() . '<br>';
echo $rectangle2->getArea() . '<br>';
echo "</pre>";
echo $triangle1->getArea() . '<br>';
echo $triangle2->getArea() . '<br>';
echo "</pre>";
echo $square1->getArea() . '<br>';
echo $square2->getArea() . '<br>';
echo "</pre>";