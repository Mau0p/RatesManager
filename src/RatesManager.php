<?php

/*
 *  Helper for fixer.io API
 *
 *  Author: mau0p
 *
 */

class RatesManager {

    // API url
    private $apiURL = 'http://api.fixer.io/latest?base=';

    // Currency Base
    private $base;

    // List of currency rates from a base source
    public function getCurrencyRates()
    {
        return $this->curlCall();
    }

    // Set currency base
    public function setCurrencyBase($base)
    {
        $this->base = $base;
    }

    // Curl Call
    protected function curlCall()
    {
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->apiURL . $this->base
        ));

        // Send the request & save response to $response
        $response = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return json_decode($response);
    }
}




