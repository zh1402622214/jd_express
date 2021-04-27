<?php
namespace Lop\Api\Domain\LCP_00065267\OrderInfoOperateSaf;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;
use DateTime;

class OrderInfoOperateDTO implements JsonSerializable {

    /**
     * 青龙业主号
     */
    private $vendorCode;
    /**
     * 运单号
     */
    private $deliveryId;
    /**
     * 包裹数
     */
    private $packageNum;
    /**
     * 不用填
     */
    private $deliveryIdPackageCodeRelation;
    /**
     * 
     */
    private $companyId;
    /**
     * 
     */
    private $interceptReason;
    /**
     * 
     */
    private $modifyType;
    /**
     * 
     */
    private $josPin;
    /**
     * 
     */
    private $cancelOperatorCodeType;
    /**
     * 
     */
    private $cancelSource;
    /**
     * 
     */
    private $cancelTime;
    /**
     * 
     */
    private $extendMessage;
    /**
     * 
     */
    private $cancelOperator;
    /**
     * 
     */
    private $boxCodeList;

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
    public function setPackageNum($packageNum){
       $this->packageNum = $packageNum;
    }
    
    public function getPackageNum(){
       return $this->packageNum;
    }
    public function setDeliveryIdPackageCodeRelation($deliveryIdPackageCodeRelation){
       $this->deliveryIdPackageCodeRelation = $deliveryIdPackageCodeRelation;
    }
    
    public function getDeliveryIdPackageCodeRelation(){
       return $this->deliveryIdPackageCodeRelation;
    }
    public function setCompanyId($companyId){
       $this->companyId = $companyId;
    }
    
    public function getCompanyId(){
       return $this->companyId;
    }
    public function setInterceptReason($interceptReason){
       $this->interceptReason = $interceptReason;
    }
    
    public function getInterceptReason(){
       return $this->interceptReason;
    }
    public function setModifyType($modifyType){
       $this->modifyType = $modifyType;
    }
    
    public function getModifyType(){
       return $this->modifyType;
    }
    public function setJosPin($josPin){
       $this->josPin = $josPin;
    }
    
    public function getJosPin(){
       return $this->josPin;
    }
    public function setCancelOperatorCodeType($cancelOperatorCodeType){
       $this->cancelOperatorCodeType = $cancelOperatorCodeType;
    }
    
    public function getCancelOperatorCodeType(){
       return $this->cancelOperatorCodeType;
    }
    public function setCancelSource($cancelSource){
       $this->cancelSource = $cancelSource;
    }
    
    public function getCancelSource(){
       return $this->cancelSource;
    }
    public function setCancelTime($cancelTime){
       $this->cancelTime = $cancelTime;
    }
    
    public function getCancelTime(){
       return $this->cancelTime;
    }
    public function setExtendMessage($extendMessage){
       $this->extendMessage = $extendMessage;
    }
    
    public function getExtendMessage(){
       return $this->extendMessage;
    }
    public function setCancelOperator($cancelOperator){
       $this->cancelOperator = $cancelOperator;
    }
    
    public function getCancelOperator(){
       return $this->cancelOperator;
    }
    public function setBoxCodeList($boxCodeList){
       $this->boxCodeList = $boxCodeList;
    }
    
    public function getBoxCodeList(){
       return $this->boxCodeList;
    }

    public function jsonSerialize() {
        return [
            'vendorCode' => $this->vendorCode,             
            'deliveryId' => $this->deliveryId,             
            'packageNum' => $this->packageNum,             
            'deliveryIdPackageCodeRelation' => $this->deliveryIdPackageCodeRelation,             
            'companyId' => $this->companyId,             
            'interceptReason' => $this->interceptReason,             
            'modifyType' => $this->modifyType,             
            'josPin' => $this->josPin,             
            'cancelOperatorCodeType' => $this->cancelOperatorCodeType,             
            'cancelSource' => $this->cancelSource,             
            'cancelTime' => (isset($this->cancelTime) && method_exists($this->cancelTime,"format"))?($this->cancelTime->format(DateTime::ISO8601)):($this->cancelTime),             
            'extendMessage' => $this->extendMessage,             
            'cancelOperator' => $this->cancelOperator,             
            'boxCodeList' => $this->boxCodeList             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->vendorCode,"vendorCode");

       RequestCheckUtil::checkString($this->deliveryId,"deliveryId");

       RequestCheckUtil::checkNumeric($this->packageNum,"packageNum");

       RequestCheckUtil::checkArray($this->deliveryIdPackageCodeRelation,"deliveryIdPackageCodeRelation");
       if(isset($this->deliveryIdPackageCodeRelation)) {
           $arrlength=count($this->deliveryIdPackageCodeRelation);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->deliveryIdPackageCodeRelation[$index]) && method_exists($this->deliveryIdPackageCodeRelation[$index],"check")) {
                   $this->deliveryIdPackageCodeRelation[$index]->check();
               }
           }
       }

       RequestCheckUtil::checkNumeric($this->companyId,"companyId");

       RequestCheckUtil::checkString($this->interceptReason,"interceptReason");

       RequestCheckUtil::checkNumeric($this->modifyType,"modifyType");

       RequestCheckUtil::checkString($this->josPin,"josPin");

       RequestCheckUtil::checkNumeric($this->cancelOperatorCodeType,"cancelOperatorCodeType");

       RequestCheckUtil::checkString($this->cancelSource,"cancelSource");

       RequestCheckUtil::checkDate($this->cancelTime,"cancelTime");

       RequestCheckUtil::checkString($this->extendMessage,"extendMessage");

       RequestCheckUtil::checkString($this->cancelOperator,"cancelOperator");

       RequestCheckUtil::checkArray($this->boxCodeList,"boxCodeList");
       if(isset($this->boxCodeList)) {
           $arrlength=count($this->boxCodeList);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->boxCodeList[$index]) && method_exists($this->boxCodeList[$index],"check")) {
                   $this->boxCodeList[$index]->check();
               }
           }
       }
    }
}