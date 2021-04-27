<?php
namespace Lop\Api\Domain\LCP_00065267\OrbLsCancelWaybillInterceptService;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;
use DateTime;

class CancelWaybillInterceptReq implements JsonSerializable {

    /**
     * 使用SDK可以不管这个字段；非SDK则属性必须有，值可以为空
     */
    private $pin;
    /**
     * 发起取消时间
     */
    private $cancelTime;
    /**
     * 商家编码
     */
    private $vendorCode;
    /**
     * 运单号
     */
    private $deliveryId;
    /**
     * 拦截原因
     */
    private $interceptReason;
    /**
     * 取消原因编码： 1-用户发起取消； 2-超时未支付
     */
    private $cancelReasonCode;
    /**
     * 取消操作人
     */
    private $cancelOperator;
    /**
     * 取消来源
     */
    private $source;
    /**
     * 取消类型
     */
    private $cancelType;

    public function setPin($pin){
       $this->pin = $pin;
    }
    
    public function getPin(){
       return $this->pin;
    }
    public function setCancelTime($cancelTime){
       $this->cancelTime = $cancelTime;
    }
    
    public function getCancelTime(){
       return $this->cancelTime;
    }
    public function setVendorCode($vendorCode){
       $this->vendorCode = $vendorCode;
    }
    
    public function getVendorCode(){
       return $this->vendorCode;
    }
    public function setDeliveryId($deliveryId){
       $this->deliveryId = $deliveryId;
    }
    
    public function getDeliveryId(){
       return $this->deliveryId;
    }
    public function setInterceptReason($interceptReason){
       $this->interceptReason = $interceptReason;
    }
    
    public function getInterceptReason(){
       return $this->interceptReason;
    }
    public function setCancelReasonCode($cancelReasonCode){
       $this->cancelReasonCode = $cancelReasonCode;
    }
    
    public function getCancelReasonCode(){
       return $this->cancelReasonCode;
    }
    public function setCancelOperator($cancelOperator){
       $this->cancelOperator = $cancelOperator;
    }
    
    public function getCancelOperator(){
       return $this->cancelOperator;
    }
    public function setSource($source){
       $this->source = $source;
    }
    
    public function getSource(){
       return $this->source;
    }
    public function setCancelType($cancelType){
       $this->cancelType = $cancelType;
    }
    
    public function getCancelType(){
       return $this->cancelType;
    }

    public function jsonSerialize() {
        return [
            'pin' => $this->pin,             
            'cancelTime' => (isset($this->cancelTime) && method_exists($this->cancelTime,"format"))?($this->cancelTime->format(DateTime::ISO8601)):($this->cancelTime),             
            'vendorCode' => $this->vendorCode,             
            'deliveryId' => $this->deliveryId,             
            'interceptReason' => $this->interceptReason,             
            'cancelReasonCode' => $this->cancelReasonCode,             
            'cancelOperator' => $this->cancelOperator,             
            'source' => $this->source,             
            'cancelType' => $this->cancelType             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->pin,"pin");

       RequestCheckUtil::checkDate($this->cancelTime,"cancelTime");

       RequestCheckUtil::checkString($this->vendorCode,"vendorCode");

       RequestCheckUtil::checkString($this->deliveryId,"deliveryId");

       RequestCheckUtil::checkString($this->interceptReason,"interceptReason");

       RequestCheckUtil::checkNumeric($this->cancelReasonCode,"cancelReasonCode");

       RequestCheckUtil::checkString($this->cancelOperator,"cancelOperator");

       RequestCheckUtil::checkString($this->source,"source");

       RequestCheckUtil::checkString($this->cancelType,"cancelType");
    }
}