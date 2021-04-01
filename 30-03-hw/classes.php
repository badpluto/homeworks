<?php

abstract class Book
{
   public $id;
   public $name;
   public $author;
   public $filePath;
   public $sortOrder;
   public function __construct(int $id, string $name, string $author, string $filePath, int $sortOrder)
   {
       $this->id = $id;
       $this->name = $name;
       $this->author = $author;
       $this->filePath = $filePath;
       $this->sortOrder = $sortOrder;
   }
   abstract public function printInfo();

}
class BookPdf extends Book
{
    final public function printInfo()
    {
        return $this->author . $this->name;

    }
}
class BookTxt extends Book
{
    final public function printInfo()
    {
        return $this->author . $this->name;

    }

}
class BookDoc extends Book
{
    final public function printInfo()
    {
        return $this->author . $this->name;

    }

}