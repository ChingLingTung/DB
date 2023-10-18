<?php
// fm32k6這支php檔案所在的位置並設定以$dir表示
$dir = __DIR__ . '/../uploads/';
// 避免用戶傳垃圾檔案，只允許三種圖檔格式
$exts = [
  'image/jpeg' => '.jpg',
  'image/png' => '.png',
  'image/webp' => '.webp',
];
// 在檔頭告訴用戶端這支檔案是JSON格式
header('Content-Type: application/json');
// 設定一個$output陣列且陣列中預設success值是false，file值是空字串
$output = [
  'success' => false,
  'file' => ''
];
// 如果檔案存在(有傳檔案)且檔案的內容也存在
if (!empty($_FILES) and !empty($_FILES['avatar']) and $_FILES['avatar']['error']==0) {
  
  if (!empty( $exts[$_FILES['avatar']['type']] )) {
    // 設定上傳的檔案的副檔名
    $ext = $exts[$_FILES['avatar']['type']];

    # 透過uniqid()生成13碼不重複隨機編碼搭配sha1()生成長度共40的隨機的主檔名並設定該主檔名為$f
    $f = sha1($_FILES['avatar']['name']. uniqid());

    if (
    // 使用move_uploaded_file()將上傳的檔案移動到指定位置
      move_uploaded_file(
        $_FILES['avatar']['tmp_name'],
        // 位置及完整檔名
        $dir . $f. $ext
      )
    ) {
      // 檔案傳送之後$output陣列中的值變更，success變成true，file值設定為avatar的name
      $output['success'] = true;
      $output['file'] = $_FILES['avatar']['name'];
    }
  }
}
echo json_encode($output);
