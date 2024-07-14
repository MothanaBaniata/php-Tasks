<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Calculator.css">
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($_POST['sub'])) {
    $num_1 = $_POST['num1'];
    $num_2 = $_POST['num2'];
    $oprnd = $_POST['sub'];

    if ($oprnd == "+") {
      $result = $num_1 + $num_2;
    } else if ($oprnd == "-") {
      $result = $num_1 - $num_2;
    } else if ($oprnd == "*") {
      $result = $num_1 * $num_2;
    } else if ($oprnd == "/") {
      if ($num_2 !== "0") {
        $result = $num_1 / $num_2;
      } else {
        $result = " ∞ ";
      }
    }
  }
  ?>

  <form method="post">

    <label for="num1">First number</label>
    <input type="text" name="num1" id="num1"><br><br>
    <label for="num2">Second number</label>
    <input type="text" name="num2" id="num2"><br>

    <input type="submit" name="sub" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="sub" value="*">
    <input type="submit" name="sub" value="/"><br><br>

    <label for="result">Result</label>
    <input type="text" name="result" id="result" value="<?php echo $result; ?>"><br>
  </form>

</body>

</html>