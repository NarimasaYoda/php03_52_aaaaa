<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
    <ul>
    <li><a href="index_kadai2.php">index_2.php</a></li>
        <li><a href="insert_kadai2.php">insert_2.php</a></li>
        <li><a href="select_kadai2.php">select_2.php</a></li>
    </ul>

<?php

require_once("funcs.php");

//1.POSTデータ取得

$name = $_POST['name'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = $_POST['kanri_flg'];
$life_flg = $_POST['life_flg'];

//2.DB接続
$pdo = db_conn();

//3.データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO
                        gs_user_table(id, name, lid, lpw, kanri_flg, life_flg)
                      VALUES(
                        NULL, :name, :lid, :lpw, :kanri_flg, :life_flg)"
                      );
//必ず「:」が必要

//4.バインド変数を用意（定型文）
// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);

//5.実行
$status = $stmt->execute();

//6.データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("index.php");
}
?>

</body>
</html>