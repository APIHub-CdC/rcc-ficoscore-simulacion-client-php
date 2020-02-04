<?php

namespace RCCFicoScoreSimulacion\Client\Model;

use \ArrayAccess;
use \RCCFicoScoreSimulacion\Client\ObjectSerializer;

class Creditos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCFicoScoreSimulacionModelName = 'Creditos';
    
    protected static $RCCFicoScoreSimulacionTypes = [
        'creditos' => '\RCCFicoScoreSimulacion\Client\Model\Credito[]'
    ];
    
    protected static $RCCFicoScoreSimulacionFormats = [
        'creditos' => null
    ];
    
    public static function RCCFicoScoreSimulacionTypes()
    {
        return self::$RCCFicoScoreSimulacionTypes;
    }
    
    public static function RCCFicoScoreSimulacionFormats()
    {
        return self::$RCCFicoScoreSimulacionFormats;
    }
    
    protected static $attributeMap = [
        'creditos' => 'creditos'
    ];
    
    protected static $setters = [
        'creditos' => 'setCreditos'
    ];
    
    protected static $getters = [
        'creditos' => 'getCreditos'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$RCCFicoScoreSimulacionModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['creditos'] = isset($data['creditos']) ? $data['creditos'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getCreditos()
    {
        return $this->container['creditos'];
    }
    
    public function setCreditos($creditos)
    {
        $this->container['creditos'] = $creditos;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
