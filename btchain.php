<?php
	function btc_value($currency = 'USD', $type = '15m')
	{
		$data = file_get_contents('https://blockchain.info/ticker');
		$res = preg_replace( '/":(\d+)/', '":"\1"', $data );
		$json = json_decode($res);
		$var = $json->{$currency}->{$type};
		return $var;
	}
?>