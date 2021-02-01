<?php
$sql = "SELECT * FROM tb_menuitems";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

echo "<div class='divrow'>";
foreach($result as $key => $row) {
    echo "<div class='float'>";
    echo "<h2>" . $row['productname'] . "</h2>"; 
    echo "€ " . $row['price'] . "<br />";
    echo $row['description'];
    echo "</div>";
    if ($key > 0 && $key + 1  % 3  == 0 ) {
        echo "</div class='divrow'><br /><div class='divrow>";
    }
}
echo "</div>";




    //echo "<h2>" . $row['productname'] . "</h2>"; 
    //echo "€ " . $row['price'] . "<br />";
   // echo $row['description'];
