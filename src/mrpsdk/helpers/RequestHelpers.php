<?php

namespace mrpsdk\helpers;

class RequestHelpers
{
    /**
     * This commits a GET Request
     *
     * @param  string $url
     * @return mixed
     */
    public static function get($url)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $res = curl_exec($curl);

        curl_close($curl);

        return json_decode($res, false);
    }
}