<?php

$sql = "INSERT INTO tb_cars (brand, type, bouwjaar, kilometerstand, brandstof, transmission, photo, price, discountprice)
VALUES ('$brand', '$type', '$bouwjaar', '$kilometerstand', '$brandstof', '$transmission', '$photo', '$price', '$discountprice')";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); 
