<?php 
//a program to implement a binary search algorithm on a sorted array
function binarySearch($arr,$num){
    $low=0;
    $high=count($arr)-1;
    while($low<=$high){
        $mid=floor(($low+$high)/2);
        if($arr[$mid]==$num){
            return $mid;
        }
        else if($arr[$mid]<$num){
            $low=$mid+1;
        }
        else{
            $high=$mid-1;
        }
    }
    return -1;
}
$arr=array(1,2,3,4,5,6,7,8,9,10);
$num=10;
$result=binarySearch($arr,$num);
if($result==-1){
    echo "Element not found";
}
else{
    echo "Element found at index ".$result;
}



?>