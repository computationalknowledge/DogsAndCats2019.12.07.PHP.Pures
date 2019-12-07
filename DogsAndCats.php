<?php
$dogHouse = array();
$catHouse = array();
$NumberOfDogWinners = 0;
$NumberOfCatWinners = 0;

$breeds = array("frenchie", "alsanse", "atlantic", "swiss", "woodland" );
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
$fido->breed = (string)$breeds[rand(0,4)];
$dogHouse[] = $fido;

$fifi = new Cat();
$fifi->name = (string)$counter;
$fifi->breed = (string)$breeds[rand(0,4)];
$catHouse[] = $fifi;
}

for ($battle=1; $battle <= 100; $battle++){
	$catCompetitor = array_pop($catHouse);
	$dogCompetitor = array_pop($dogHouse);
	if ($dogCompetitor->getStrength() > $catCompetitor->getStrength()){
		$NumberOfDogWinners++;
	}
	if ($catCompetitor->getStrength() > $dogCompetitor->getStrength()){
		$NumberOfCatWinners++;
	}
}
echo "Cat Winners: ".$NumberOfCatWinners."\r\n";
echo "Dog Winners: ".$NumberOfDogWinners."\r\n";

//var_dump($dogHouse);
//var_dump($catHouse);
?>
