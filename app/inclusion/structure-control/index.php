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

#example 2

$time = 23;
if($time < 12) {
    echo "it is in the morning";
} else {
    echo "it is in the evening";
}
?>