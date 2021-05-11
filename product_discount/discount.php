<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $listPrice = $_POST["money"];

    if ($listPrice < 1000000) {
        echo "Chưa đủ điều kiện khuyến mãi!!!";
    } elseif ($listPrice > 1000000 && $listPrice < 5000000) {
        $discountAmount = $listPrice * 0.15;
        echo "Discount Amount: " . $discountAmount;
        echo "<br>";
        echo "Discount Price: " . $listPrice - $discountAmount;

    } else {
        $discountAmount = $listPrice * 0.2;
        echo "Discount Amount: " . $discountAmount;
        echo "<br>";
        echo "Discount Price: " . $listPrice - $discountAmount;
    }
}


?>