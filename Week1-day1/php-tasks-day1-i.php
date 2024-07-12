<pre>
<?php
//Task 1
echo "<h2>Task 1.1 + 1.2</h2>";
$cities = array(
  "Riyadh",
  "Cairo",
  "Dubai",
  "Baghdad",
  "Amman",
  "Kuwait City",
  "Doha",
  "Manama",
  "Muscat",
  "Tunis",
);
for ($i = 0; $i < count($cities); $i++) {
  echo "$cities[$i]<br>";
}

echo '<hr>';
echo "<h2>Task 1.3</h2>";
echo array_search("Amman", $cities);


echo '<hr>';
echo "<h2>Task 1.4</h2>";
unset($cities[7]);
for ($i = 0; $i < count($cities); $i++) {
  if ($i == 7) {
    $i++;
  }
  echo "$cities[$i]<br>";
}

echo '<hr>';
echo "<h2>Task 1.5</h2>";
$slice3 = array_slice($cities, 0, 3);
foreach ($slice3 as $val) {
  echo "$val<br>";
}

// //Task 2
echo "<h2>Task 2.1 + 2.2</h2>";
$mobiles = array(
  "iPhone 16 pro max" => 2500,
  "Samsung Galaxy S24 ulltra" => 1000,
  "Google Pixel 8" => 950,
  "Realme 9 Pro" => 450,
);
ksort($mobiles);
foreach ($mobiles as $mobile => $price) {
  echo "$mobile : $price\$<br>";
};
echo '<hr>';

echo "<h2>Task 2.3</h2>";
asort($mobiles);
foreach ($mobiles as $mobile => $price) {
  echo "$mobile : $price\$<br>";
};
echo '<hr>';

echo "<h2>Task 2.4</h2>";
echo array_sum($mobiles) / count($mobiles), "\$";

echo '<hr>';

echo "<h2>Task 2.5</h2>";
$mostexp = 0;
foreach ($mobiles as $mobile => $price) {
  if ($price > $mostexp) {
    $mostexp = $price;
    $mostexpmob = $mobile;
  }
}
echo "The most expensive product: $mostexpmob($mostexp)";
echo '<hr>';

// //Task 3
echo "<h2>Task 3.1 + 3.2</h2>";
$books = array(
  array("title" => "The dark way", "author" => "alex", "year" => 1994),
  array("title" => "The dark room", "author" => "alex1", "year" => 1975),
  array("title" => "The dark night", "author" => "alex2", "year" => 2011),
);

for ($i = 0; $i < count($books); $i++) {
  $book = $books[$i];
  if ($book["year"] > 2010) {
    echo "<b>Title:</b>", $book["title"], ", ";
    echo "<b>Author:</b>", $book["author"], ", ";
    echo "<b>Year:</b>", $book["year"];
  }
}
echo '<hr>';

echo "<h2>Task 3.3</h2>";
echo "<h3>ubdated array</h3>";
$books[] = array("title" => "The dark year", "author" => "alex3", "year" => 2024);

foreach ($books as $book) {
  echo "<b>Title:</b>", $book["title"], ", ";
  echo "<b>Author:</b>", $book["author"], ", ";
  echo "<b>Year:</b>", $book["year"], "<br>";
}
echo '<hr>';

echo "<h2>Task 3.4</h2>";
foreach ($books as $key => $book) {
  if ($book["author"] == "alex1") {
    $books[$key]["author"] = 'not alex';
  }
}
foreach ($books as $book) {
  echo "<b>Title:</b>", $book["title"], ", ";
  echo "<b>Author:</b>", $book["author"], ", ";
  echo "<b>Year:</b>", $book["year"], "<br>";
}
echo '<hr>';

echo "<h2>Task 3.5</h2>";
asort($books);
foreach ($books as $book) {
  echo "<b>Title:</b>", $book["title"], ", ";
  echo "<b>Author:</b>", $book["author"], ", ";
  echo "<b>Year:</b>", $book["year"], "<br>";
}
echo '<hr>';

// //Task 4
echo "<h2>Task 4.1</h2>";
$fruits = array('orange', 'banana', 'kiwi', 'apple', 'cherry', 10, 20);
$uppercase = array_map('strtoupper',$fruits);
foreach($uppercase as $val){
  echo $val."<br>";
}
echo '<hr>';

echo "<h2>Task 4.2</h2>";
foreach($fruits as $val){
  if(is_numeric($val)){
    echo $val."<br>";
  }
}
echo '<hr>';

echo "<h2>Task 4.3</h2>";
$integers = [10,20,40,5];
$sum = array_reduce($integers, function($i, $val) {
  return $i + $val;
});
echo $sum;

echo '<hr>';

echo "<h2>Task 4.4</h2>";
array_walk($integers, function(&$val){
  $val*=4;
});
foreach($integers as $integer){
  echo $integer."<br>";
};

echo '<hr>';

echo "<h2>Task 4.5</h2>";
$fruits1 = array('orange', 'banana', 'kiwi', 'apple', 'cherry', 10, 20);
$fruits2 = array('kiwi', 'apple', 'cherry', 10, 20);
print_r(array_diff($fruits1, $fruits2));
echo '<hr>';

echo "<h2>Task 4.6</h2>";
print_r(array_intersect($fruits1, $fruits2));
echo '<hr>';

echo "<h2>Task 4.7</h2>";
$fruitsname = array('orange', 'banana', 'kiwi', 'apple');
$fruitsprice = array(10,20,40,5);
print_r(array_combine($fruitsname, $fruitsprice));
echo '<hr>';

echo "<h2>Task 4.8</h2>";
$books = array(
  array("title" => "way", "author" => "a"),
  array("title" => "room", "author" => "al"),
  array("title" => "night", "author" => "ale"),
);

print_r(array_column($books, 'author'));

echo '<hr>';

echo "<h2>Task 4.9</h2>";
print_r(array_slice($fruitsname,1));
echo '<hr>';

echo "<h2>Task 4.10</h2>";
echo in_array("orange", $fruitsname);
?>
</pre>