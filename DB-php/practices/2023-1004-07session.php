<?php
// 啟用session功能
session_start();

if (isset($_SESSION['sess'])){
  $_SESSION['sess']=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?= $_SESSION['sess']++ ?>
</body>
</html>