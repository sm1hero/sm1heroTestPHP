<?php

class Figure {
    public $area = 0;
}

class Angles extends Figure{
    public $width;
    public $heigth;

    function __construct($width, $heigth) {
        $this -> width  = $width;
        $this -> heigth = $heigth;
    }

    function printFields() {
        echo "Fields: <br>";
        echo "Width: " . $this -> width  . '<br>';
        echo "Height: ". $this -> heigth . '<br>';
        echo "Area: "  . $this -> area   . '<br>';
    }
}

class Triangle extends Angles {
    function __construct($width, $heigth) {
        parent::__construct($width, $heigth);
    }
}

class Rectangle extends Angles {
    function __construct($width, $heigth) {
        parent::__construct($width, $heigth);
    }
}

class Circle extends Figure{
    public $radius;

    function __construct($radius) {
        $this -> radius = $radius;
    }

    function printFields() {
        echo "Radius: " . $this -> radius  . '<br>';
        echo "Area: "   . $this -> area    . '<br>';
    }
}

?>