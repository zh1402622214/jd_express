<?php
namespace Lop\Api\Domain\LCP_00065267\GeneralWaybillQueryApi;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class OrderInfoQueryConditionDTO implements JsonSerializable {

    /**
     * 商家编码，电话和商家编码至少一个有值
     */
    private $customerCode;
    /**
     * 运单号
     */
    private $deliveryId;
    /**
     * 用户pin，可不传
     */
    private $josPin;
    /**
     * 电话（md5码32位），电话和商家编码至少一个有值
     */
    private $phone;
    /**
     * 动态时间标志 是 0 或 1 (0 是获取非动态时间，1 是获取动态时间)
     */
    private $dynamicTimeFlag;

    public function setCustomerCode($customerCode){
       $this->customerCode = $customerCode;
    }
    
    public function getCustomerCode(){
       return $this->customerCode;
    }
    public function setDeliveryId($deliveryId){
       $this->deliveryId = $deliveryId;
    }
    
    public function getDeliveryId(){
       return $this->deliveryId;
    }
    public function setJosPin($josPin){
       $this->josPin = $josPin;
    }
    
    public function getJosPin(){
       return $this->josPin;
    }
    public function setPhone($phone){
       $this->phone = $phone;
    }
    
    public function getPhone(){
       return $this->phone;
    }
    public function setDynamicTimeFlag($dynamicTimeFlag){
       $this->dynamicTimeFlag = $dynamicTimeFlag;
    }
    
    public function getDynamicTimeFlag(){
       return $this->dynamicTimeFlag;
    }

    public function jsonSerialize() {
        return [
            'customerCode' => $this->customerCode,             
            'deliveryId' => $this->deliveryId,             
            'josPin' => $this->josPin,             
            'phone' => $this->phone,             
            'dynamicTimeFlag' => $this->dynamicTimeFlag             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->customerCode,"customerCode");

       RequestCheckUtil::checkString($this->deliveryId,"deliveryId");

       RequestCheckUtil::checkString($this->josPin,"josPin");

       RequestCheckUtil::checkString($this->phone,"phone");

       RequestCheckUtil::checkNumeric($this->dynamicTimeFlag,"dynamicTimeFlag");
    }
}