<?php

namespace RCCFicoScoreSimulacion\Client\Model;
use \RCCFicoScoreSimulacion\Client\ObjectSerializer;

class CatalogoSexo
{
    
    const F = 'F';
    const M = 'M';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::F,
            self::M,
        ];
    }
}
