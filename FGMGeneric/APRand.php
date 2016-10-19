<?php
namespace FGMGeneric;

class APRand
{
    private function APRandom()
    {
        static $randCalled = FALSE;
        if (! $randCalled) {
            srand((double) microtime() * 1000000);
            $randCalled = TRUE;
        }
    }

    public static function Number($low, $high)
    {
        APrandom();
        $rNum = rand($low, $high);
        return $rNum;
    }
}