<?php
class btchain
{
	function parse_json($url)
	{
		$data = file_get_contents($url);
		$res = preg_replace( '/":(\d+)/', '":"\1"', $data );
		$json = json_decode($res);
		return $json;
	}

	function btc_value($currency, $type)
	{
		$json = $this->parse_json('https://blockchain.info/fr/ticker');
		$var = $json->{$currency}->{$type};
		return $var;
	}
}
?>