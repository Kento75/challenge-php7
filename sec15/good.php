<?php
$point = 50;

// ifないだけで宣言していると echo でエラーになる(ifの条件に該当しない場合変数が生成されないため)
$message = "";

if($point >= 80) {
  $message = "合格";
}

echo $message;
?>