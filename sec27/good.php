<?php
$a = "　　 テスト ";
$a = trim(mb_convert_kana($a, 's'));
echo "==={$a}===";
?>