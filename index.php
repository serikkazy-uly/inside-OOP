<?php

class Person{
    public $age;
    public $name;


public function sayHi(){
    return 'Hi I am ' . $this->name . ' ' . 'and my age: ' . $this->age;
}
 public function setName($name){      
    $this->name = $name;
 }

 public function setAge($age){
    $this->age = $age;
 }

 public function sayAge(){
     return $this->age;
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
$myPerson->sayAge();
echo $myPerson->sayHi(); 



// var_dump( $myPerson->sayAge );