<?php
//Task 1
function isprime($num)
{
  if ($num < 2) {
    echo 'not prime';
    return;
  } else if ($num == 2) {
    echo 'prime';
    return;
  }
  for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      echo 'not prime';
      return;
    }
  }
  echo 'prime';
  return;
}
isprime(59);
echo '<hr>';

//Task 2
function reversestr($str)
{
  echo strrev($str);
};
reversestr('hello');
echo '<hr>';

//Task 3
function lowercasechecker($str)
{
  if (ctype_lower($str)) {
    echo 'your string is OK';
  } else {
    echo 'please dont use uppercase letters';
  }
}
lowercasechecker("hello");
echo '<hr>';

//Task 4
function swapvalues($x, $y)
{
  $z = $y;
  $y = $x;
  echo "$z . $y";
}
swapvalues(40, 20);
echo '<hr>';

//Task 5 is repeated

//Task 6
function isArmNum($num)
{
  $num_str = (string)$num;
  $len = strlen($num_str);
  $r = [];

  for ($i = 0; $i < $len; $i++) {
    $digit = $num_str[$i];
    $r[$i] = pow($digit, $len);
  }

  $sum = 0;
  for ($a = 0; $a < $len; $a++) {
    $sum = $sum + $r[$a];
  }

  if ($sum == $num) {
    echo "<b> $num </b> is Armstrong Number <br>";
  } else {
    echo "<b> $num </b> is not Armstrong Number <br>";
  }
}
isArmNum(1);
isArmNum(10);
isArmNum(153);
isArmNum(407);
isArmNum(1634);
echo '<hr>';

//Task 7 version 1 : its work without spaces or single special characters or difference letter's case

function palindorm($str)
{
  if ($str == strrev($str)) {
    echo 'Yes it is a palindrome<br>';
  } else {
    echo 'No it is not a palindrome<br>';
  }
}
palindorm('ca?n?ac');
palindorm(12121);
palindorm('Eva, can I see bees in a cave?');

echo '<hr>';

// Task 7 version 2
function palindorm2($str)
{

  $cleanstr = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str));
  if ($cleanstr == strrev($cleanstr)) {
    echo 'Yes it is a palindrome<br>';
  } else {
    echo 'No it is not a palindrome<br>';
  }
}
palindorm2('ca?n?ac');
palindorm2(12121);
palindorm2('Eva, can I see bees in a cave?');
echo '<hr>';

//Task 8
function removerepeated($array1)
{
  $array_1 = array_unique($array1);
  echo '$array1 = array(';

  foreach ($array_1 as $value) {
    echo $value . " , ";
  }

  echo ')';
}
removerepeated(array(2, 1, 2, 3, 5, 4, 4, 2, 2, 9, 8, 9, 8, 9, 8, 9, 8, 9, 8, 9, 8, 1, 0));
