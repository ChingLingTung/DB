<?php
require __DIR__ . '/connect_db.php';

function getCateTree($pdo) {
  $sql = "SELECT * FROM `categories` ORDER BY `parent_sid`, `sid`";
  $rows = $pdo->query($sql)->fetchAll();
  $dict = [];
// &$v意為取得$v的位置而非值
  foreach ($rows as &$v) {
    $dict[$v['sid']] = &$v;
  }
  $cateTree = [];
  foreach ($dict as &$row) {
    if ($row['parent_sid'] != 0) {
      $dict[$row['parent_sid']]['children'][] = &$row;
    } else {
      $cateTree[] = &$row;
    }
  }
  return $cateTree;
}
echo json_encode(getCateTree($pdo));
