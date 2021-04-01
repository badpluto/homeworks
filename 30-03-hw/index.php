<?php
require 'books.php';
require 'classes.php';
require 'data.php';

try{
    $db = new PDO('mysql:host=localhost;dbname=book','root','');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $exception) {
    print "Error!: " . $exception->getMessage() . "</br>";
}







echo '<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Books</title>
 </head>
 <body>
   <p>
   <img src="/images/BookPdf.jpg" alt="" />
   <a href="/files/webappsdev.pdf">Люк Веллинг, Разработка веб приложений</a>
</p>
<p>
   <img src="/images/BookDoc.jpg" alt="" />
   <a href="/files/phpmysql.doc">Кевин Янк, PHP MySQL</a>
</p>
 </body>
 </html>';