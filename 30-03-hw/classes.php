<?php

abstract class Book
{
   protected $id;
   protected $name;
   protected $author;
   protected $filePath;
   protected $type;
   protected $sortOrder;
   public function __construct(array $row)
   {
       $this->id = $row['id'];
       $this->name = $row['name'];
       $this->author = $row['author'];
       $this->filePath = $row['file_path'];
       $this->type = $row['type'];
       $this->sortOrder = $row['sort_order'];
   }
   abstract public function printInfo();

}
class BookPdf extends Book
{
    final public function printInfo()
    {
        echo '<p>';
        echo '<img style="margin-right:20px" width="50px" src="images/' . $this->type . '.png" alt="pdf">';
        echo '<a href="' . $this->filePath . '">' . $this->author . ', ' . $this->name . '</a>';
        echo '</p>';
    }
}
class BookTxt extends Book
{
    final public function printInfo()
    {
        echo '<p>';
        echo '<img style="margin-right:20px" width="50px" src="images/' . $this->type . '.png" alt="pdf">';
        echo '<a href="' . $this->filePath . '">' . $this->author . ', ' . $this->name . '</a>';
        echo '</p>';
    }

}
class BookDoc extends Book
{
    final public function printInfo()
    {
        echo '<p>';
        echo '<img style="margin-right:20px" width="50px" src="images/' . $this->type . '.png" alt="pdf">';
        echo '<a href="' . $this->filePath . '">' . $this->author . ', ' . $this->name . '</a>';
        echo '</p>';
    }

}