<?php

class GoogleTranslate{

    # Google API Key: config('google_api_key')
    # Google Translate Endpoint: config('g_translate_endpoint')
    # payload: json, { "q": "string", "target": "string" }

static function init($text, $target = "en"){
        $url = config('g_translate_endpoint') . "?key=" . config('google_api_key');

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
        "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = json_encode([ "q" => $text, "target" => $target ]);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        
        return $resp;
    }
}