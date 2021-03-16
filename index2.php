<?php
//1
$a = 10;
$b = 2;
$c = 5;
$result = $a + $b + $c;
var_dump($result);
//2
$a = 17;
$b = 10;
$c = $a - $b;
$d = $c;
$result = $d + $c;
var_dump($result);
//3
$name = 'Vlad';
echo("Привет $name");
//4
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
//5
$arr = [
    'ru'=>['голубой', 'красный', 'зеленый'],
    'en'=>['blue', 'red', 'green'],
];
var_dump($arr['ru'][0]);
//6
$arr = [2,5,3,9];
$a = $arr[0] * $arr[1];
$b = $arr[2] * $arr[3];
$result = $a + $b;
echo($result);
//7
$arrayDay = [1=>'Поенедельник', 2=>'Вторник',3=>'Среда',4=>'Четверг',5=>'Пятница',6=>'Суббота',7=>'Воскресенье'];
var_dump($arrayDay[6]);
//8
$min = 10;
if ($min < 15)
    echo('1');
if ($min > 15 && $min < 30)
    echo('2');
if ($min > 30 && $min < 45)
    echo('3');
if ($min > 45)
    echo('4');
//9
$num = 2;
switch ($num) {
    case 1:
        echo "зима";
        break;
    case 2:
        echo "весна";
        break;
    case 3:
        echo "лето";
        break;
    case 4:
        echo "осень";
        break;
}
$result = $num;
//10
$a = 3;
$b = 5;
if ($a <= 1 && $b >= 3) {
    echo($a + $b);}
else{
    echo($a - $b);
}