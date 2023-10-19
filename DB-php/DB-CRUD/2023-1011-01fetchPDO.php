<?php
// 透過connect_db.php這支檔案連接資料庫
require __DIR__.'connect_db.php';
// 較不建議的方法因連不上只會warning
# include __DIR__. '/connect_db.php';

// 設定PDOstatement，透過query選擇器使用sql語法從mysql進行查詢
$stmt = $pdo->query("SELECT * FROM address_book LIMIT 5");
// fetch在這裡是抓取資料，ASSOC代表關聯性
$row = $stmt->fetch(PDO::FETCH_NUM);
// $row = $stmt->fetch(PDO::FETCH_BOTH);
// 將$row轉成JSON格式較易閱讀
echo json_encode($row);