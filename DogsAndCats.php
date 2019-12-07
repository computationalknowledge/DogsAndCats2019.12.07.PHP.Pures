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

for ($counter=1; $counter <= 100; $counter++){
$fido = new Dog(); 
$fido->name = (string)$counter;
$dogHouse[] = $fido;

$fifi = new Cat();
$fifi->name = (string)$counter;
$catHouse[] = $fifi;

}

var_dump($dogHouse);
var_dump($catHouse);


?>
