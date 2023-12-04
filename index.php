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

Person::Smth();


 
