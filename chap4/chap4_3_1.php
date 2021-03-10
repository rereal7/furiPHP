<?php
function createMsg( $name, $price) {
	$msg = <<< EOM
{$name}様
ご注文承りました。
合計{$price}円です。\n
EOM;
	echo $msg;
}
createMsg("家康", 300000);
