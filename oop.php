<?php
class customer{
 public string $firstname;
 public string $lastname;

 public function __construct($firstName,$lastName){
     $this->firstName = $fname;
     $this->lastName = $last;

 }
}

$customer1 = new customer  ("john", "Doe");
$customer2 = new customer  ("roney", "clare");

echo "<pre>";
var_dump($customer1);
echo "</prev>";


class student{
    public string $firstname;
    public string $lastname;
    public string $age;
    public string $course;
   
    public function __construct($firstName,$lastName,$age,$course){
        $this->firstName = $fname;
        $this->lastName = $lname;
        $this->age = $age;
        $this->course = $course;
   
    }
   }
   
   $student1 = new customer  ("john", "Doe");
   $student2 = new customer  ("roney", "clare");

   echo "<pre>";
   var_dump($student1);
   echo "</prev>";
   

   class User{
       public $email;
       private $password;
       public function __construct($email,$password){
           $this->email =$email;
           $this->password = $password;
       }
       public function sayHi(){
           echo "$this->email says hello"
       }
   }

   $user1 = new user ("roneyy", "danco");

   $user1->sayHi();

   echo $user1->email;


   class trainer{
    public $userName;
    public $course;
    private $age;
    private $admissionNumber;
    public function __construct($userName,$course,$age,$admissionNumber){
        $this->$userName =$userName;
        $this->$course = $course;
        $this->$age = $age;
        $this->$admissionNumber = $admissionNumber;
    }
    public function greetings(){
        echo "$this->username is training"
    }
}

$trainer1 = new trainer ("tibe","ICT","23","9383");

$trainer1->sayHi();

echo $user1->email;


