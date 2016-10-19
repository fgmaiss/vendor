<?php
namespace FGMGeneric;

/**
 * Class APFilter
 */
class APFilter
{
    /**
     * @param $var
     * @return string
     */
    public static function AlphaNumeric($var)
    {
        $ret = "";
        $var = trim($var);

        for ($i = 0; $i < strlen($var); $i ++) {
            $s = substr($var, $i, 1);
            if (strspn($s, "0123456789qwertyuiopasdfghjklzxcvbnm@()_-=+.:[]{}()!#$%&*/><,\\|?;QWERTYUIOPASDFGHJKLZXCVBNM ") > 0) {
                $ret = $ret . $s;
            }
        }
        return ($ret);
    }

    /**
     * @param $var
     * @return string
     */
    public static function Alpha($var)
    {
        $ret = "";
        $var = trim($var);

        for ($i = 0; $i < strlen($var); $i ++) {
            $s = substr($var, $i, 1);
            if (strspn($s, "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM ") > 0) {
                $ret = $ret . $s;
            }
        }
        return ($ret);
    }

    /**
     * @param $var
     * @return string
     */
    public static function Number($var)
    {
        $var = trim($var);
        $ret = "";
        for ($i = 0; $i < strlen($var); $i ++) {
            $s = substr($var, $i, 1);
            if (strspn($s, "0123456789") > 0) {
                $ret = $ret . $s;
            }
        }
        return ($ret);
    }

    /**
     * @param $s
     * @return mixed
     */
    public static function Accent($s)
    {
        $s = str_replace("á", "a", $s);
        $s = str_replace("à", "a", $s);
        $s = str_replace("â", "a", $s);
        $s = str_replace("ã", "a", $s);
        $s = str_replace("ª", "a", $s);
        $s = str_replace("Á", "A", $s);
        $s = str_replace("À", "A", $s);
        $s = str_replace("Â", "A", $s);
        $s = str_replace("Ã", "A", $s);
        $s = str_replace("é", "e", $s);
        $s = str_replace("í", "i", $s);
        $s = str_replace("ì", "i", $s);
        $s = str_replace("Í", "I", $s);
        $s = str_replace("Ì", "I", $s);
        $s = str_replace("è", "e", $s);
        $s = str_replace("ê", "e", $s);
        $s = str_replace("É", "E", $s);
        $s = str_replace("È", "E", $s);
        $s = str_replace("Ê", "E", $s);
        $s = str_replace("ó", "o", $s);
        $s = str_replace("ò", "o", $s);
        $s = str_replace("ô", "o", $s);
        $s = str_replace("õ", "o", $s);
        $s = str_replace("º", "o", $s);
        $s = str_replace("Ó", "O", $s);
        $s = str_replace("Ò", "O", $s);
        $s = str_replace("Ô", "O", $s);
        $s = str_replace("Õ", "O", $s);
        $s = str_replace("ú", "u", $s);
        $s = str_replace("ù", "u", $s);
        $s = str_replace("û", "u", $s);
        $s = str_replace("Ú", "U", $s);
        $s = str_replace("Ù", "U", $s);
        $s = str_replace("Û", "U", $s);
        $s = str_replace("ç", "c", $s);
        $s = str_replace("Ç", "C", $s);

        return ($s);
    }


}