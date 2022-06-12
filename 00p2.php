<?php

class students{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this ->name =$name;
        $this ->age = $age;
    }
}

$students1 =new students
("mohamed", 30);

echo "<pre>";
var_dump($students1);
echo "</pre>";
?>