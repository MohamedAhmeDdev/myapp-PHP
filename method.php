<?php

class user{
    public $email;
    private $password;

    public function __construct($email, $password){
        $this ->email =$email;
        $this ->password=$password;
    }
//method
    public function sayHi(){
        echo "$this->email says hello and password is $this->password";
    }
}

$user1 =new user
("oisobeonc@)yahho.com", "124577");

//call a method
$user1->sayHi();


echo "<pre>";
 var_dump($user1);
 echo "</pre>";

?>