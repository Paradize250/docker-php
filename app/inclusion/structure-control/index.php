<?php
echo "Test";

echo '<br/>'; #to add more lines you can use echo '<br/>''<br/>''<br/>';

#https://www.php.net/manual/en/language.control-structures.php

#the usage of if and if else
$age = 19;
if($age > 18) {
    echo "You have the right to vote"; # change the variable age and refresh the page to see the different results
} else {
    echo "you don't have the right to vote";
}

echo '<br/>';

#example 2 (use of multiple conditions)

#$time = 14; this was a used variable example used to see different results

$time = date("H");
if($time < 12) {
    echo "It is in the morning";
} elseif ($time >= 18) {
    echo "It is in the evening";
} else {
    echo "It is in the afternoon";
}
echo '<br/>';

$a = '20';
$b = '5';

if($b != 3) {
    echo "The variable is not equal to 3";
}
else {
    echo "The variable is equal to 3";

}
echo '<br/>';
if($b === 5) {
    echo "The variable is equal in type and value";
}
else {
    echo "The variable is not equal in type and value";

}
echo '<br/>';
if($b == 5) {
    echo "The variable is equal in type";
}
    #find the anti slash sign on mac

/* Example
$a = 5;
$b = 10;

if ($a != $b) {
    echo "$a is not equal to $b"; // This will be printed because 5 is not equal to 10
} else {
    echo "$a is equal to $b";
}*/

echo '<br/>';

$true =true; #you can change the variable type between true and false
if ($true) {
    echo "True";
} else {
    echo "False";
    #echo(True) ? "true" : "false";
}

#this can also be written with the python method

/* 
if (true): 
    echo "true";
else 
    echo "false";
endif;
*/

echo '<br/>';
$votes=7540;
$votesPrecedents=1254;
($votes > $votesPrecedents) ? $votes-- : $votes++;
# the -- and ++ increase or decrease a unit depending on what argument is true. In this case the result is 7539
echo $votes;
echo '<br/>';

#switch case
$color = 'pink';
switch ($color): #{
    case 'red':
        echo "Your favorite color is red";
        break;
    case 'blue';
        echo "Your favorite color is blue";
        break;
    case 'green';
    echo "Your favorite color is green";
    break;
    default:
    echo "Your favorite color is not red, blue, or green";
endswitch; #}

#match

$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
    default => 'The food is not available',
};

var_dump($return_value); #used as an output for variables and tables











?>