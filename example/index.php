<?php
include '../vendor/autoload.php';
use Hack4mer\Diffon\Diffon;

$diffon = new Diffon();
$diffon->setSource("./v1")->setDestination("./v2");

echo '<pre>';
print_r($diffon->diff());
?>