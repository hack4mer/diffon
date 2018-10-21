<?php
include '../vendor/autoload.php';
use Hack4mer\Diffon\Diffon;


$dir1 = "./v3";
$dir2 = "./v4";

$diffon = new Diffon();
$diffon->setSource("./v1")->setDestination("./v2")->setRecursiveMode(true);

echo '<pre>';
print_r($diffon->diff());
?>