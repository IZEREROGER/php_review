<?php 
//using error handling and exception, write a program to divide two numbers by taking care of infinity and indeterminate form
function divide($num1,$num2){
    if($num2==0){
        throw new Exception("Division by zero");
    }
    else{
        return $num1/$num2;
    }
}
try{
    echo divide(5,0);
}
catch(Exception $e){
    echo $e->getMessage();
}
echo "<br>";
try{
    echo divide(5,2);
}
catch(Exception $e){
    echo $e->getMessage();
}
echo "<br>";
try{
    echo divide(5,1);
}
catch(Exception $e){
    echo $e->getMessage();
}


?>