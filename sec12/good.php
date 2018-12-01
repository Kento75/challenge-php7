<?php
$var = "テスト";

// varは予約語　使えない
function var1($var) {
  echo $var;
}

var1($var);
?>