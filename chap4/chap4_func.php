<?php
function createMsg( $name, $price) {
	$msg = <<< EOM
{$name}様
ご注文承りました。
合計{$price}円です。\n
EOM;
	echo $msg;
}

function getPrice ($cnt) {
	return 500 * $cnt;
}