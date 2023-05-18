<?php 
//a program to implement a basic search functionality on an array
function search($arr,$num){
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]==$num){
            return $i;
        }
    }
    return -1;
}
$arr=array(1,2,3,4,5,6,7,8,9,10);
$num=10;
$result=search($arr,$num);
if($result==-1){
    echo "Element not found";
}
else{
    echo "Element found at index ".$result;
}

?>