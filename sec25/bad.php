<?php
$data = file("test.txt");

foreach($data as $line) {
  if($line == "港区") {
    echo "東京";
  }
}
?>