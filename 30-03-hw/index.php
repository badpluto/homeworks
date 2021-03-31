<?php
//Урок 30-03 взаимодействие ПХП с БД
//Класс PDO
try {
    $dbtest = new PDO('mysql:host=localhost;dbname=w3schools', 'root', '');
    $dbtest->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $PDOStatement = $dbtest->prepare('SELECT * FROM Products WHERE Price > ?');
    $PDOStatement->execute([30]);
    $productsData = $PDOStatement->fetchAll();
//    var_dump($productsData); die;
    $priceValue = 20;
    $supplierID = 1;
    $PDOStatementTwo = $dbtest->prepare('SELECT * FROM Products WHERE Price < :price AND SupplierID = :SupplierID');
    $PDOStatementTwo->bindParam(':price', $priceValue, PDO::PARAM_INT );
    $PDOStatementTwo->bindParam(':SupplierID', $supplierID, PDO::PARAM_INT );
    $PDOStatementTwo->execute();
    $productsData2 = $PDOStatementTwo->fetchAll();
    var_dump($productsData2); die;


} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "</br>";
    die();
}