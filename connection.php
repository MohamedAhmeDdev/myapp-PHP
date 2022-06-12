<?php

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=foodplusdb",'root', '');
$statement =$pdo->prepare('SELECT * FROM CUSTOMERS');

$statement->execute();
$customers = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($customers);
?>