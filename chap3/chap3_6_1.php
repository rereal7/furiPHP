<?php
$money = 30000;
while ($money >= 0) {
	var_dump( $money);
	$money = $money - 5080; // => $money -= 5080;  複合演算子を用いると簡易的に表記できる
}
?>