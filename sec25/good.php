<?php

// 改行コードが比較の際に邪魔をしているので
// FILE_IGNORE_NEW_LINES を使用する
$data = file("test.txt", FILE_IGNORE_NEW_LINES);

foreach($data as $line) {
  if($line == "港区") {
    echo "東京";
  }
}
?>