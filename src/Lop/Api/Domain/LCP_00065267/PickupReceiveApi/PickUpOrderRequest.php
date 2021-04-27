<?php
namespace Lop\Api\Domain\LCP_00065267\PickupReceiveApi;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;
use DateTime;

class PickUpOrderRequest implements JsonSerializable {

    /**
     * 取件地址，长度不能超过100个字符
     */
    private $pickupAddress;
    /**
     * 取件联系人，长度不能超过20个字符
     */
    private $pickupName;
    /**
     * 取件联系电话
     */
    private $pickupTel;
    /**
     * 商家联系电话
     */
    private $customerTel;
    /**
     * 商家编码
     */
    private $customerCode;
    /**
     * 退货地址，长度不能超过50个字符
     */
    private $backAddress;
    /**
     * 商家联系人，长度不能超过25个字符
     */
    private $customerContract;
    /**
     * 取件描述
     */
    private $desp;
    /**
     * 订单号
     */
    private $orderId;
    /**
     * 重量，单位：千克，取值范围：1-1000000，保留两位小数
     */
    private $weight;
    /**
     * 备注，长度不超过1200个字符
     */
    private $remark;
    /**
     * 体积，单位：立方厘米，取值范围：1-1000000，保留两位小数
     */
    private $volume;
    /**
     * 是否保价
     */
    private $isGuaranteeValue;
    /**
     * 保价金额，不能超过20000
     */
    private $guaranteeValueAmount;
    /**
     * 
     */
    private $goodsDtoList;
    /**
     * 单据维度增值服务，商品拍照（服务代码：pickupPhotoValue；枚举值：0-否，1-是）、防撕码收集（服务代码：pickTearCode；枚举值：0-否，1-是），服务代码和枚举值间使用“:“隔开，多个服务代码间使用”:“隔开。注意，分隔符都是英文字符。如商家只需要商品拍照，则传值为：pickupPhotoValue:1；如商家需要多个增值服务，则传值为：pickupPhotoValue:1;pickTearCode:1;
     */
    private $valueAddService;
    /**
     * 
     */
    private $userPin;
    /**
     * 开始取件时间

     */
    private $pickupStartTime;
    /**
     * 结束取件时间
     */
    private $pickupEndTime;
    /**
     * 产品类型 1:特惠送，2:特快送
     */
    private $promiseTimeType;
    /**
     * 保价费结算方式 0:收件月结，1:寄件现结；默认收件月结；当保价费选择寄件现结，商家下单不可填写保价金额
     */
    private $guaranteeSettleType;
    /**
     * 包装费结算方式 0:收件月结，1:寄件现结；默认寄件现结
     */
    private $packingSettleType;
    /**
     * 运费结算方式 0:收件月结，1:寄件现结；默认收件月结
     */
    private $freightSettleType;
    /**
     * 是否允许重复下单,(只支持Q单)1:允许，0或空不允许
     */
    private $allowedRepeatOrderType;

    public function setPickupAddress($pickupAddress){
       $this->pickupAddress = $pickupAddress;
    }
    
    public function getPickupAddress(){
       return $this->pickupAddress;
    }
    public function setPickupName($pickupName){
       $this->pickupName = $pickupName;
    }
    
    public function getPickupName(){
       return $this->pickupName;
    }
    public function setPickupTel($pickupTel){
       $this->pickupTel = $pickupTel;
    }
    
    public function getPickupTel(){
       return $this->pickupTel;
    }
    public function setCustomerTel($customerTel){
       $this->customerTel = $customerTel;
    }
    
    public function getCustomerTel(){
       return $this->customerTel;
    }
    public function setCustomerCode($customerCode){
       $this->customerCode = $customerCode;
    }
    
    public function getCustomerCode(){
       return $this->customerCode;
    }
    public function setBackAddress($backAddress){
       $this->backAddress = $backAddress;
    }
    
    public function getBackAddress(){
       return $this->backAddress;
    }
    public function setCustomerContract($customerContract){
       $this->customerContract = $customerContract;
    }
    
    public function getCustomerContract(){
       return $this->customerContract;
    }
    public function setDesp($desp){
       $this->desp = $desp;
    }
    
    public function getDesp(){
       return $this->desp;
    }
    public function setOrderId($orderId){
       $this->orderId = $orderId;
    }
    
    public function getOrderId(){
       return $this->orderId;
    }
    public function setWeight($weight){
       $this->weight = $weight;
    }
    
    public function getWeight(){
       return $this->weight;
    }
    public function setRemark($remark){
       $this->remark = $remark;
    }
    
    public function getRemark(){
       return $this->remark;
    }
    public function setVolume($volume){
       $this->volume = $volume;
    }
    
    public function getVolume(){
       return $this->volume;
    }
    public function setIsGuaranteeValue($isGuaranteeValue){
       $this->isGuaranteeValue = $isGuaranteeValue;
    }
    
    public function getIsGuaranteeValue(){
       return $this->isGuaranteeValue;
    }
    public function setGuaranteeValueAmount($guaranteeValueAmount){
       $this->guaranteeValueAmount = $guaranteeValueAmount;
    }
    
    public function getGuaranteeValueAmount(){
       return $this->guaranteeValueAmount;
    }
    public function setGoodsDtoList($goodsDtoList){
       $this->goodsDtoList = $goodsDtoList;
    }
    
    public function getGoodsDtoList(){
       return $this->goodsDtoList;
    }
    public function setValueAddService($valueAddService){
       $this->valueAddService = $valueAddService;
    }
    
    public function getValueAddService(){
       return $this->valueAddService;
    }
    public function setUserPin($userPin){
       $this->userPin = $userPin;
    }
    
    public function getUserPin(){
       return $this->userPin;
    }
    public function setPickupStartTime($pickupStartTime){
       $this->pickupStartTime = $pickupStartTime;
    }
    
    public function getPickupStartTime(){
       return $this->pickupStartTime;
    }
    public function setPickupEndTime($pickupEndTime){
       $this->pickupEndTime = $pickupEndTime;
    }
    
    public function getPickupEndTime(){
       return $this->pickupEndTime;
    }
    public function setPromiseTimeType($promiseTimeType){
       $this->promiseTimeType = $promiseTimeType;
    }
    
    public function getPromiseTimeType(){
       return $this->promiseTimeType;
    }
    public function setGuaranteeSettleType($guaranteeSettleType){
       $this->guaranteeSettleType = $guaranteeSettleType;
    }
    
    public function getGuaranteeSettleType(){
       return $this->guaranteeSettleType;
    }
    public function setPackingSettleType($packingSettleType){
       $this->packingSettleType = $packingSettleType;
    }
    
    public function getPackingSettleType(){
       return $this->packingSettleType;
    }
    public function setFreightSettleType($freightSettleType){
       $this->freightSettleType = $freightSettleType;
    }
    
    public function getFreightSettleType(){
       return $this->freightSettleType;
    }
    public function setAllowedRepeatOrderType($allowedRepeatOrderType){
       $this->allowedRepeatOrderType = $allowedRepeatOrderType;
    }
    
    public function getAllowedRepeatOrderType(){
       return $this->allowedRepeatOrderType;
    }

    public function jsonSerialize() {
        return [
            'pickupAddress' => $this->pickupAddress,             
            'pickupName' => $this->pickupName,             
            'pickupTel' => $this->pickupTel,             
            'customerTel' => $this->customerTel,             
            'customerCode' => $this->customerCode,             
            'backAddress' => $this->backAddress,             
            'customerContract' => $this->customerContract,             
            'desp' => $this->desp,             
            'orderId' => $this->orderId,             
            'weight' => $this->weight,             
            'remark' => $this->remark,             
            'volume' => $this->volume,             
            'isGuaranteeValue' => $this->isGuaranteeValue,             
            'guaranteeValueAmount' => $this->guaranteeValueAmount,             
            'goodsDtoList' => $this->goodsDtoList,             
            'valueAddService' => $this->valueAddService,             
            'userPin' => $this->userPin,             
            'pickupStartTime' => (isset($this->pickupStartTime) && method_exists($this->pickupStartTime,"format"))?($this->pickupStartTime->format(DateTime::ISO8601)):($this->pickupStartTime),             
            'pickupEndTime' => (isset($this->pickupEndTime) && method_exists($this->pickupEndTime,"format"))?($this->pickupEndTime->format(DateTime::ISO8601)):($this->pickupEndTime),             
            'promiseTimeType' => $this->promiseTimeType,             
            'guaranteeSettleType' => $this->guaranteeSettleType,             
            'packingSettleType' => $this->packingSettleType,             
            'freightSettleType' => $this->freightSettleType,             
            'allowedRepeatOrderType' => $this->allowedRepeatOrderType             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->pickupAddress,"pickupAddress");

       RequestCheckUtil::checkString($this->pickupName,"pickupName");

       RequestCheckUtil::checkString($this->pickupTel,"pickupTel");

       RequestCheckUtil::checkString($this->customerTel,"customerTel");

       RequestCheckUtil::checkString($this->customerCode,"customerCode");

       RequestCheckUtil::checkString($this->backAddress,"backAddress");

       RequestCheckUtil::checkString($this->customerContract,"customerContract");

       RequestCheckUtil::checkString($this->desp,"desp");

       RequestCheckUtil::checkString($this->orderId,"orderId");

       RequestCheckUtil::checkNumeric($this->weight,"weight");

       RequestCheckUtil::checkString($this->remark,"remark");

       RequestCheckUtil::checkNumeric($this->volume,"volume");

       RequestCheckUtil::checkBoolean($this->isGuaranteeValue,"isGuaranteeValue");

       RequestCheckUtil::checkNumeric($this->guaranteeValueAmount,"guaranteeValueAmount");

       RequestCheckUtil::checkArray($this->goodsDtoList,"goodsDtoList");
       if(isset($this->goodsDtoList)) {
           $arrlength=count($this->goodsDtoList);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->goodsDtoList[$index]) && method_exists($this->goodsDtoList[$index],"check")) {
                   $this->goodsDtoList[$index]->check();
               }
           }
       }

       RequestCheckUtil::checkString($this->valueAddService,"valueAddService");

       RequestCheckUtil::checkString($this->userPin,"userPin");

       RequestCheckUtil::checkDate($this->pickupStartTime,"pickupStartTime");

       RequestCheckUtil::checkDate($this->pickupEndTime,"pickupEndTime");

       RequestCheckUtil::checkNumeric($this->promiseTimeType,"promiseTimeType");

       RequestCheckUtil::checkNumeric($this->guaranteeSettleType,"guaranteeSettleType");

       RequestCheckUtil::checkNumeric($this->packingSettleType,"packingSettleType");

       RequestCheckUtil::checkNumeric($this->freightSettleType,"freightSettleType");

       RequestCheckUtil::checkNumeric($this->allowedRepeatOrderType,"allowedRepeatOrderType");
    }
}