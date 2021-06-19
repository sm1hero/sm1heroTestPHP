<?php

class Figure {
    public $area;
}

class Angles extends Figure{
    public $width;
    public $heigth;

    function printFields() {
        echo "__Fields__ <br>";
        echo "Width: " . $this -> width  . '<br>';
        echo "Height: ". $this -> heigth . '<br>';
        echo "Area: "  . $this -> area   . '<br>';
    }
}

class Triangle extends Angles {
   
}

class Rectangle extends Angles {
    
}

class Circle extends Figure{
    public $radius;

    function printFields() {
        echo "__Fields__ <br>";
        echo "Radius: " . $this -> radius  . '<br>';
        echo "Area: "   . $this -> area    . '<br>';
    }
}

?>