<?php
// 啟用session功能
session_start();

// 一般來說這裡的資料會是資料庫較易修改的資料不會是這樣的死資料
$users=[
  'Ailee' => [
    'password' => 'Ailee1234',
    'nickname' => '艾莉',
  ],
  'Bella' => [
    'password' => 'Bella4321',
    'nickname' => '蓓菈',
  ],
];
// 判斷使用者是否有輸入帳號、帳號這欄的內容是否有取得資料，若使用者沒有輸入內容則不會繼續進行以下判斷
if(isset($_POST['account'])){
// 若使用者有輸入帳號且有取得輸入的帳號資料，判斷使用者輸入的帳號是否與資料庫的資料一致(此帳號是否存在)，若不一致傳回此提示且不繼續進行密碼判斷
  $errInfo = "帳號或密碼錯誤";
  // 判斷使用者帳號存在後，繼續進行密碼的判斷
  if(isset($users[$_POST['account']])){
    $item = $users[$_POST['account']];
    if($item['password']===$_POST['password']){
      // 若使用者的帳號及密碼判斷為存在，則取消上面的"帳號或密碼錯誤"的回傳訊息
      unset($errInfo);
      $_SESSION['admin'] = [
        'id' => $_POST['account'],
        'nickname' => $item['nickname'],
      ];
    } else {
      # 密碼是錯的
    }
  } else {
    # 帳號是錯的
  }
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