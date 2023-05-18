<?php 
//a program that generates a random password of a given length
function randomPassword($length){
    $chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password="";
    for($i=0;$i<$length;$i++){
        $password.=$chars[rand(0,strlen($chars)-1)];
    }
    return $password;
}
echo "The random password is ".randomPassword(15);

?>