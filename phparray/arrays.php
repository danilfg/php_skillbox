<pre>
<?php

$myArray  = []; // пустой массив, на PHP 5.4 +
$anotherEmptyArray = array();

var_dump($myArray);
var_dump($anotherEmptyArray);

$numberArray = [1, 2, 3, 4];
$mixedTypeArray = [1, 'строка', 1.5];

var_dump($numberArray);
var_dump($mixedTypeArray);

$customKeysArray = [
    12 => "Значение",
    133 => 15,
    128 => 1.5E-7
];

var_dump($customKeysArray);

$stringKeysArray = [
    "ID" => 138,
    "NAME" => "Юрий",
    "AGE" => 22
];

var_dump($stringKeysArray);
?>
</pre>