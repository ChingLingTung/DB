<?php
// 啟用session功能
session_start();

$users=[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre><?php print_r($_POST)?></pre>
  <form action="" method="post">
    <input type="text" name="account" placeholder="帳號" value="
    <?= isset($_POST['account']) ? $_POST['account'] : '' ?>">
    <br>
    <input type="password" name="password" placeholder="密碼" value="
    <?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
    <br>
    <button>登入</button>
  </form>
</body>
</html>