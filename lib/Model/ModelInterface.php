<?php

namespace RCCFicoScoreSimulacion\Client\Model;

interface ModelInterface
{
    
    public function getModelName();
    
    public static function RCCFicoScoreSimulacionTypes();
    
    public static function RCCFicoScoreSimulacionFormats();
    
    public static function attributeMap();
    
    public static function setters();
    
    public static function getters();
    
    public function listInvalidProperties();
    
    public function valid();
}
