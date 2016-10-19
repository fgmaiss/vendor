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
        $s = str_replace("�", "a", $s);
        $s = str_replace("�", "a", $s);
        $s = str_replace("�", "a", $s);
        $s = str_replace("�", "a", $s);
        $s = str_replace("�", "a", $s);
        $s = str_replace("�", "A", $s);
        $s = str_replace("�", "A", $s);
        $s = str_replace("�", "A", $s);
        $s = str_replace("�", "A", $s);
        $s = str_replace("�", "e", $s);
        $s = str_replace("�", "i", $s);
        $s = str_replace("�", "i", $s);
        $s = str_replace("�", "I", $s);
        $s = str_replace("�", "I", $s);
        $s = str_replace("�", "e", $s);
        $s = str_replace("�", "e", $s);
        $s = str_replace("�", "E", $s);
        $s = str_replace("�", "E", $s);
        $s = str_replace("�", "E", $s);
        $s = str_replace("�", "o", $s);
        $s = str_replace("�", "o", $s);
        $s = str_replace("�", "o", $s);
        $s = str_replace("�", "o", $s);
        $s = str_replace("�", "o", $s);
        $s = str_replace("�", "O", $s);
        $s = str_replace("�", "O", $s);
        $s = str_replace("�", "O", $s);
        $s = str_replace("�", "O", $s);
        $s = str_replace("�", "u", $s);
        $s = str_replace("�", "u", $s);
        $s = str_replace("�", "u", $s);
        $s = str_replace("�", "U", $s);
        $s = str_replace("�", "U", $s);
        $s = str_replace("�", "U", $s);
        $s = str_replace("�", "c", $s);
        $s = str_replace("�", "C", $s);

        return ($s);
    }


}