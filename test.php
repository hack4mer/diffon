<?php
include 'vendor/autoload.php';
use Hack4mer\Diffon\Diffon;

$diffon = new Diffon();
$diffon->setSource("b")->setDestination("b");

print_r($diffon->showDirs());
?>