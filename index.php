<?php
declare(strict_types=1);
echo "Exercise 1 starts here:";

function new_exercise() {
    $x = 1; // var was not defined
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise();  // call the function
?>

<?php
echo "Exercise 2:";



$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; // index must be "0"

echo $monday;

?>

<?php

echo "Exercise 3:";

$str = '&#8220Debugged &#33 Also very fun&#8221';  // "!" needs to be "&#33" etc because ISO-8859-1 Character Set is currently being used (not set in HTML header yet)

echo substr($str, 0, 19).substr($str, -6);

?>

<?php

foreach($week as &$day) { // adding the "&" allows you to modify the array elements from within a loop
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

?>

<?php

$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) { // when "<= 'z'", it prints too much! *find out why.. // Thanks Glenn for the easy solution!!
    array_push($arr, $letter);
}
// array_push($arr, "z");

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array


?>

<?php


?>







