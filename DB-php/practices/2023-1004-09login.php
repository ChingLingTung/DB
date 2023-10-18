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
    <!-- 將三元運算子簡化為" 判斷式 ?? 判斷式不成立時呈現的值" -->
    <input type="text" name="account" placeholder="帳號" value="
    <?= htmlentities($_POST['account']?? '')?>">
    <br>
    <input type="password" name="password" placeholder="密碼" value="
    <?= htmlentities($_POST['password']?? '')?>">
    <br>
    <button>登入</button>
  </form>
</body>
</html>