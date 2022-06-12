<?php
$conn = mysqli_connect("mysql:host=localhost;port=3306;dbname=testing",'root', '');
function add($a,$b){
    echo $a+$b;                                                   
}
add(6,7);
?>my