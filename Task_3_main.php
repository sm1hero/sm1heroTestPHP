<?php

include "Task_3_classes.php";
include "Task_3_function.php";

$object = array(2);

//Obj 1 init
$object[0] = getRandObject();
getRandField($object[0]);
getArea($object[0]);

//Obj 2 init
$object[1] = getRandObject();
getRandField($object[1]);
getArea($object[1]);

//Obj 3 init
$object[2] = getRandObject();
getRandField($object[2]);
getArea($object[2]);

//Сохранение объектов в файл
saveObject($object[0], 'object_1.txt');
saveObject($object[1], 'object_2.txt');
saveObject($object[2], 'object_3.txt');

//Восстановление объектов из файла (далее мы будем работать с восстановленными)
$object_load = array(2);

$object_load[0] = loadObject('object_1.txt');
$object_load[1] = loadObject('object_2.txt');
$object_load[2] = loadObject('object_3.txt');

//Сортировка и вывод данных по убыванию площади фигуры.
usort($object_load, "sortArray");

for ($i = 0; $i < 3; $i++) {
    echo "Type: " . getObjectType($object_load[$i]) . '<br>';
    $object_load[$i] -> printFields();
    echo '<br>';
}


?>