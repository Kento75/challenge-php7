<?php
$file_name = "log.txt";
$dt = date("Y/m/d H:i:s");
file_put_contents($file_name, $dt);
?>