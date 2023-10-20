<?php

header('Content-Type: application/json');
// 以物件的形式用JSON格式讀取檔案
echo json_encode($_FILES);

/*
// 只上傳一個檔案是物件的形式，postman測試時key的右側下拉選單要選擇file，error值為0表示上傳沒有錯誤
{
    "avatar": {
        "name": "a5.jpg",
        "full_path": "a5.jpg",
        "type": "image/jpeg",
        "tmp_name": "C:\\xampp\\tmp\\php1612.tmp",
        "error": 0,
        "size": 188907
    }
}
//若要上傳多個檔案取名必須是__[]，結果會以陣列呈現
{
    "photos": {
        "name": [
            "a1.jpg",
            "a3.jpg"
        ],
        "full_path": [
            "a1.jpg",
            "a3.jpg"
        ],
        "type": [
            "image/jpeg",
            "image/jpeg"
        ],
        "tmp_name": [
            "C:\\xampp\\tmp\\phpDB45.tmp",
            "C:\\xampp\\tmp\\phpDB46.tmp"
        ],
        "error": [
            0,
            0
        ],
        "size": [
            113652,
            199009
        ]
    }
}
*/

