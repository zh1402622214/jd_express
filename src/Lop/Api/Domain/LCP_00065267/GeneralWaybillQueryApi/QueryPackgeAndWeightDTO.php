<?php
namespace Lop\Api\Domain\LCP_00065267\GeneralWaybillQueryApi;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QueryPackgeAndWeightDTO implements JsonSerializable {

    /**
     * 运单号
     */
    private $deliveryId;
    /**
     * 配送编码
     */
    private $customerCode;
    /**
     * 用户pin
     */
    private $josPin;

    public function setDeliveryId($deliveryId){
       $this->deliveryId = $deliveryId;
    }
    
    public function getDeliveryId(){
       return $this->deliveryId;
    }
    public function setCustomerCode($customerCode){
       $this->customerCode = $customerCode;
    }
    
    public function getCustomerCode(){
       return $this->customerCode;
    }
    public function setJosPin($josPin){
       $this->josPin = $josPin;
    }
    
    public function getJosPin(){
       return $this->josPin;
    }

    public function jsonSerialize() {
        return [
            'deliveryId' => $this->deliveryId,             
            'customerCode' => $this->customerCode,             
            'josPin' => $this->josPin             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->deliveryId,"deliveryId");

       RequestCheckUtil::checkString($this->customerCode,"customerCode");

       RequestCheckUtil::checkString($this->josPin,"josPin");
    }
}