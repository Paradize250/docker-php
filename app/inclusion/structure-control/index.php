<?php
echo "test";

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

$time = 23;
if($time < 12) {
    echo "Tt is in the morning";
} elseif ($time >= 18) {
    echo "Ut is in the evening";
} else {
    echo "It is the afternoon";
}
echo '<br/>';
?>