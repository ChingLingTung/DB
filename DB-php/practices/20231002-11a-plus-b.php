<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>a plus b</title>
</head>
<body>
<?php
  // 如果a有設定值，將a轉成整數，如果a沒有設定值，回傳0
  $a = isset($_GET["a"]) ? intval($_GET["a"]):0;
  // 如果b不是空值(null或空字串)，將b轉成帶有小數點的數,如果b是空值，回傳0
  $b = !empty($_GET["b"]) ? floatval($_GET["b"]):0;
  echo $a + $b;
?>

</body>
</html>