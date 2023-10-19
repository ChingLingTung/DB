<?php
session_start();
echo json_encode($_SESSION);
// 可察看登入狀況的一支php檔案，如果一片白代表沒問題，登入有問題會跳錯誤