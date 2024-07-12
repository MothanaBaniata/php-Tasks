<style>hr{border:none;height:1px;background:linear-gradient(to right,#ff5733,#ff5733);margin:15px 0;width:75%;animation:walk 10s linear infinite;box-sizing:border-box;}@keyframes walk{0%{transform:translateX(0);}50%{transform:translateX(100vw);opacity:0;}51%{transform:translateX(-500px);opacity:0;}100%{transform:translateX(0);opacity:1;}}</style>
<b>
<?php
// Task 1
for ($i = 1; $i <= 10; $i++) {
  echo $i;
  if ($i != 10) {
    echo "-";
  } else {
    break;
  }
}
echo '<hr>';

// Task 2
$sum = 0;
for ($i = 0; $i <= 30; $i++) {
  $sum = $sum + $i;
}
echo $sum . '<hr>';

// Task 3
for ($i = 0; $i < 5; $i++) {
  for ($x = 0; $x < 5; $x++) {
    echo '*', str_repeat('&nbsp;', 3);
  }
  echo '<br>';
}
echo '<hr>';

// Task 4
$fac_5 = 1;
for ($i = 1; $i <= 5; $i++) {
  $fac_5 = $fac_5 * $i;
};
echo $fac_5, '<hr>';

// Task 5
$z = 0;
$x = 0;
$y = 1;
echo $x . " " . $y . " ";
for ($i = 1; $i < 8; $i++) {
  $z = $x + $y;
  echo $z . " ";
  $x = $y;
  $y = $z;
};
echo "<hr>";

// Task 6
$str = 'Orange Coding Academy';
$count = 0;

for ($i = 0; $i<strlen($str); $i++){
  if($str[$i] == 'c'||$str[$i] == 'C'){
    $count++;
  }
};
echo "The count of character c in string is : $count <hr>";

// Task 7
echo "<table border=\"1\"  cellpadding=\"3px\" cellspacing=\"0px\">";
for ($i = 1; $i < 7; $i++) {
  echo "<tr>";
  for ($x = 1; $x < 6; $x++) {
    $z = $i * $x;
    echo "<td style=\"padding-right: 50px\">$i*$x= $z </td>";
  }
  echo "</tr>";
}
echo "</table><hr>";

// Task 8
for ($i = 1; $i <= 50; $i++) {

  if ($i % 3 == 0 && $i % 5 !== 0) {
    echo 'Fizz ';
  } else if ($i % 5 == 0  && $i % 3 !== 0) {
    echo 'Buzz ';
  } else if (($i % 3 == 0) && ($i % 5 == 0)) {
    echo '\\Fizz Buzz\\ <br>';
  } else {
    echo $i . " ";
  };
};
echo "<hr>";

// Task 9
$z = 0;
for ($i = 0; $i < 5; $i++) {
  for ($x = 0; $x <= $i; $x++) {
    $z++;

    if(strlen($z) == 1){
      echo $z, str_repeat('&nbsp;', 6);
    }else{
      echo $z, str_repeat('&nbsp;', 4);
    }
  }
  echo '<br>';
};
?>
</b>