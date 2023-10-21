<?php 
class car {
    var $model;
    var $color;
    var $doors;

    function __construct($xmodel, $xcolor, $xdoors){
        $this -> model = $xmodel;
        $this -> color = $xcolor;
        $this -> doors = $xdoors;

    }
    function doors($i){
        if($i === $this->doors){
            echo $this -> model;
        } else {
            echo "نعتذر لا يوجد سيارات بهذه المواصفات في الوقت الحالي";
        }
    }
}

class sportcar extends car {
    var $sport;
    function __construct($xmodel, $xcolor, $xdoors, $xsport){
        $this -> model = $xmodel;
        $this -> color = $xcolor;
        $this -> doors = $xdoors;
        $this -> sport = $xsport;

    }
}

$nissan = new car("Micra", "red",2);
$toyota = new car("yares", "white", 4);
$ford = new sportcar("focus", "black",6, "yes");

echo $ford -> sport;

