<?php
$sql = "SELECT * FROM tb_cars INNER JOIN tb_image ON tb_cars.id = tb_image.car_id";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

$pathtoproject = "/Challenge6/challenge 6";

echo "<div class='row'>";
foreach($result as $key => $row) {
    echo "<div class='col-lg-4'>";
    echo '<div class="trainer-item">';
    echo '<div class="image-thumb">';
    echo "<img src='" . $pathtoproject . "/autoimages/".$row['id'] . "/" . $row['name'] . "' />";
    //echo "<img src='/Challenge6/challenge 6/autoimages/1/Opel.png' />";
    echo "</div>"; //end image
    echo '<div class="down-content">';
    echo "<span>";
    echo "<del><sup>€</sup>" . $row['price'] . "</del> &nbsp; <sup>€</sup>" . $row['discountprice'];
    echo "</span>"; //einde prijs
    echo "<h4>" . $row['brand'] . "," . "<br>" . $row['type'] . "</h4>";// brand/type
    echo "<p> <i class='fa fa-dashboard'></i> " . $row['price'] . " km" . "&nbsp;&nbsp;&nbsp";
    echo "<i class='fa fa-cube'></i> " . $row['bouwjaar'] . "&nbsp;&nbsp;&nbsp";
    echo "<i class='fa fa-cog'></i> " . $row['transmission'] . "&nbsp;&nbsp;&nbsp </p>";
    
    echo '<ul class="social-icons"><li><a href="car-details.php">+ View Car</a></li></ul>';
    echo "</div>";
    echo "</div>";
    echo "</div>";
}