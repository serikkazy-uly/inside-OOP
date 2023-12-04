<?php



class Person{
    public $age;
    public $name = 'Damik';




public function sayHi($name){
    echo 'Hi I am ' . $name;
}
 public function setName($name){      
    $this->name = $name;
 }
}

$myPerson = new Person();

// $myPerson->setName('Rahim');
// $myPerson->setName('Go');

echo  $myPerson->name;