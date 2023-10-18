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
    // 將$item設定為使用者帳號的變數(一個物件)
    $item = $users[$_POST['account']];
    // 如果使用者輸入的密碼存在(與資料庫相符)
    if($item['password']===$_POST['password']){
      // 則取消上面的"帳號或密碼錯誤"的回傳訊息
      unset($errInfo);
      // 設定admin變數為一個物件，物件中包含id和nickname
      $_SESSION['admin'] = [
        // id代表使用者送出的帳號值
        'id' => $_POST['account'],
        // nickname代表使用者帳號變數(物件)中的nickname值
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
  <!-- 如果使用者成功登入(判斷登入狀態的admin變數物件中的東西存在)) -->
  <?php if (isset($_SESSION['admin'])) : ?>
    <!-- 畫面呈現使用者的暱稱+您好的文字 -->
    <h2><?= $_SESSION['admin']['nickname'] ?> 您好</h2>
    <!-- 同時提供一個登出的按鈕 -->
    <p><a href="logout.php">登出</a></p>
    <!-- 如果使用者沒有成功登入 -->
  <?php else : ?>
    <!-- 呈現畫面為樣式紅色的$errInfo設定的"帳號或密碼錯誤"文字 -->
    <div style="color:red"><?= $errInfo ?? '' ?></div>
    <!-- 並維持呈現登入畫面中表格的狀態 -->
    <form method="post">
      <input type="text" name="account" placeholder="帳號" value="<?= htmlentities($_POST['account'] ?? '') ?>">
      <br>
      <input type="password" name="password" placeholder="密碼" value="<?= htmlentities($_POST['password'] ?? '') ?>">
      <br>
      <button>登入</button>
    </form>
  <?php endif; ?>  
</body>
</html>