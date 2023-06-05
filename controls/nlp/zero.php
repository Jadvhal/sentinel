<?php

class GptZero{
    # base endpoint: config('gptzero_endpoint')
    # content-type: application/json { "document": "string" }

    static function init($text = null){

        $originalString = $text ?? request('document');

        // truncate the string to 2500 characters
        $originalString = substr($originalString, 0, 2800);

        // explode the string into an array of sentences and remove the last sentence
        $originalString = explode(".", $originalString); array_pop($originalString);
        $originalString = implode(".", $originalString);

        # expected response: { "data": { "translations": [ { "translatedText": "text", "detectedSourceLanguage": "source" } ] } }
        $translatedString = json_decode(GoogleTranslate::init($originalString));

        # if detected language is not english, document = translatedString else document = originalString
        $document = $translatedString->data->translations[0]->detectedSourceLanguage != "en" ? $translatedString->data->translations[0]->translatedText : $originalString;

        
        header('Content-Type: application/json');

        echo self::check_text($document);
    }

    static function check_text($text = null){

        // send request to gptzero api
        $url = config('gptzero_endpoint');
        $api_key = config('gptzero_api_key');

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array( "Content-Type: application/json" );
        if($api_key) array_push($headers, "x-api-key: $api_key");

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = json_encode([ "document" => $text ]);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        if(config('debug') == "true"):
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        endif;

        $resp = curl_exec($curl);
        
        return $resp;
    }
}