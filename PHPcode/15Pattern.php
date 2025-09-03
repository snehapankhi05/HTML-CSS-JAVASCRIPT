<?php
$rows = 5; // Number of rows

for($i = 1; $i <= $rows; $i++){
    $pattern = "";
    for($j = 1; $j <= $i; $j++){
        // Alternate between 1 and 0
        if(($j + $i) % 2 == 0){
            echo "1";
        } else {
            echo "0";
        }
    }
    echo  "<br>";
}
?>
