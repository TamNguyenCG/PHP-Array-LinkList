<?php
include_once "LinkList.php";
include_once "Node.php";

$linkList = new LinkList();

$linkList->addFirstNode(15);
$linkList->addFirstNode(150);
$linkList->addFirstNode(1500);
$linkList->addFirstNode(10);
$linkList->addFirstNode(100);

$linkList->removeIndex(3);
$linkList->removeObj(10);
echo "<pre>";
print_r($linkList);
echo "</pre>";