<?php

function getProducts($invoice) {

    $cURLConnection = curl_init();
    $apiUrl = 'https://corp-search.synergy.ru/api/entity/invoice/';

    curl_setopt($cURLConnection, CURLOPT_URL, $apiUrl.$invoice);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = json_decode($result);

    return $jsonArrayResponse;

}

function getProduct($id) {

    $cURLConnection = curl_init();
    $apiUrl = 'https://corp-search.synergy.ru/api/entity/product/';

    curl_setopt($cURLConnection, CURLOPT_URL, $apiUrl.$id);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = json_decode($result);

    return $jsonArrayResponse;

}

function ElasticPriceFormat($price) {
	return number_format($price, 0, '', ' ');
}

function ElasticDateFormat($date) {
	$months = [
		"01" => "января",
		"02" => "февраля",
		"03" => "марта",
		"04" => "апреля",
		"05" => "мая",
		"06" => "июня",
		"07" => "июля",
		"08" => "августа",
		"09" => "сентября",
		"10" => "октября",
		"11" => "ноября",
		"12" => "декабря"
	];
	$mouth = date("m", strtotime($date));

	return 'C ' . date("d", strtotime($date)) . ' ' . $months[$mouth];
}

function getElasticCurrPrice($row) {
	$n = -1;
	if (is_array($row)) {
		foreach ($row as $price) {

			if (time() >= strtotime($price->active_from)) {
				$n++;
			}
		}
	}
	return $n;
}

// Запрос продуктов, переменные хранятся в config.php

$invoice = getProducts($invoiceId);
$invoice_online = getProducts($invoiceId_online);

try {

    if($invoice && $invoice->products != null) {

        foreach($invoice->products as $row) {

            $num = getElasticCurrPrice($row->additional_prices);

            switch($row->id) {

                case $product_econom:
                    $econom_isActive = $row->active;
                    $econom_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $econom_price    = $row->base_price->price;

                    $econom_price_next           = $row->additional_prices[$num]->price;
                    $econom_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $econom_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_standart:
                    $standart_isActive = $row->active;
                    $standart_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $standart_price    = $row->base_price->price;

                    $standart_price_next           = $row->additional_prices[$num]->price;
                    $standart_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $standart_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_business:
                    $business_isActive = $row->active;
                    $business_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $business_price    = $row->base_price->price;

                    $business_price_next           = $row->additional_prices[$num]->price;
                    $business_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $business_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_vip:
                    $vip_isActive = $row->active;
                    $vip_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $vip_price    = $row->base_price->price;

                    $vip_price_next           = $row->additional_prices[$num]->price;
                    $vip_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $vip_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_platinum:
                    $platinum_isActive = $row->active;
                    $platinum_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $platinum_price    = $row->base_price->price;

                    $platinum_price_next           = $row->additional_prices[$num]->price;
                    $platinum_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $platinum_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;
            }

        }


    }

    if($invoice_online && $invoice_online->products != null) {

        foreach($invoice_online->products as $row) {

            $num = getElasticCurrPrice($row->additional_prices);

            switch($row->id) {

                case $product_id_online:
                    $online_isActive = $row->active;
                    $online_isRecurring = isset($row->recurring->type->id) ? true: false;
                    $online_price    = $row->base_price->price;

                    $online_price_next           = $row->additional_prices[$num]->price;
                    $online_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $online_price_increasing_day = ElasticDateFormat($row->additional_prices[$num]->active_from);
                break;
            }
        }
    }


} catch (Exception $e) {

}

?>
