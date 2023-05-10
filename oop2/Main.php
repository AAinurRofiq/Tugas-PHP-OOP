<?php
require_once 'Product.php';
require_once 'CDMusic.php';
require_once 'CDRack.php';

$myCDMusic = new CDMusic('Rungkad');
$myCDMusic->setPrice(100000);
$myCDMusic->setDiscount(10);
$myCDMusic->setArtist('Happy Asmara');
$myCDMusic->setGenre('Dangdut');

echo "My CD MUSIC<br>";
echo "Name: ".$myCDMusic->getName()."<br>";
echo "Price: ".$myCDMusic->getPrice()."<br>";
echo "Discount: ".$myCDMusic->getDiscount()."<br>";
echo "Price after discount: ".(100 - $myCDMusic->getDiscount())/100 * $myCDMusic->getPrice()."<br>";
echo "Artist: ".$myCDMusic->getArtist()."<br>";
echo "Genre: ".$myCDMusic->getGenre()."<br>";

$myCDRack = new CDRack('Rack Jati');
$myCDRack->setPrice(1000000);
$myCDRack->setDiscount(15);
$myCDRack->setModel('Jati Wonosobo');
$myCDRack->setCapacity(50);

echo "<br>";
echo "My CD Rack<br>";
echo "Name: ".$myCDRack->getName()."<br>";
echo "Price: ".$myCDRack->getPrice()."<br>";
echo "Discount: ".$myCDRack->getDiscount()."<br>";
echo "Price after discount: ".(100 - $myCDRack->getDiscount())/100 * $myCDRack->getPrice()."<br>";
echo "Model: ".$myCDRack->getModel()."<br>";
echo "Capacity: ".$myCDRack->getCapacity()."<br>";

?>