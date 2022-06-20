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
echo "<br /><br />Exercise 2:";



$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; // index must be "0"

echo $monday;

?>

<?php

echo "<br /><br />Exercise 3:";

$str = '&#8220Debugged &#33 Also very fun&#8221';  // "!" needs to be "&#33" etc because ISO-8859-1 Character Set is currently being used (not set in HTML header yet)

echo substr($str, 0, 19).substr($str, -6);

?>

<?php
echo "<br /><br />Exercise 4:";

foreach($week as &$day) { // adding the "&" allows you to modify the array elements from within a loop
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

?>

<?php
echo "<br /><br />Exercise 5:";

$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) { // when "<= 'z'", it prints too much! *find out why.. // Thanks Glenn for the easy solution!!
    array_push($arr, $letter);
}
// array_push($arr, "z");

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array


?>


<!-- 
    .. functions are not getting called
    .. "implode" returns an array as a string eg. implode("a","b,"c",d") => "abcd"
    .. $heroes is undefined/not initialized
    .. array_merge not correct?
    .. rand(min, max) = random integer between min-max


 -->





<?php
echo "<br /><br />Exercise 6:";

function combineNames($str1 = "", $str2 = "") {
    $seperator = " - "; // added the seperator as variable
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode($seperator, $params); // implode = seperator first
}


function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes)-1)][rand(0, 10)];

    return $randname;
}
// $dudeName = combineNames();
// echo ("Here is the name: $dudeName 123");
echo "Here is the name: " . combineNames();


?>













<?php
echo "<br /><br />Exercise 7:";

function copyright($year) {
    return "&copy; $year BeCode";
}
//print the copyright
print_r(copyright(date('Y')));      // convert to int >>> eg from Yasser :) $num = "3.14"; $int = (int)$num; $float = (float)$num;

?>


<?php
echo "<br /><br />Exercise 8:";
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
        // return ' Smith';
    } else {
        return 'No access';
    }
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas'); // passing 2 "arguments" (john@..., pocahontas) TO function's "parameters"
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!
?>

<?php
echo "<br /><br />Exercise 9:";
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');
?>


<?php
echo "<br /><br />Exercise 10:";
//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
// array_push($areTheseFruits, "");
for($i=0; $i <= count($areTheseFruits); $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
array_pop($areTheseFruits); // what is going on with last array value?
var_dump($areTheseFruits);//do not change this
?>