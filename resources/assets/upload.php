<?php
// 一時アップロード先ファイルパス
$file_tmp1  = $_FILES["img01"]["tmp_name"];
$file_tmp2  = $_FILES["img02"]["tmp_name"];
$file_tmp3  = $_FILES["img03"]["tmp_name"];

$result_path = []; // Ajaxで結果を返すようの配列
$result = false;
// 正式保存先ファイルパス
if ($file_tmp1 != "") {
    $file_save01 = "/Users/kenya/program/uploader/public/uploads/" . $_FILES["img01"]["name"];
    $result = move_uploaded_file($file_tmp1, $file_save01);
    $result_path['img01'] = "/uploads/" . $_FILES["img01"]["name"];
}
if ($file_tmp2 != "") {
    $file_save02 = "/Users/kenya/program/uploader/public/uploads/" . $_FILES["img02"]["name"];
    $result = move_uploaded_file($file_tmp2, $file_save02);
    $result_path['img02'] = "/uploads/" . $_FILES["img02"]["name"];
}
if ($file_tmp3 != "") {
    $file_save03 = "/Users/kenya/program/uploader/public/uploads/" . $_FILES["img03"]["name"];
    $result = move_uploaded_file($file_tmp3, $file_save03);
    $result_path['img03'] = "/uploads/" . $_FILES["img03"]["name"];
}

// ファイル移動

if ($result === true) {
    // jsonでデータを送る
    echo json_encode($result_path);
} else {
    echo "UPLOAD NG";
}