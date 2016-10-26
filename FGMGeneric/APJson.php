<?php

namespace FGMGeneric;


/**
 * Acessa uma API e retorna um arquivo JSON
 * Class APJson
 * @package FGMGeneric
 */
class APJson
{
    /**
     * APJson constructor.
     * @param string $link
     * @param string $method
     * @param array $array
     */
    public static function __construct($link, $method, $array)
    {
        $method = APConvert::Upper($method);

        if(!in_array($method, ['GET','POST','PUT','PATCH','DELETE'])) {
            return json_encode(["erro" => "Método {$method} inválido!"]);
        }

        $data_json = json_encode($array);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_json)
        ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}