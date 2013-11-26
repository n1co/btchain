<?php
	require_once('btchain.php');
	
	$btc = new btchain();
	echo '1btc actually worth: '.$btc->btc_value('USD','15m').'USD';
?>