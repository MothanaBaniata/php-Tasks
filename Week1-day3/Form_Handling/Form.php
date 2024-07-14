<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  $formMethod = 'post';
  $formAction = htmlspecialchars($_SERVER["PHP_SELF"]);


  if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit_get'])) {

    $formMethod = 'get';
    $formAction = htmlspecialchars($_SERVER["PHP_SELF"]) . '?' . http_build_query($_GET);
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['submit_post'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
    }
  }
  ?>

  <form action="<?php echo $formAction; ?>" method="<?php echo $formMethod; ?>">
    <label for="email">Email :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" name="email" id="email"><br><br>

    <label for="password">Password :</label>
    <input type="password" name="password" id="password"><br><br>

    <button type="submit" name="submit_post">Submit POST</button>
    <button type="submit" name="submit_get" formmethod="get">Submit GET</button>
  </form>

</body>

</html>