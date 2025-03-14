<?php

namespace Class;

use Exception;

class Base
{
    public function sendRequest(string $params)
    {
        try {
            $ch = curl_init($this->baseUrl . "?" . $params);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_NOBODY, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            $output = curl_exec($ch);
            curl_close($ch);
            return json_decode($output, true);
            
        } catch (Exception $e) {
            var_dump($e);
            die;
        }
    }
}
