<?php 

//To check if thea given string contain specific substring
function checkSubString($String,$substring){

if (strpos($String, $substring)!== false){
    return true;
}
else {
    return false;
}

}

$String = "Hi mine!";
$substring = "mine";
if (checkSubString($String,$substring)) {

    echo "The string contains the substring.";
}
else {
    echo "The does not contain the substring.";
}



?>