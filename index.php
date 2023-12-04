<?php



class Person{
    public $age;
    public $name;




public function sayHi($name){
    echo 'Hi I am ' . $name;
}
 public function setName($name){      
    $this->name = $name;
 }
}

$myPerson = new Person();
$myPerson2 = new Person();

echo $myPerson->setName('Rahim ');
echo  $myPerson->name; 

echo $myPerson2->setName('Fara');
echo $myPerson2->name;