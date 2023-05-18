<?php 
//a program to calculate the area of a circle

function AreaOfCircle($radius){
    $area=pi() * pow($radius,2);
    return $area;
}

$radius=10;
echo "The area of circle with the radius of $radius is ".AreaOfCircle($radius)."<br>"."<br>";


//a program that calculate the perimeter of circle

function PerimeterOfCircle($radius){
    $dimaeter=($radius *2)*pi();
    return $dimaeter;
}

$radius=10;
echo "The perimeter of circle with the radius of $radius is ".PerimeterOfCircle($radius);

?>