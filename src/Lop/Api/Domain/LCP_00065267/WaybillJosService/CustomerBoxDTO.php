<?php
namespace Lop\Api\Domain\LCP_00065267\WaybillJosService;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class CustomerBoxDTO implements JsonSerializable {

    /**
     * 
     */
    private $customerBoxCode;
    /**
     * 
     */
    private $customerBoxNumber;

    public function setCustomerBoxCode($customerBoxCode){
       $this->customerBoxCode = $customerBoxCode;
    }
    
    public function getCustomerBoxCode(){
       return $this->customerBoxCode;
    }
    public function setCustomerBoxNumber($customerBoxNumber){
       $this->customerBoxNumber = $customerBoxNumber;
    }
    
    public function getCustomerBoxNumber(){
       return $this->customerBoxNumber;
    }

    public function jsonSerialize() {
        return [
            'customerBoxCode' => $this->customerBoxCode,             
            'customerBoxNumber' => $this->customerBoxNumber             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->customerBoxCode,"customerBoxCode");

       RequestCheckUtil::checkNumeric($this->customerBoxNumber,"customerBoxNumber");
    }
}