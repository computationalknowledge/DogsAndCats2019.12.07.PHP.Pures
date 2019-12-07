<?php
$dogHouse = array();
$catHouse = array();
class Dog
{
    // Declare  properties
    public $name;
    public $breed;
    
    // Method to get the strength
    public function getStrength(){
        return (rand(1,100));
    }
}
class Cat
{
    // Declare  properties
    public $name;
    public $breed;
    
    // Method to get the strength
    public function getStrength(){
        return (rand(1,100));
    }
}

for ($counter=0; $counter <= 100; $counter++){

$fido = new Dog();
// echo $fido->getStrength();

$fifi = new Cat();
// echo $fifi->getStrength();
}

?>
