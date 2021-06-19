<?php

include "Task_3_classes.php";
include "Task_3_function.php";

$object = array(2);

//Создание объектов
for ($idx = 0; $idx < 3; $idx++) {
    $object[$idx] = getRandObject();
    getRandField($object[$idx]);
    getArea($object[$idx]);
}

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