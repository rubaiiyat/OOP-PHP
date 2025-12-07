<?php

class Student{
    private $id;
    public $name;
    protected $dept;

    public function __construct($id,$name,$dept){
       $this->id=$id;
       $this->name=$name;
       $this->dept=$dept;
    }

    public function getStudent(){
        echo"ID: ".$this->id."\nName: ".$this->name."\nDept: ".$this->dept;
    }
}

$student1=new Student(1,"John","CSE");
$student1->getStudent();

echo $student1->name;
/* echo $student1->id; {Private- Can be accessed within the class only}
echo $student1->dept; {Protected- Can be accessed within the class and subclass only} */ 
?>