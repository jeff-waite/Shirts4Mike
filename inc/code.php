<?php
$hour = date('G');
if ($hour < 12) {
	echo "Good morning";
}
if ($hour >=12 and $hour < 17) {
	echo "Good afternoon!";
}
if ($hour >= 17 and $hour < 20) {
	echo "Good evening";
}
if ($hour >= 20) {
	echo "Good night";
}
?>