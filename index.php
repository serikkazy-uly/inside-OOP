<?php

class Person{
    public $age;
    public $name;


public function sayHi(){
    echo 'Hi I am ' . $this->name;
}
 public function setName($name){      
    $this->name = $name;
 }

 public function setAge($age){
    $this->age = $age;
 }
}

$myPerson = new Person();
// $myPerson->setName('Rahim ');
echo  $myPerson->name; 

$myPerson2 = new Person();
// $myPerson2->setName('Fara');
echo $myPerson2->name;


$myPerson ->setAge(34);
// echo $myPerson->age;

$myPerson->setName('Danik');
$myPerson->sayHi(); 