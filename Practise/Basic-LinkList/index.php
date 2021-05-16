<?php

include_once "Node.php";
include_once "LinkedList.php";

$linkedList = new LinkedList();

$linkedList->insertFirst(10);
$linkedList->insertFirst(12);
$linkedList->insertFirst(15);
$linkedList->insertLast(20);
$linkedList->insertLast(30);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo "Total size is: ".$totalNodes;
echo "<br>";
echo implode('-', $linkData);
