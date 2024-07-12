<style>hr{border:none;height:1px;background:linear-gradient(to right,#ff5733,#ff5733);margin:15px 0;width:75%;animation:walk 10s linear infinite;box-sizing:border-box;}@keyframes walk{0%{transform:translateX(0);}50%{transform:translateX(100vw);opacity:0;}51%{transform:translateX(-500px);opacity:0;}100%{transform:translateX(0);opacity:1;}}</style>
<?php
//Task 1.a
echo strtoupper("aaaaa"), "<hr>";

//Task 1.b
echo strtolower("AAAAA"), "<hr>";

//Task 1.c
echo ucfirst("aaaaa"), "<hr>";

//Task 1.d
echo ucwords("aaaaa aaaaa aaaaa"), "<hr>";

//Task 2
echo date_format(date_create("085119"), "H:i:s"), "<hr>";

//Task 3
$string = "Hi, how are you?";
if (strpos($string, 'you') !== false) {
  echo 'word found', "<hr>";
} else {
  echo 'word not found', "<hr>";
};

//Task 4
echo basename('www.orange.com/index1.php'), "<hr>";

//Task 5
echo basename('info@orange.com', "@orange.com"), "<hr>";

//Task 6
echo substr('info@orange.com', -3), "<hr>";

//Task 7
echo substr(str_shuffle("0123456789abcdef"), 0, 6), "<hr>";

//Task 8
$text = 'aplle have a lot of Vitamin C';
echo str_replace(strtok($text, ' '), 'orange', $text), "<hr>";

//Task 9
/* source:www.w3resource.com
^ is a bitwise operator in PHP "XOR"
it is compare between two integers
but in this example it compare each character in the strings as byte */
$str1 = "hello ahmad";
$str2 = "hello ahmed";

$str_pos = strspn($str1 ^ $str2, "\0");

echo "First difference between two strings at position $str_pos :",
"\"$str1[$str_pos]\"",
"vs",
"\"$str2[$str_pos]\"<hr>";

//Task 10
var_dump(explode(" ", 'orange, banana, kiwi, apple, cherry,'));
echo "<hr>";

//Task 11
/*         source:www.w3resource.com 
++ means increments character ASCII value by 1
ASCII defines codes (from 0 to 127) for characters*/
$cha = 'a';
echo ++$cha . "<hr>";

//Task 12
/*          source:www.w3resource.com           */
echo substr_replace('The brown fox', 'quick' . ' ', 4, 0), '<hr>';

//Task 12 : 18
echo strtok("The brown fox", " "), '<hr>';

//Task 13
echo trim('0000657022.24', '0'), '<hr>';

//Task 14
echo str_replace('fox', ' ', 'The quick brown fox jumps over the lazy dog'), '<hr>';

//Task 15
echo trim('The quick brown fox jumps over the lazy dog---', '-'), '<hr>';

//Task 16
echo preg_replace("/[^0-9,.]/", " ", '\"\1+2/3*2:2-3/4*3'), '<br>';
echo preg_replace("/[^0-9,.]/", "", '\"\1+2/3*2:2-3/4*3'), '<hr>';

//Task 17
$string ='The quick brown fox jumps over the lazy dog';
$first5 = strtok($string, " ");
for ($i=0; $i <5; $i++){
  echo $first5.' ';
  $first5 = strtok(" ");
};
echo '<hr>';

//Task 18
echo str_replace(',', '', '2,543.12'), '<hr>';

//Task 19
$cha = 'a';
echo $cha.' ';
for ($i=0; $i<25; $i++){
  echo ++$cha . " ";
};
?>