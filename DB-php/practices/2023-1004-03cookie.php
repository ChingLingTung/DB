<?php
setcookie("myCookie","cookie的value")
?>
<!-- 設定cookie要在一開始，因為是以檔頭方式傳送，若有空白,則會被讀取為空白的html body在最上方 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- 讀取cookie的value -->
  <?= $_COOKIE["myCookie"]?>
</body>
</html>