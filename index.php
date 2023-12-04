<?php

class Person{
    public $age;
    public $name;

public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
}
public function sayHi(){
    return 'Hi I am ' . $this->name . ' ' . 'and my age: ' . $this->age;
}
 public function setName($name){      
    $this->name = $name;
 }

 public function setAge($age){
    $this->age=$age;
 }

 public function sayAge(){
     return $this->age;
 }

 public static function Smth(){
    echo 'gogogoo';
 }

}

// Person::Smth();


class Student{
    public $name = 'I am student ';
    public $age=90;
}
class Univercity{
    public $students;


    public function addStudent(Student $student){
        echo $student->name . ' ' . 'and my age - ' . $student->age;    }
}

$univer = new Univercity;

$person = new Person('Zhan', 24);
$student = new Student('Abay', 22);
// echo $student->name . ' ' . 'and my age - ' . $student->age;
$univer -> addStudent($student);


 
