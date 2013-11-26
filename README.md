Please note that this API is really basic and (eventually) under development, hope you'll have use for it :)

Usage:

	A working example is available in demo.php.

	$btc = new btchain();
	$btc->btc_value(); //without args will return the USD price for the last 15mins (or btc_value('USD','15m'))
	$btc->btc_value('currency','type'); //will return the data type for the selected currency.

	Available currencies / datas are in README.md.



Useable currencies:

	"USD"
	"CNY"
	"JPY"
	"SGD"
	"HKD"
	"CAD"
	"AUD"
	"NZD"
	"GBP"
	"DKK"
	"SEK"
	"CHF"
	"EUR"
	"RUB"
	"PLN"
	"THB"

Useable data types:

	"15m" -> return last 15min's value
	"24h" -> return last 24h's value
	"last" -> return last average price
	"buy" -> return buy price
	"sell" -> return sell price
	"symbol" -> return currency's symbol