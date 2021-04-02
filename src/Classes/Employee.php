<?php


namespace Src\Classes;


class Employee extends User
{
    private $position;
    private $salary;

    public function __construct(string $name, int $age, string $gender, string $position, int $salary)
{
    parent::__construct($name, $age, $gender);
    $this->position = $position;
    $this->salary = $salary;
}

    public function sayHello()
{
    return 'Hello my name is' . $this->name;
}
}