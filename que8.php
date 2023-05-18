<?php 
//a program that calculates the distance between two points on a 2D plane. 
//The two points are point1(2,3) and point2(4,5)
function distance($x1,$y1,$x2,$y2){
    $dist=sqrt(pow($x2-$x1,2)+pow($y2-$y1,2));//formula for distance 
    return $dist;
}
echo "The distance between point1(2,3) and point2(4,5) is ".distance(2,3,4,5);




?>