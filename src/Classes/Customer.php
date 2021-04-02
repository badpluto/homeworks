<?php


namespace Src\Classes;

class Customer extends User
{
    private $phoneNumber;
    private $adress;

    public function __construct(
        string $name,
        int $age,
        string $gender,
        string $phoneNumber,
        string $adress
    )
    {
        parent::__construct($name, $age, $gender);
        $this->phoneNumber = $phoneNumber;
        $this->adress = $adress;
    }

    public function sayHello()
    {
        return 'Hi my name is' . $this->name;
    }
}