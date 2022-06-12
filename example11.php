<?php
//associative array
$score = array("Mary"=>80,"Peter"=>70,"Juma"=>100);

//echo $score['Mary'];
//foreach loop
foreach($score as $key=>$value){
    echo $key ." scored  ". $value ."<br>";
}
?>