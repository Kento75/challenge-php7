<?php
function update($v) {
  $status = $v;
}

$status = "変更前";

update("変更後");
echo $status;
?>
