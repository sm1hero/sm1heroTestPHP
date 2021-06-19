<?php
const PI = 3.14;


function getArea ($object) {
    
    if ($object instanceof Triangle) {

        $object -> area = $object -> width / 2 * $object -> heigth; 
        
    } else if ($object instanceof Rectangle) {

        $object -> area = $object -> width * $object -> heigth; 

    } else if ($object instanceof Circle) {

        $object -> area = ($object -> radius ** 2) * PI;

    } else {

        echo "ERROR!!";
        return 0;
        
    }
}

function getRandField ($object) {

    if ($object instanceof Triangle) {

        $object -> width  = rand (1, 100);
        $object -> heigth = rand (1, 100);

    } else if ($object instanceof Rectangle){

        $object -> width  = rand (1, 100);
        $object -> heigth = rand (1, 100);

    } else if ($object instanceof Circle){
        
        $object -> radius = rand (1, 100);

    } else {
        echo "ERROR!!";
        return 0;
    }  

}

function getRandObject() {

    $rand_class = rand(0, 2);

    switch ($rand_class) {
        case 0:
            $rand_object = new Triangle();
        break;

        case 1:
            $rand_object = new Rectangle();
        break;

        case 2:
            $rand_object = new Circle();
        break;
    }

    return $rand_object;

}

function getObjectType ($object) {

    if ($object instanceof Triangle) {

        return "Triangle";
        
    } else if ($object instanceof Rectangle) {

        return "Rectangle";

    } else if ($object instanceof Circle) {
        
        return "Circle";

    } else {
        echo "ERROR!!";
        return 0;
    }   
}

function saveObject ($object, $fileName) {

    $object_save = serialize($object);
    file_put_contents($fileName, $object_save );

}

function loadObject($fileName) {

    $object = file_get_contents($fileName);
    $object_load = unserialize($object);

    return $object_load;
}

function sortArray ($object_1, $object_2) {
    if ($object_1 -> area == $object_2 -> area) return 0;
    return ($object_1 -> area > $object_2 -> area) ? -1 : 1; 
}

?>