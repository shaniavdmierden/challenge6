<?php

$sql = "INSERT INTO tb_menuitems (productname, price, description)
VALUES ('$productname', '$price', '$description')";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); 
