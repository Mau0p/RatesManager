<?php

include_once("lib/RatesManager.php");


/*
 *
 *  Example updating your table of
 *  currency rates
 *
 */

$object = new RatesManager();

$object->setCurrencyBase('USD');
$test = $object->getCurrencyRates();


var_dump($test);



