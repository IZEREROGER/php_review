<?php 
// a program that converts a Roman numeral to its equivalent decimal value.
function romanToDecimal($roman){
    $roman=strtoupper($roman);
    $romanArray=array("M"=>1000,"CM"=>900,"D"=>500,"CD"=>400,"C"=>100,"XC"=>90,"L"=>50,"XL"=>40,"X"=>10,"IX"=>9,"V"=>5,"IV"=>4,"I"=>1);
    $decimal=0;
    foreach($romanArray as $key=>$value){
        while(strpos($roman,$key)===0){
            $decimal+=$value;
            $roman=substr($roman,strlen($key));
        }
    }
    return $decimal;
}
$roman="MCMXC";
echo "Roman numeral ".$roman." is equivalent to decimal value ".romanToDecimal($roman);

?>