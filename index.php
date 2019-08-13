<?php

include_once 'MyList.php';

$myList = new MyList();

$myList->add(0,0);
$myList->add(1,2);
$myList->add(2,4);
$myList->add(3,6);
$myList->add(4,8);
$myList->add(5,8);
$myList->add(6,8);
$myList->add(7,8);
$myList->add(8,8);
$myList->add(9,8);
//$myList->add(10,8);


echo 'Count: '.count($myList->getArrayList()).'<br>';
var_dump($myList->getArrayList());
echo '<br>';
foreach ($myList->getArrayList() as $value)
{
    echo $value.' ';
}
echo '<br>';
echo $myList->getCapacity();

echo '<br>Update <br>';
$myList->update(6,10);
foreach ($myList->getArrayList() as $value)
{
    echo $value.' ';
}