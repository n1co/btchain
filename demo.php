<?php
	require_once('btchain.php');

	$btc = new btchain();

	//btc_value function wich return the actual value of one btc in selected currency
	echo '1BTC actually worth: '.$btc->btc_value('USD','15m').'USD<br />';

	//tobtc function converts the amount of selected currency to btc
	$cur = 'USD';
	$val = '42';
	echo $val.$cur.' worth '.$btc->tobtc($cur, $val).'BTC';
?>