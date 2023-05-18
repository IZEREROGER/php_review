<?php 

//to find the second largest number in the array
function secondLagerst($myarray){
    $max1=$myarray[0];
    $max2=$myarray[0];

    for ($i=0; $i<count($myarray);$i++){
        if($myarray[$i]> $max1){
            $max2=$max1;
            $max1=$myarray[$i];

        }elseif ($myarray[$i]>$max2 && $myarray[$i]!=$max1) {
            $max2=$myarray[$i];
        }
    }
    return $max2;

}
$myarray = array(1,2,3,4,5);
echo "The second largest element in the array is: ".secondLagerst($myarray)."<br>"."<br>";
//to find the largest number
function findLargest($array) {
    $largest = $array[0];

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $largest) {
            $largest = $array[$i];
        }
    }

    return $largest;
}

$array = array(1, 2, 3, 4, 5);

echo "The largest element in the array is: " . findLargest($array);
?>