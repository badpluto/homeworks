<?php
//Урок Компоузер
require __DIR__ . '/vendor/autoload.php';
var_dump(__DIR__); die;
use Src\Classes\Customer;
use Src\Classes\Employee;

// Возможность обрабатівать сабклассі одним образом, при том что реализация конкретного сабкласса
// может отличаться
//Возможность выбора реализации выполнения по ходу выполнения программы
$customer = new Customer('Vadim', 26, 'M', '937-99-992', 'Puskina 45');
$employee = new Employee('Vadim', 26, 'M', 'administrator', 1000);
$userType = 'customer';
//$userType = 'employee';
if ($userType === 'customer') {
    $userObject = new Customer('Vadim', 26, 'M', '937-99-992', 'Puskina 45');
} elseif ($userType === 'employee') {
    $userObject = new Employee('Vadim', 26, 'M', 'administrator', 1000);
}
var_dump($employee);
die;