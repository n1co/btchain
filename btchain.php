<?php
class btchain
{
	function parse_json($url)
	{
		$data = file_get_contents($url);
		//Next line prevent a php bug involving floating point and x64 processors (should be fixed if you use php-5.4)
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