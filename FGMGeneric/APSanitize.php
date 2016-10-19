<?php
namespace FGMGeneric;

/**
 * Class Sanitize
 */
class APSanitize
{

    /**
     * @param $var
     * @return mixed
     */
    public static function Clear($var)
    {
        $var = self::Seg($var);
        $var = filter_var($var, FILTER_UNSAFE_RAW);
        $var = filter_var($var, FILTER_SANITIZE_STRING);
        $var = filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
        $var = filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES);
        return $var;
    }

    /**
     * @param $var
     * @return mixed
     */
    public static function ClearArray($var)
    {
        foreach ($var as $k => $v) {
            $var[$k] = self::Clear($v);
        }
        return $var;
    }

    /**
     * @param string $param
     * @return string
     */
    public static function Seg($param = '')
    {
        $param = str_ireplace("\'", "`", $param);
        $param = str_ireplace("'", "`", $param);
        $param = str_ireplace("\\", "", $param);
        $param = str_ireplace("INSERT ", "*I-NSERT ", $param);
        $param = str_ireplace("DROP ", "*D-ROP ", $param);
        $param = str_ireplace("TABLE ", "*T-ABLE ", $param);
        $param = str_ireplace("truncate ", "*t-runcate ", $param);
        $param = str_ireplace("TRUNCATE ", "*T-RUNCATE ", $param);
        $param = str_ireplace("UPDATE ", "*U-PDATE ", $param);
        $param = str_ireplace("DELETE ", "*D-ELETE ", $param);
        $param = str_ireplace("SELECT ", "*S-ELECT ", $param);
        $param = str_ireplace("update ", "*u-pdate ", $param);
        $param = str_ireplace("delete ", "*d-elete ", $param);
        $param = str_ireplace("select ", "*s-elect ", $param);
        $param = str_ireplace("insert ", "*i-nsert ", $param);
        $param = str_ireplace("drop ", "*d-rop ", $param);
        $param = str_ireplace(" or ", " o-r ", $param);
        $param = str_ireplace("=", " ", $param);
        $param = str_ireplace("table ", "*t-able ", $param);
        $param = strip_tags($param);
        return ($param);
    }
}