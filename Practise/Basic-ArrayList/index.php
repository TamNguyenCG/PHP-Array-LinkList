<?php
include_once "ArrayList.php";

$array = new ArrayList();
$array->add("Tam");
$array->add("song");
$array->add("tai");
$array->add("Ha Noi");

echo "<pre>";
print_r($array);
echo "</pre>";

echo $array->get(0)." ";
echo $array->get(1)." ";
echo $array->get(2)." ";
echo $array->get(3)."<br>";

echo $array->size();