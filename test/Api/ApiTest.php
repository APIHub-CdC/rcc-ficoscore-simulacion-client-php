<?php

namespace RCCFicoScoreSimulacion\Client;

use \RCCFicoScoreSimulacion\Client\Configuration;
use \RCCFicoScoreSimulacion\Client\ApiException;
use \RCCFicoScoreSimulacion\Client\ObjectSerializer;

class ApiTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $handler = \GuzzleHttp\HandlerStack::create();
        $config = new \RCCFicoScoreSimulacion\Client\Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $this->apiInstance = new \RCCFicoScoreSimulacion\Client\Api\RCCFicoScoreSimulacionApi($client, $config);

        $this->x_api_key = "your_api_key";
        $this->x_full_report = 'false';         
    }    

    public function testGetReporte()
    {
        $estado = new \RCCFicoScoreSimulacion\Client\Model\CatalogoEstados();
        $nacionalidad = new \RCCFicoScoreSimulacion\Client\Model\CatalogoEstados();
        $request = new \RCCFicoScoreSimulacion\Client\Model\PersonaPeticion();
        $domicilio = new \RCCFicoScoreSimulacion\Client\Model\DomicilioPeticion();        

        $request->setApellidoPaterno("ROBERTO");
        $request->setApellidoMaterno("SAHAGUN");
        $request->setApellidoAdicional(null);
        $request->setPrimerNombre("ZARAGOZA");
        $request->setSegundoNombre(null);
        $request->setFechaNacimiento("1952-05-13");
        $request->setRfc("SAZR010101");
        $request->setCurp(null);
        $request->setNacionalidad("MX");
        $request->setResidencia(null);
        $request->setEstadoCivil(null);
        $request->setSexo(null);
        $request->setClaveElectorIfe(null);
        $request->setNumeroDependientes(null);
        $request->setFechaDefuncion(null);

        $domicilio->setDireccion("HIDALGO 32");
        $domicilio->setColoniaPoblacion("CENTRO");
        $domicilio->setDelegacionMunicipio("LA BARCA");
        $domicilio->setCiudad("BENITO JUAREZ");
        $domicilio->setEstado($estado::JAL);
        $domicilio->setCp("44190");
        $domicilio->setFechaResidencia(null);
        $domicilio->setNumeroTelefono(null);
        $domicilio->setTipoDomicilio(null);
        $domicilio->setTipoAsentamiento(null);
        $request->setDomicilio($domicilio);

        try {
            $result = $this->apiInstance->getReporte($this->x_api_key, $request, $this->x_full_report);
            print_r($result);
            $this->assertTrue($result->getFolioConsulta()!==null);

            return $result->getFolioConsulta();
        } catch (Exception $e) {
            echo 'Exception when calling RCCFicoScoreSimulacionApi->getReporte: ', $e->getMessage(), PHP_EOL;
        }
    } 

   /**
     * @depends testGetReporte
     */    
    public function testGetConsultas($folioConsulta)
    {
        if($this->x_full_report == "false") {
            try {
                $result = $this->apiInstance->getConsultas($folioConsulta, $this->x_api_key);
                print_r($result);
                $this->assertTrue($result->getConsultas()!==null);
            } catch (Exception $e) {
                echo 'Exception when calling RCCFicoScoreSimulacionApi->testGetConsultas: ', $e->getMessage(), PHP_EOL;
            }
        } else {
            print_r("x_full_report inicializado en true");
        }
    }


    /**
     * @depends testGetReporte
     */
    public function testGetCreditos($folioConsulta)
    {
        if($this->x_full_report == "false") {
            try {
                $result = $this->apiInstance->getCreditos($folioConsulta, $this->x_api_key);
                print_r($result);
                $this->assertTrue($result->getCreditos()!==null);
            } catch (Exception $e) {
                echo 'Exception when calling RCCFicoScoreSimulacionApi->testGetCreditos: ', $e->getMessage(), PHP_EOL;
            }
        } else {
            print_r("x_full_report inicializado en true");
        }        
    }

    /**
     * @depends testGetReporte
     */
    public function testGetDomicilios($folioConsulta)
    {
        if($this->x_full_report == "false") {
            try {
                $result = $this->apiInstance->getDomicilios($folioConsulta, $this->x_api_key);
                print_r($result);
                $this->assertTrue($result->getDomicilios()!==null);
            } catch (Exception $e) {
                echo 'Exception when calling RCCFicoScoreSimulacionApi->testGetDomicilios: ', $e->getMessage(), PHP_EOL;
            }
        } else {
            print_r("x_full_report inicializado en true");
        }          
    }

    /**
     * @depends testGetReporte
     */
    public function testGetEmpleos($folioConsulta)
    {
        if($this->x_full_report == "false") {
            try {
                $result = $this->apiInstance->getEmpleos($folioConsulta, $this->x_api_key);
                print_r($result);
                $this->assertTrue($result->getEmpleos()!==null);
            } catch (Exception $e) {
                echo 'Exception when calling RCCFicoScoreSimulacionApi->testGetEmpleos: ', $e->getMessage(), PHP_EOL;
            }
        } else {
            print_r("x_full_report inicializado en true");
        }          
    }

    /**
     * @depends testGetReporte
     */
    public function testGetScores($folioConsulta)
    {
        if($this->x_full_report == "false") {
            try {
                $result = $this->apiInstance->getScores($folioConsulta, $this->x_api_key);
                print_r($result);
                $this->assertTrue($result->getScores()!==null);
            } catch (Exception $e) {
                echo 'Exception when calling RCCFicoScoreSimulacionApi->testGetScores: ', $e->getMessage(), PHP_EOL;
            }
        } else {
            print_r("x_full_report inicializado en true");
        }         
    }
 
    /**
     * @depends testGetReporte
     */
    public function testGetMensajes($folioConsulta)
    {
        if($this->x_full_report == "false") {
            try {
                $result = $this->apiInstance->getMensajes($folioConsulta, $this->x_api_key);
                print_r($result);
                $this->assertTrue($result->getMensajes()!==null);
            } catch (Exception $e) {
                echo 'Exception when calling RCCFicoScoreSimulacionApi->testGetMensajes: ', $e->getMessage(), PHP_EOL;
            }
        } else {
            print_r("x_full_report inicializado en true");
        }         
    }    
}