<?php
function BMI(){
    $weight = 90;
    $height = 6.7;
    $bmi = $weight / ($height*$weight);

    echo $bmi . "kgs";
}
BMI();
?>