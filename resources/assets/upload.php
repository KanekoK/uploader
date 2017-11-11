<?php
// 一時アップロード先ファイルパス
$file_tmp  = $_FILES["img01"]["tmp_name"];

// 正式保存先ファイルパス
$file_save = "/Users/kenya/program/uploader/public/uploads/" . $_FILES["img01"]["name"];

// ファイル移動
$result = @move_uploaded_file($file_tmp, $file_save);
if ( $result === true ) {
    echo "/uploads/" . $_FILES["img01"]["name"];
} else {
    echo "UPLOAD NG";
}