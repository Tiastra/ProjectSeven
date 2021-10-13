<?php

namespace App\util;

use DateTime;
use DateTimeZone;
use Exception;

class DataUtil
{

    /**
     * @throws Exception
     */
    public static function hoje(){
        $timezone = new DateTimeZone('America/Sao_Paulo');
        $agora = new DateTime('now', $timezone);

        return $agora->format('Y-m-d');
    }
}