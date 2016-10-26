<?php
/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 19/10/2016
 * Time: 15:40
 */

namespace FGMGeneric;


/**
 * Class APDate
 * @package FGMGeneric
 */
class APDate
{
    /**
     * @param $date string
     * @return null|string
     */
    public static function Portugues($date)
    {
        if (strlen(trim($date)) > 0 and !in_array($date, ['0001-01-01', '0001/01/01'])) {
            return (substr($date, 8, 2) . '/' . substr($date, 5, 2) . '/' . substr($date, 0, 4));
        } else {
            return null;
        }

    }

    /**
     * @param $date string
     * @return null|string
     */
    public static function Ingles($date)
    {
        if (strlen(trim($date)) > 0 and !in_array($date, ['01-01-0001', '01/01/0001'])) {
            return (substr($date, 6, 4) . '-' . substr($date, 3, 2) . '-' . substr($date, 0, 2));
        } else {
            return null;
        }

    }

    /**
     * @param $date string
     * @return bool
     */
    public static function Nula($date)
    {
        if (strlen(trim($date)) > 0 and !in_array($date, ['01-01-0001', '01/01/0001', '0001-01-01', '0001/01/01'])) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * @return false|string
     */
    public static function Datetimeansi()
    {
        Return date("Y-m-d H:i:s", mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y')));
    }

    /**
     * @param string $tmst
     * @param $usr string
     * @return string
     */
    public static function Timestamp($tmst='', $usr)
    {
        return self::Datetimeansi().'-Usuário:'.\FGMGeneric\APConvert::Zeroesq($usr,6);
    }

}