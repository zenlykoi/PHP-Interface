<?php

// interfaces
require_once "interfaces/Animal.php";
require_once "interfaces/Bird.php";
require_once "interfaces/Reptile.php";

// classes
require_once "classes/Parrot.php";
require_once "classes/Crocodile.php";

use Animal\Crocodile;
use Animal\Parrot;

$crocodile = new Crocodile('Croc_1');
$parrot = new Parrot('Parr_1');
$parrot2 = new Parrot('Parr_2');

$crocodile->isAlive()->swim();
$parrot->isAlive()->fly();
$crocodile->kill($parrot);
$parrot->isAlive();

// $parrot->isAlive();
// $parrot2->isAlive();
// $parrot->flyWith($parrot2);