<?php

class user{
    public $username;
    private $password;

    public function __construct($username, $password){
        $this->username =$username;
        $this->password =$password;
    }

        public function login(){
            echo "$this->username has loged in";
        }
        public function logout(){
            echo "$this->username has loged out1";
        }
}
//extend is used for inheritance
    class student extends user{
        public $admissionnumber;

        public function __construct($username, $password, $admissionnumber){
            parent::__construct($username, $password);
            $this->admissionnumber=$admissionnumber;
        }

            public function learn(){
                echo "$this->username this username is learning" ;
        }
    }

    $jack= new student("jack108", 12344, 2333);
    $jack->learn();
    echo "<br>";
    

    class Trainer extends User{
        public $employeeID;
        
        public function __construct($username,$password,$employeeID){
            parent::__construct($username,$password);
            $this->employeeID=$employeeID;
        }
        public function trainer(){
            echo "$this->username is teaching";
        }
    
       
    }
    $kamau= new Trainer("sqsjun",13414,1278);
    $kamau->trainer();
    
?>