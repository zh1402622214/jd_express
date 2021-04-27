<?php
namespace Lop\Api\Domain\LCP_00065267\TraceQueryJsf;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class TraceQueryDTO implements JsonSerializable {

    /**
     * 商家编码
     */
    private $customerCode;
    /**
     * 运单号或者是取件单号
     */
    private $waybillCode;
    /**
     * 京东pin
     */
    private $josPin;

    public function setCustomerCode($customerCode){
       $this->customerCode = $customerCode;
    }
    
    public function getCustomerCode(){
       return $this->customerCode;
    }
    public function setWaybillCode($waybillCode){
       $this->waybillCode = $waybillCode;
    }
    
    public function getWaybillCode(){
       return $this->waybillCode;
    }
    public function setJosPin($josPin){
       $this->josPin = $josPin;
    }
    
    public function getJosPin(){
       return $this->josPin;
    }

    public function jsonSerialize() {
        return [
            'customerCode' => $this->customerCode,             
            'waybillCode' => $this->waybillCode,             
            'josPin' => $this->josPin             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->customerCode,"customerCode");

       RequestCheckUtil::checkString($this->waybillCode,"waybillCode");

       RequestCheckUtil::checkString($this->josPin,"josPin");
    }
}