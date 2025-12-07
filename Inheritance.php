<?php

class Student{
    public $id;
    public $name;
    public $email;


    public function __construct($id,$name,$email){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    
    protected function getStudent(){
        echo "ID: $this->id, Name: $this->name, Email: $this->email";
    }

    
}

class Teacher extends Student{
        public function message(){
            echo "Am I Student or Teacher? <br>";
            $this->getStudent();
        }   

}

$student1=new Teacher(1, "John","john@gmail.com");

$student1->message();

?>