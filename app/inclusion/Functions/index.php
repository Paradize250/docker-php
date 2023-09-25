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
// a function that calculates tha VAT
echo '<br/><br/>';
function calculateVAT($amount, $vatRate) {
    if ($amount < 0 || $vatRate < 0 || $vatRate > 100) {
        return "Invalid input"; // Handle invalid input
    }

    $vatAmount = ($amount * $vatRate) / 100;
    $total = ($vatAmount + $amount);
    return $vatAmount;
    return $total;
}

// Example usage:
$amount = 34; // Replace with your amount
$vatRate = 10; // Replace with your VAT rate (in percentage)

$vat = calculateVAT($amount, $vatRate);
$total = ($vat + $amount);
echo "VAT amount: " . $vat;
echo "<br/>";
echo  "The total vat: " . $total;

//------------------------------------------------------------------------------------------------------
//A function that calculates somenone's age based on their birthday

echo '<br/><br/>';
function calculateAge($birthdate) {
    // Convert the birthdate string to a DateTime object
    $birthDateObj = new DateTime($birthdate);
    
    // Get the current date as a DateTime object
    $currentDateObj = new DateTime();
    
    // Calculate the difference between the current date and birthdate
    $ageInterval = $currentDateObj->diff($birthDateObj);
    
    // Extract the years from the interval
    $age = $ageInterval->y;
    
    return $age;
}

// Example usage:
$birthdate = '1995-09-03'; // Replace with the person's birthdate in 'YYYY-MM-DD' format

$age = calculateAge($birthdate);
echo "Age: " . $age;

//------------------------------------------------------------------------------------------------------
//A function that function is used to reverse a string.
echo '<br/><br/>';

$originalString = "Hello, World!";
$reversedString = strrev($originalString);

echo "Original String: $originalString<br>";
echo "Reversed String: $reversedString";

//------------------------------------------------------------------------------------------------------
//A function that function is used to count the characters of a string
echo '<br/><br/>';
//int strlen ( string $string )
$string = "Hello, World!";
$length = strlen($string);

echo "The length of the string is: $length";

//------------------------------------------------------------------------------------------------------
//A function that  is used to capitalize characters of a string
echo '<br/><br/>';
$string = "Hello, World!";
$uppercaseString = strtoupper($string);

echo "Original String: $string<br>";
echo "Uppercase String: $uppercaseString";

//------------------------------------------------------------------------------------------------------
//A function that is used to replace words of a string
echo '<br/><br/>';

$string = "Hello, World!";
$replacement = "Universe";
$newString = str_replace("World", $replacement, $string);

echo $newString; // Output: "Hello, Universe!"
echo '<br/><br/>';

$string = "The quick brown fox jumps over the lazy dog.";
$replacements = [
    "quick" => "fast",
    "brown" => "red",
    "fox" => "rabbit"
];
$newString = str_replace(array_keys($replacements), array_values($replacements), $string);

echo $newString; // Output: "The fast red rabbit jumps over the lazy dog."

echo '<br/><br/>';
$string = "The quick brown fox jumps over the lazy dog.";
$replacement = "cat";
$newString = str_ireplace("fox", $replacement, $string);

echo $newString; // Output: "The quick brown cat jumps over the lazy dog."
echo '<br/><br/>';

//------------------------------------------------------------------------------------------------------
//A function that is used to extract a portion of a string (substring) based on its starting position and length
echo '<br/><br/>';

$string = "Hello, universe";
$substring = substr($string, 0, 5);

echo $substring; // Output: "Hello"
echo '<br/><br/>';

$string = "Hello, Kyle!";
$substring = substr($string, 7);

echo $substring; // Output: "World!"
echo '<br/><br/>';
$string = "Hello, Latiffa!";
$substring = substr($string, -6);

echo $substring; // Output: "World!"
echo '<br/><br/>';
$string = "Hello, How are you?";
$substring = substr($string, 7, 5);

echo $substring; // Output: "World"


