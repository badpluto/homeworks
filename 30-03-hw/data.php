<?php

require_once 'classes.php';

try {
    $db = new PDO('mysql:host=localhost;dbname=book', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT * FROM books';
    $sqlStatement = $db->prepare($sql);
    $sqlStatement->execute();
    $books = $sqlStatement->fetchAll(PDO::FETCH_ASSOC);

    $publicationsBooks = [];

    foreach ($books as $book) {
        $className = 'Book' . ucfirst($book['type']);
        $publicationsBooks[] = new $className($book);
    }

} catch (PDOException $exception) {
    print "Error!: " . $exception->getMessage() . "</br>";
}
