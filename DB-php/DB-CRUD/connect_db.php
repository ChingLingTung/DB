<?php
// 主機名稱
$db_host = "localhost";
// 資料庫名稱
$db_name = "proj57";
// 使用者名稱
$db_user = "root";
// 使用者密碼
$db_pass = "admin";

# data source name
$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";
// 在PDO的class底下新增單一個體
$pdo = new PDO($dsn, $db_user, $db_pass);
