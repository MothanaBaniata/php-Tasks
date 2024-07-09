<?php
//Task 1
echo "<h2>Task 1.1 + 1.2</h2>";
$fruits = array('orange', 'banana', 'kiwi', 'apple', 'cherry');
for ($i = 0; $i < 5; $i++) {
  echo "$fruits[$i]<br>";
}

echo '<hr>';
echo "<h2>Task 1.3</h2>";
$fruits[] = 'strawberry';
for ($i = 0; $i < 6; $i++) {
  echo "$fruits[$i]<br>";
}

echo '<hr>';
echo "<h2>Task 1.4</h2>";
array_pop($fruits);
for ($i = 0; $i < 5; $i++) {
  echo "$fruits[$i]<br>";
}

echo '<hr>';
echo "<h2>Task 1.5</h2>";
echo array_search('banana', $fruits);
echo '<hr>';

//Task 2
echo "<h2>Task 2.1 + 2.2</h2>";
$people = array(
  "ahmed" => 15,
  "ali" => 25,
  "ala" => 35,
  "omar" => 45,
  "kasem" => 55,
);
var_dump($people);
echo '<hr>';

echo "<h2>Task 2.3</h2>";
$people[] = ["nader" => 65];
var_dump($people);
echo '<hr>';

echo "<h2>Task 2.4</h2>";
unset($people["omar"]);
var_dump($people);
echo '<hr>';

echo "<h2>Task 2.5</h2>";
echo array_key_exists("ala", $people);
echo '<hr>';

//Task 3
echo "<h2>Task 3.1 + 3.2</h2>";
$students = array(
  array("name" => "ahmad", "age" => 15, "grade" => 94),
  array("name" => "ala", "age" => 16, "grade" => 75),
  array("name" => "omar", "age" => 14, "grade" => 99),
);

for ($i = 0; $i < 3; $i++) {
  echo "Name: " . $students[$i]['name'] . ", Age: " . $students[$i]['age'] . ", Grade: " . $students[$i]['grade'] . ".<br>";
}
echo '<hr>';

echo "<h2>Task 3.3</h2>";
echo "<h3>ubdated array</h3>";
$students[] = array("name" => "zaid", "age" => 17, "grade" => 100);

for ($i = 0; $i < 4; $i++) {
  echo "Name: " . $students[$i]['name'] . ", Age: " . $students[$i]['age'] . ", Grade: " . $students[$i]['grade'] . ".<br>";
};
echo '<hr>';

echo "<h2>Task 3.4</h2>";
$students[0]["grade"] = 100;
for ($i = 0; $i < 4; $i++) {
  echo "Name: " . $students[$i]['name'] . ", Age: " . $students[$i]['age'] . ", Grade: " . $students[$i]['grade'] . ".<br>";
};
echo '<hr>';

echo "<h2>Task 3.5</h2>";
array_pop($students);
for ($i = 0; $i < count($students); $i++) {
  echo "Name: " . $students[$i]['name'] . ", Age: " . $students[$i]['age'] . ", Grade: " . $students[$i]['grade'] . ".<br>";
};
echo '<hr>';

//Task 4
echo "<h2>Task 4.1</h2>";
$fruits = array('orange', 'banana', 'kiwi', 'apple', 'cherry');
array_push($fruits, "strwberry");
for ($i = 0; $i < count($fruits); $i++) {
  echo "$fruits[$i]<br>";
}
echo '<hr>';

echo "<h2>Task 4.2</h2>";
array_pop($fruits);
for ($i = 0; $i < count($fruits); $i++) {
  echo "$fruits[$i]<br>";
}
echo '<hr>';

echo "<h2>Task 4.3</h2>";
$student = array(
  "name" => "khaled",
  "age" => 14,
  "grade" => 75,
);


$keys = array_keys($student);
for ($i = 0; $i < count($keys); $i++) {
  echo $keys[$i] . '<br>';
}
echo '<hr>';

echo "<h2>Task 4.4</h2>";
$values = array_values($student);
for ($i = 0; $i < count($values); $i++) {
  echo $values[$i] . '<br>';
}
echo '<hr>';

echo "<h2>Task 4.5</h2>";
echo count($fruits);

echo '<hr>';

echo "<h2>Task 4.6</h2>";
$compine = array_merge($student,$fruits);
var_dump($compine);
echo '<hr>';

echo "<h2>Task 4.7</h2>";
echo array_search(75, $student);
echo '<hr>';

echo "<h2>Task 4.8</h2>";
sort($fruits);
var_dump($fruits);

echo '<hr>';

echo "<h2>Task 4.9</h2>";
ksort($student);
var_dump($student);
echo '<hr>';

echo "<h2>Task 4.10</h2>";
asort($student);
var_dump($student);

?>