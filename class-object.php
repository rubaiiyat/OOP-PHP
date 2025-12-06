<?php

class Student{
    public $id;
    public $name;
    public $email;

    public function introduce(){
        echo "ID: $this->id, Name: $this->name, Email: $this->email";
    }
}

$student1= new Student();
$student1->id=1;
$student1->name= "John";
$student1->email= "john@gmail.com";

$student1->introduce();

?>