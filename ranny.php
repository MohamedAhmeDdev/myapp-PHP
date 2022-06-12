<?php

$con= mysqli_connect("localhost","root","","lux","3306","");
if(mysqli_connect_errno()){
    echo "Failed to connect to my sqli : " .mysqli_connect_error();
    exit();
}
echo "rony";

?>
