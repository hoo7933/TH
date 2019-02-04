<?php
$set = $_GET['set'];
$class = $_GET['class'];
$part = $_GET['part'];
$level = $_GET['level'];
$star = $_GET['star']."성";
$price = $_GET['price']."메소";
if ($set == K){
  $set_1 = '카루타';
} elseif ($set == N) {
  $set_1 = '네크로';
}
if ($class == W) {
  $class_1 = '전사 ';
} elseif ($class == R) {
  $class_1 = '궁수 ';
} elseif ($class == M) {
  $class_1 = '마법사 ';
} elseif ($class == T) {
  $class_1 = '도적 ';
} elseif ($class == P) {
  $class_1 = '해적 ';
}
if ($part == H) {
  $part_1 = '모자 ';
} elseif ($part == S) {
  $part_1 = '상의 ';
} elseif ($part == P) {
  $part_1 = '하의 ';
} elseif ($part == F) {
  $part_1 = '신발 ';
}
if ($level == 5) {
  $level_1 = '50급 ';
} elseif ($level == 6) {
  $level_1 = '60급 ';
} elseif ($level == 7) {
  $level_1 = '70급 ';
}
$star_1 = $star.'<br>';
$price_1 = $price.'<br>';
$TH_time = date("Y-m-d H:i:s");
echo "$set_1 <br>";
echo "$class_1 <br>";
echo "$part_1 <br>";
echo "$level_1 <br>";
echo "$star_1 <br>";
echo "$price_1 <br>";
$log_txt = $set_1."|".$class_1."|".$part_1."|".$level_1."|".$star."|".$price."|".$TH_time;
$log_file = fopen('log.txt', "a");
fwrite($log_file, $log_txt."\r\n");
fclose($log_file);
?>
