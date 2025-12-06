<?php

class Student{
    public $id;
    public $name;
    public $email;

    public function __construct($id, $name, $email){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getStudent(){
        echo "ID: $this->id, Name: $this->name, Email: $this->email";
    }
}

$student1=new Student(1, "John","john@gmail.com");

$student1->getStudent();

?>

<!-- Construct can automatically run when object is created -->