<?php
header('Content-type: text/plain');
//task 1
echo "\nTASK 1--------------------------------------------\n";
$very_bad_unclear_name = "15 chicken wings";
$order = & $very_bad_unclear_name;

$order .= " and a cheeseburger";
echo "\nYour order is: $very_bad_unclear_name.";

echo "\n";
//task 2
echo "\nTASK 2--------------------------------------------\n";
$integerVar = 4;
echo $integerVar;

echo "\n";

$floatVar = 1.32;
echo $floatVar;

echo "\n";

echo 2+10;

$last_month = 1187.23;
$this_month = 1089.98;

$difference = $last_month - $this_month;

echo "\ndifference between expenses = $difference";

//task 11
echo "\nTASK 11--------------------------------------------\n";
$num_languages = 4;
$months = 11;
$days = $months * 16;

$days_per_language = $days / $num_languages;

echo "\ndays for 1 language: $days_per_language";

//task 12
echo "\nTASK 12--------------------------------------------\n";
echo "\n";

echo 8**2;

//task 13
echo "\nTASK 13--------------------------------------------\n";
echo "\n";

$my_num = 14;
$answer = $my_num;
$answer +=2;
$answer*=2;
$answer-=2;
$answer/=2;
$answer-=$my_num;

echo $answer, "\n";

//task 14
echo "\nTASK 14--------------------------------------------\n";

//remainder
echo "\n";

$a=10;
$b=3;

echo $a % $b;

//checking for remainder
echo "\n";

if(0 === $a % $b) {
    echo 'Делится: ', $a / $b;
}

else{
    echo 'Делится с остатком: ', $a % $b;
}

//2**10
$st = pow(2, 10);
echo "\n $st";

// sqrt 245
$sqrt1 = sqrt(245);
echo "\n $sqrt1";

//root of the sum of the squares of the array elements
$array = [ 4, 2, 5, 19, 13, 0, 10];
$sq_sum = 0;

foreach ($array as $element) {
    $sq_sum += $element ** 2;
}
$result = sqrt($sq_sum);
echo "\nroot of sum of squares = $result";

//rounding

$sqrt2 = sqrt(379);

$int_round = round($sqrt2);
$ten_round = round($sqrt2, 1);
$hun_round = round($sqrt2, 2);

echo "\n $int_round";
echo "\n $ten_round";
echo "\n $hun_round";

$sqrt3 = sqrt(587);
$arr = array('floor' => floor($sqrt3), 'ceil' => ceil($sqrt3));

echo "\nround down: {$arr['floor']}";
echo "\nround up: {$arr['ceil']}";

//min max

$arr2 = [4, -2, 5, 19, -130, 0, 10];
$min = min($arr2);
$max = max($arr2);

echo "\n min num $min";
echo "\n max num $max";

//random

echo "\nrandom number: ", rand(1, 100);

//random array

for($i=0; $i <= 9; $i++) {
    $random_array[] = rand(1, 100);
}
echo "\nrandom array: " . implode(', ', $random_array);

//module

$a = 14;
$b = 32;
$abs_dif = abs($a - $b);
echo "\nabsolute difference test1: $abs_dif";

$a1 = 14;
$b1 = -32;
$abs_dif = abs($b1 - $a1);
echo "\nabsolute difference test2: $abs_dif";

$arr3 = [1, 2, -1, -2, 3, -3];
$new_arr = array_map(function($num) {
    return abs($num);
}, $arr3);
echo "\nabsolute array: " .implode(', ',$new_arr);

//general
echo "\n";
$num1 = 30;
$div_arr = [];
echo "divisors of 30: ";
for($i = 1; $i <= $num1; $i++) {
    if (0 === $num1 % $) {
        $div_arr[] = $i;
        echo "{$i} ";
    }
}
echo "\n";

$arr4 =  [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$k = 0;

while($sum <= 10) {
    $sum += $arr4[$k];
    $k +=1;
}
echo "To make the sum greater than 10, you need to add the first {$k} elements\n";

//task 15
echo "\nTASK 15--------------------------------------------\n";
function printStringReturnNumber($string) {
    echo "$string";
    return 43;
}

$my_num = printStringReturnNumber("num is ");
echo "$my_num";
echo "\n";
//task 16
echo "\nTASK 16--------------------------------------------\n";
function increaseEnthusiasm($str) {
    return $str."!";
}

function repeatThreeTimes($str) {
    return $str.$str.$str;
}

function cut($str, $length = 10) {
    return substr($str, 0, $length);
}
echo "\n";
echo increaseEnthusiasm("ya");

echo "\n";
echo repeatThreeTimes("ya");

echo "\n";
echo increaseEnthusiasm(repeatThreeTimes("beer")) . "\n";

echo "\n";
echo cut("once upon a time ", 10);

//recursive output of elements

function print_new_array($arr, $i = 0) {
    if ($i < count($arr)) {
        echo "\n$arr[$i]";
        print_new_array($arr, $i + 1);
    }
}
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_new_array($array);

//sum

function sumOfDigits($num) {
    $sum = 0;
    while($num!=0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }

    if($sum>9){
        return sumOfDigits($sum);
    }
    else{
        return $sum;
    }
}

$number = 12345;
echo "\nsum of digits: ";
echo sumOfDigits($number);

//task 17
echo "\nTASK 17--------------------------------------------\n";
echo "\n";
function x(string $str, int $d): array
{
    $arr = [];
    for ($i = 1; $i <= $d; $i++) {
        $arr[$i] = str_repeat($str, $i);
    }
    return $arr;
}

foreach (x("x", 5) as $value) echo "$value ";

echo "\n";

function arrayFill(string $str, int $num): array
{
    return str_split(str_repeat($str, $num), strlen($str));
}

foreach (arrayFill("x", 3) as $value) echo "$value ";

echo "\n";

$two_dimensional_array = [[1, 2, 3], [4, 5], [6]];
$sum = array_sum(array_map('array_sum', $two_dimensional_array));
echo "sum of two dimensional array: $sum";

echo "\n";

$new2dArr = [];
$Count = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $newArr[$i][$j] = $Count++;
    }
}

function create2dimArray($size, $ar_size){
    if($size % $ar_size !=0){
        return;
    }
    $arr = [];
    $k = 1;

    for($i = 0; $i <= (int)($size / $ar_size)-1; $i++){
        $subarr = [];

        for($j=0; $j <= $ar_size-1; $j++){
            $subarr[] = $k;
            $k++;
        }
        $arr[] = $subarr;
    }

    foreach ($arr as $subar){
        foreach ($subar as $el){
            echo"\n", " {$el}";
        }
    }
}

create2dimArray(9, 3);

$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo "\nResult: $result";

echo "\n";
$user = ['name' => 'Dambaev', 'surname' => 'Sayan', 'patronymic' => 'Beligtuevich'];
echo"{$user['name']} {$user['surname']} {$user['patronymic']}";

echo "\n";
$date = ['year' => "2024", 'month' => "march", 'day' => "9th"];
echo "{$date['year']}-{$date['month']}-{$date['day']}";

echo "\n";
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "\ncount of elements: ".count($arr);

echo "\nlast elem: " . end($arr);
prev($arr);
echo "\npre last elem: " . current($arr);

//task 18
echo "\nTASK 18--------------------------------------------\n";
function checkSum($a, $b): bool {
    $sum = $a + $b;
    if ($sum > 10) {
        return true;
    }
    else {
        return false;

    }
}

function checkEqual($a, $b): bool {
    if ($a === $b) {
        return true;
    }
    else {
        return false;
    }
}

$test = 0;
if (0 === $test) echo "\nВерно";

$age = 41;
if ($age < 10 || $age > 99)
{
    echo "number is not in range.";
}
else
{
    $sum = array_sum(str_split($age));
    if ($sum <= 9)
    {
        echo "\nthe sum of the digits is single-digit. ";
    }
    else echo "\nthe sum of the digits is two digits. ";
}

$arr = [1, 3, 12];
if (3 === count($arr)) {
    echo "sum of array elements: " . array_sum($arr);
}

//task 19
echo "\nTASK 19--------------------------------------------\n";
echo "\n";
for ($i = 1; $i <= 20; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "x";
    }
    echo "\n";
}

//task 20
echo "\nTASK 20--------------------------------------------\n";
echo "\n";
$numbers = [1, 2, 3, 4];
$average = array_sum($numbers) / count($numbers);
echo $average;

echo "\n";
$sum = (1 + 100) * 100 / 2;
echo $sum;

echo "\n";
$numbers = [4, 9, 16, 25];
$squareRoots = array_map('sqrt', $numbers);
print_r($squareRoots);

echo "\n";
$alphabet = range('a', 'z');
$numbers = range(1, 26);
$result = array_combine($alphabet, $numbers);
print_r($result);

echo "\n";
$str = '1234567890';
$sum = array_sum(str_split($str, 2));
echo $sum. "\n";

