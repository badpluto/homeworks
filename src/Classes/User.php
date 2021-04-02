<?php


namespace Src\Classes;


abstract class User implements IUser
{
    const USER_REGION = ' RU';
    public static $classDesription = 'Этот класс описывает наших пользователей';

    public static function getClassDescription()
    {
        return self::$classDesription . self::USER_REGION;
    }

    // abstract function howIsYouDay();
    protected $name;
    protected $age;
    protected $gender;

    public function __construct(string $name, int $age, string $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    protected function tellAboutYourSelf()
    {
        return 'My name is ' . $this->name . '. My age ' . $this->age . '</br>';
    }

    public function sayHello()
    {
        $this->tellAboutYourSelf();
    }
}