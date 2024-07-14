<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $url = $_POST['url'];

  if(filter_var($url, FILTER_VALIDATE_URL)){
    header("Location: $url");
  }
}
?>