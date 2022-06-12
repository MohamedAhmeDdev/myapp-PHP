<?php

class trainir{
    public $username;
    public $course;
    private $age;
    private $admisionNumber;


     public function __construct($username , $course ,$age ,$admisionNumber){
         $this ->username =$username;
         $this ->course =$course;
         $this ->age =$age;
         $this ->admisionNumber =$admisionNumber;
     }

     
     public function hello(){
        echo "$this->username is training";
     }

     public function wel(){
        echo "$this->username is training";
     }
     
}

//argument
$trainir1 =new trainir("juma","software",25,1234);
$trainir2 =new trainir("abdi","software",25,1234);

$trainir1 ->hello();
echo "<br>";
$trainir2 ->wel();



echo "<pre>";
 var_dump($trainir1);
 echo "</pre>";

 echo "<pre>";
 var_dump($trainir2);
 echo "</pre>";
?>
