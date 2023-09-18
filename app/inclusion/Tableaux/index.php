<?php

echo "Tableaux";
#https://www.php.net/manual/en/book.array.php

/*
//Creates a blank array.
$theVariable = array();

//Creates an array with elements.
$theVariable = array("A", "B", "C");

//Creating Associaive array.
$theVariable = array(1 => "http//google.com", 2=> "http://yahoo.com");

//Creating Associaive array with named keys
$theVariable = array("google" => "http//google.com", "yahoo"=> "http://yahoo.com");

Note:
New value can be added to the array as shown below.
$theVariable[] = "D";
$theVariable[] = "E";
*/
$tableau = ['Groupe Scolaire',34,5.78,false,[1,2,3]];
// echo $tableau; <-fausse syntaxe!
echo "<pre>";
// print_r($tableau); ou:
var_dump($tableau);
echo "</pre>";
echo '<br/><br/><br/>';

$table = [];
$table = 'January';
$table = 45;
$table = false;

// this is a variable that is called different times to assign its values 
echo "</pre>";

var_dump($table);
echo '<br/>';

$table1 = [];
array_push($table1, 'January', 45, false);
echo "</pre>";
var_dump($table1);
echo '<br/>';

$notes = [12, 14, 8, 10];
$tablefusion = array_merge($table1, $notes);
echo "</pre>";
var_dump($tablefusion);
echo '<br/>';

// indexes to access the elements of an array

var_dump($notes [1]);
var_dump($tablefusion [4]);
print_r($tablefusion [4]);echo '<br/>';
print_r($tablefusion [0]);echo '<br/>';
//print_r($tablefusion [3][1]);echo '<br/>'; displays 'client' of the 2nd table
//print_r($tablefusion [3][2][2]);echo '<br/>'; displays '8' of the 2nd table
echo '<br/>';

//--------------------------------------------------------------------------------------------------------------

$array1 = [
    0 => 'apple',
    1 => 'orange',
    2 => 'pear',
];

$array2 = [
    0 => 'melon',
    1 => 'orange',
    2 => 'banana',
];

$result = array_keys(
    array_flip($array1) + array_flip($array2)
);





