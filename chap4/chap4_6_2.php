<?php
require_once __DIR__ . "/chap4_func.php";
$orders = [
	["name" => "空海", "cnt" => 6],
	["name" => "最澄", "cnt" => 8]
];
foreach ($orders as $order ) {
	$price = getPrice( $order["cnt"]);
	createMsg( $order["name"], $price);
}