<?php

namespace FGMGeneric;


/**
 * Verifica se a inst�ncia do servidor � Desenvolvimento ou Produ��o
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