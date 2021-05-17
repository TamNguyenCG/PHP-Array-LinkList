<?php
use Arraylist\ArrayList;

$constArray = [1,2,3,4];
$arraylist = new ArrayList($constArray,8);

//var_dump($arraylist->addAll([5,6,7,8])) ;

$arraylist->add(9);
$arraylist->add(10);
$arraylist->add(11);

$arraylist->insert(1,100);
$arraylist->insert(2,100);
$arraylist->remove(2);
$arraylist->remove(2);

$arraylist->reset();

echo "<pre>";
print_r($arraylist);
echo "</pre>";