<?php
declare (strict_types=1); //declaring a type so that the inputs adhere to their typing
function dbug($value)
{

    echo '<pre style="background-color:black; 
    color:white;
    padding:15px;
    overflow:auto;">';

    var_dump($value);
    echo '</pre>';

}
function dd($value) {
    dbug($value);
    die("There has been an error!!!");
}
//------------------------------------------------------------------------------------------------------
//creating a function
function calcul ($a,$b) { //function calcul (int $a, int $b) int 
    $c = $a + $b; // return $a+$b;
    return $c; //echo $c;
}
$resultat =calcul(10,12);
echo $resultat;

//------------------------------------------------------------------------------------------------------
//creating functions with default values
echo '<br/><br/>';
function math ($a,$b = 5) { //function calcul (int $a, int $b) int 
   return $a+$b;
}
echo math (10);

//------------------------------------------------------------------------------------------------------