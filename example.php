<?php

include_once("src/RatesManager.php");

/*
 *
 *  Example getting currency rates from a base source.
 *
 */

$object = new RatesManager();

$object->setCurrencyBase('USD');
$response = $object->getCurrencyRates();

foreach ($response->rates as $currency => $rate)
{
    echo "1 USD = " . $rate. " " . $currency . "\n";
}




