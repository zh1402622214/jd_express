<?php
namespace Lop\Api\Domain\LCP_00065267\WaybillJosService;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ProductAddedServiceDTO implements JsonSerializable {

    /**
     * 
     */
    private $type;
    /**
     * 
     */
    private $primaryParam;
    /**
     * 
     */
    private $secondaryParam;
    /**
     * 
     */
    private $otherParams;

    public function setType($type){
       $this->type = $type;
    }
    
    public function getType(){
       return $this->type;
    }
    public function setPrimaryParam($primaryParam){
       $this->primaryParam = $primaryParam;
    }
    
    public function getPrimaryParam(){
       return $this->primaryParam;
    }
    public function setSecondaryParam($secondaryParam){
       $this->secondaryParam = $secondaryParam;
    }
    
    public function getSecondaryParam(){
       return $this->secondaryParam;
    }
    public function setOtherParams($otherParams){
       $this->otherParams = $otherParams;
    }
    
    public function getOtherParams(){
       return $this->otherParams;
    }

    public function jsonSerialize() {
        return [
            'type' => $this->type,             
            'primaryParam' => $this->primaryParam,             
            'secondaryParam' => $this->secondaryParam,             
            'otherParams' => $this->otherParams             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->type,"type");

       RequestCheckUtil::checkString($this->primaryParam,"primaryParam");

       RequestCheckUtil::checkString($this->secondaryParam,"secondaryParam");

    }
}