<?php

namespace FGMGeneric;


/**
 * Verifica se a instтncia do servidor щ Desenvolvimento ou Produчуo
 * Class APLocal
 * @package FGMGeneric
 */
class APInstance
{
    /**
     * @param $param string
     * @return bool
     */
    public static function Development($param)
    {
        if (strpos($param, '192.168.15.250') !== false || strpos($param, 'localhost') !== false) {
            return true;
        }
        return false;
    }

    /**
     * @param $param string
     * @return bool
     */
    public static function Production($param)
    {
        if (strpos($param, '192.168.15.250') !== false || strpos($param, 'localhost') !== false) {
            return false;
        }
        return true;
    }
}