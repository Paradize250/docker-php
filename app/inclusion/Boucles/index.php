<?php

echo("BOUCLES");
echo '<br/>';

require '../Functions/index.php';

$planets = ['mars', 'uranus', 'jupiter', 'earth'];

/*dd($planets);
echo "test"; the following was outputting the whole table 
echo '<br/><br/><br/>';*/

foreach($planets as $planet) {
    echo "$planet<br>"; //this line prints the values https://www.php.net/manual/en/control-structures.foreach.php
}
// to avoid backets in the code you can use foreach and close it with endforeach as show bellow

echo '<br/>';
//------------------------------------------------------------------------------------------------------
foreach($planets as $key=>$planet):
    echo "$key :$planet<br>"; //this line prints the values with their keys
endforeach;

echo '<br/><br/>';
//------------------------------------------------------------------------------------------------------
$numbers = [2,3,4,5];

print_r($numbers);

echo '<br/><br/>';
$i=0;
foreach($numbers as $number):
    $number=$number*3;
    echo "$i : $number<br>";
    $i++;
endforeach;

//------------------------------------------------------------------------------------------------------
$user = [
    'name' => 'Jane Doe',
    'email' => 'Janedoe@gmail.com',
    'skills' => ['php', 'javascript', 'python']
];
echo '<br/><br/>';

echo 'Name: ' . $user['name'] . '<br>';
echo 'Email: ' . $user['email'] . '<br>';
echo 'Skills: ' . implode(', ', $user['skills']);

echo '<br/><br/>';

foreach ($user['skills'] as $skill):
    echo $skill . ', ';
endforeach;

/*$user = [
    'name' => 'Jane Doe',
    'email' => 'Janedoe@gmail.com',
    'skills' => ['php', 'javascript', 'python']
];

// Accessing and displaying user information
echo 'Name: ' . $user['name'] . '<br>';
echo 'Email: ' . $user['email'] . '<br>';

// Accessing and displaying user skills
echo 'Skills: ';
foreach ($user['skills'] as $skill) {
    echo $skill . ', ';
}

echo 'Name: ' . $user['name'] . '<br>';
echo 'Email: ' . $user['email'] . '<br>';
echo 'Skills: ' . implode(', ', $user['skills']);
*/
echo '<br/><br/>';

foreach($user as $key => $value):
    echo "$key : ";
    if (is_array($value)){

    echo implode(', ', $user['skills']);

        /*foreach ($user['skills'] as $skill):
            echo $skill . ', ';
        endforeach;*/
    } else{
        echo "$value<br>";
    }
endforeach;
//------------------------------------------------------------------------------------------------------

//https://www.php.net/manual/en/control-structures.while.php REASEARCH

//------------------------------------------------------------------------------------------------------
