<?php
namespace Lop\Api\Domain\LCP_00065267\WaybillJosService;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;
use DateTime;

class TransExtendedDTO implements JsonSerializable {

    /**
     * 
     */
    private $vehicleType;
    /**
     * 
     */
    private $vehicleCount;
    /**
     * 
     */
    private $requireTransMode;
    /**
     * 
     */
    private $dispatchStartTime;
    /**
     * 
     */
    private $dispatchEndTime;
    /**
     * 
     */
    private $specialInstruction;
    /**
     * 
     */
    private $warehouseReservationCode;
    /**
     * 
     */
    private $warehouseReservationTime;
    /**
     * 
     */
    private $warehouseRemark;
    /**
     * 
     */
    private $enquiryCode;
    /**
     * 
     */
    private $sendToWarehouseId;
    /**
     * 
     */
    private $sendToWarehouseCode;
    /**
     * 
     */
    private $sendToWarehouseName;
    /**
     * 
     */
    private $warehouseType;
    /**
     * 
     */
    private $warehouseOrganizationId;
    /**
     * 
     */
    private $warehouseOrganizationCode;
    /**
     * 
     */
    private $purchaseOrderId;
    /**
     * 
     */
    private $purchaseOrderSource;
    /**
     * 
     */
    private $selfPickupUnitId;
    /**
     * 
     */
    private $selfSendUnitId;
    /**
     * 
     */
    private $bookUserAccount;
    /**
     * 
     */
    private $purchaseQuantity;
    /**
     * 
     */
    private $bookQuantity;
    /**
     * 
     */
    private $whUniqueCode;
    /**
     * 
     */
    private $returnNo;
    /**
     * 
     */
    private $hubType;
    /**
     * 
     */
    private $outWarehouseReservationCode;
    /**
     * 
     */
    private $shopCode;
    /**
     * 
     */
    private $shopName;
    /**
     * 
     */
    private $totalWaybillCount;
    /**
     * 
     */
    private $deliveryBatchNo;
    /**
     * 
     */
    private $expectedArrivalStartTime;
    /**
     * 
     */
    private $expectedArrivalEndTime;
    /**
     * 
     */
    private $tranStageType;
    /**
     * 
     */
    private $storageHoldType;
    /**
     * 
     */
    private $requireCollectionGoods;

    public function setVehicleType($vehicleType){
       $this->vehicleType = $vehicleType;
    }
    
    public function getVehicleType(){
       return $this->vehicleType;
    }
    public function setVehicleCount($vehicleCount){
       $this->vehicleCount = $vehicleCount;
    }
    
    public function getVehicleCount(){
       return $this->vehicleCount;
    }
    public function setRequireTransMode($requireTransMode){
       $this->requireTransMode = $requireTransMode;
    }
    
    public function getRequireTransMode(){
       return $this->requireTransMode;
    }
    public function setDispatchStartTime($dispatchStartTime){
       $this->dispatchStartTime = $dispatchStartTime;
    }
    
    public function getDispatchStartTime(){
       return $this->dispatchStartTime;
    }
    public function setDispatchEndTime($dispatchEndTime){
       $this->dispatchEndTime = $dispatchEndTime;
    }
    
    public function getDispatchEndTime(){
       return $this->dispatchEndTime;
    }
    public function setSpecialInstruction($specialInstruction){
       $this->specialInstruction = $specialInstruction;
    }
    
    public function getSpecialInstruction(){
       return $this->specialInstruction;
    }
    public function setWarehouseReservationCode($warehouseReservationCode){
       $this->warehouseReservationCode = $warehouseReservationCode;
    }
    
    public function getWarehouseReservationCode(){
       return $this->warehouseReservationCode;
    }
    public function setWarehouseReservationTime($warehouseReservationTime){
       $this->warehouseReservationTime = $warehouseReservationTime;
    }
    
    public function getWarehouseReservationTime(){
       return $this->warehouseReservationTime;
    }
    public function setWarehouseRemark($warehouseRemark){
       $this->warehouseRemark = $warehouseRemark;
    }
    
    public function getWarehouseRemark(){
       return $this->warehouseRemark;
    }
    public function setEnquiryCode($enquiryCode){
       $this->enquiryCode = $enquiryCode;
    }
    
    public function getEnquiryCode(){
       return $this->enquiryCode;
    }
    public function setSendToWarehouseId($sendToWarehouseId){
       $this->sendToWarehouseId = $sendToWarehouseId;
    }
    
    public function getSendToWarehouseId(){
       return $this->sendToWarehouseId;
    }
    public function setSendToWarehouseCode($sendToWarehouseCode){
       $this->sendToWarehouseCode = $sendToWarehouseCode;
    }
    
    public function getSendToWarehouseCode(){
       return $this->sendToWarehouseCode;
    }
    public function setSendToWarehouseName($sendToWarehouseName){
       $this->sendToWarehouseName = $sendToWarehouseName;
    }
    
    public function getSendToWarehouseName(){
       return $this->sendToWarehouseName;
    }
    public function setWarehouseType($warehouseType){
       $this->warehouseType = $warehouseType;
    }
    
    public function getWarehouseType(){
       return $this->warehouseType;
    }
    public function setWarehouseOrganizationId($warehouseOrganizationId){
       $this->warehouseOrganizationId = $warehouseOrganizationId;
    }
    
    public function getWarehouseOrganizationId(){
       return $this->warehouseOrganizationId;
    }
    public function setWarehouseOrganizationCode($warehouseOrganizationCode){
       $this->warehouseOrganizationCode = $warehouseOrganizationCode;
    }
    
    public function getWarehouseOrganizationCode(){
       return $this->warehouseOrganizationCode;
    }
    public function setPurchaseOrderId($purchaseOrderId){
       $this->purchaseOrderId = $purchaseOrderId;
    }
    
    public function getPurchaseOrderId(){
       return $this->purchaseOrderId;
    }
    public function setPurchaseOrderSource($purchaseOrderSource){
       $this->purchaseOrderSource = $purchaseOrderSource;
    }
    
    public function getPurchaseOrderSource(){
       return $this->purchaseOrderSource;
    }
    public function setSelfPickupUnitId($selfPickupUnitId){
       $this->selfPickupUnitId = $selfPickupUnitId;
    }
    
    public function getSelfPickupUnitId(){
       return $this->selfPickupUnitId;
    }
    public function setSelfSendUnitId($selfSendUnitId){
       $this->selfSendUnitId = $selfSendUnitId;
    }
    
    public function getSelfSendUnitId(){
       return $this->selfSendUnitId;
    }
    public function setBookUserAccount($bookUserAccount){
       $this->bookUserAccount = $bookUserAccount;
    }
    
    public function getBookUserAccount(){
       return $this->bookUserAccount;
    }
    public function setPurchaseQuantity($purchaseQuantity){
       $this->purchaseQuantity = $purchaseQuantity;
    }
    
    public function getPurchaseQuantity(){
       return $this->purchaseQuantity;
    }
    public function setBookQuantity($bookQuantity){
       $this->bookQuantity = $bookQuantity;
    }
    
    public function getBookQuantity(){
       return $this->bookQuantity;
    }
    public function setWhUniqueCode($whUniqueCode){
       $this->whUniqueCode = $whUniqueCode;
    }
    
    public function getWhUniqueCode(){
       return $this->whUniqueCode;
    }
    public function setReturnNo($returnNo){
       $this->returnNo = $returnNo;
    }
    
    public function getReturnNo(){
       return $this->returnNo;
    }
    public function setHubType($hubType){
       $this->hubType = $hubType;
    }
    
    public function getHubType(){
       return $this->hubType;
    }
    public function setOutWarehouseReservationCode($outWarehouseReservationCode){
       $this->outWarehouseReservationCode = $outWarehouseReservationCode;
    }
    
    public function getOutWarehouseReservationCode(){
       return $this->outWarehouseReservationCode;
    }
    public function setShopCode($shopCode){
       $this->shopCode = $shopCode;
    }
    
    public function getShopCode(){
       return $this->shopCode;
    }
    public function setShopName($shopName){
       $this->shopName = $shopName;
    }
    
    public function getShopName(){
       return $this->shopName;
    }
    public function setTotalWaybillCount($totalWaybillCount){
       $this->totalWaybillCount = $totalWaybillCount;
    }
    
    public function getTotalWaybillCount(){
       return $this->totalWaybillCount;
    }
    public function setDeliveryBatchNo($deliveryBatchNo){
       $this->deliveryBatchNo = $deliveryBatchNo;
    }
    
    public function getDeliveryBatchNo(){
       return $this->deliveryBatchNo;
    }
    public function setExpectedArrivalStartTime($expectedArrivalStartTime){
       $this->expectedArrivalStartTime = $expectedArrivalStartTime;
    }
    
    public function getExpectedArrivalStartTime(){
       return $this->expectedArrivalStartTime;
    }
    public function setExpectedArrivalEndTime($expectedArrivalEndTime){
       $this->expectedArrivalEndTime = $expectedArrivalEndTime;
    }
    
    public function getExpectedArrivalEndTime(){
       return $this->expectedArrivalEndTime;
    }
    public function setTranStageType($tranStageType){
       $this->tranStageType = $tranStageType;
    }
    
    public function getTranStageType(){
       return $this->tranStageType;
    }
    public function setStorageHoldType($storageHoldType){
       $this->storageHoldType = $storageHoldType;
    }
    
    public function getStorageHoldType(){
       return $this->storageHoldType;
    }
    public function setRequireCollectionGoods($requireCollectionGoods){
       $this->requireCollectionGoods = $requireCollectionGoods;
    }
    
    public function getRequireCollectionGoods(){
       return $this->requireCollectionGoods;
    }

    public function jsonSerialize() {
        return [
            'vehicleType' => $this->vehicleType,             
            'vehicleCount' => $this->vehicleCount,             
            'requireTransMode' => $this->requireTransMode,             
            'dispatchStartTime' => (isset($this->dispatchStartTime) && method_exists($this->dispatchStartTime,"format"))?($this->dispatchStartTime->format(DateTime::ISO8601)):($this->dispatchStartTime),             
            'dispatchEndTime' => (isset($this->dispatchEndTime) && method_exists($this->dispatchEndTime,"format"))?($this->dispatchEndTime->format(DateTime::ISO8601)):($this->dispatchEndTime),             
            'specialInstruction' => $this->specialInstruction,             
            'warehouseReservationCode' => $this->warehouseReservationCode,             
            'warehouseReservationTime' => (isset($this->warehouseReservationTime) && method_exists($this->warehouseReservationTime,"format"))?($this->warehouseReservationTime->format(DateTime::ISO8601)):($this->warehouseReservationTime),             
            'warehouseRemark' => $this->warehouseRemark,             
            'enquiryCode' => $this->enquiryCode,             
            'sendToWarehouseId' => $this->sendToWarehouseId,             
            'sendToWarehouseCode' => $this->sendToWarehouseCode,             
            'sendToWarehouseName' => $this->sendToWarehouseName,             
            'warehouseType' => $this->warehouseType,             
            'warehouseOrganizationId' => $this->warehouseOrganizationId,             
            'warehouseOrganizationCode' => $this->warehouseOrganizationCode,             
            'purchaseOrderId' => $this->purchaseOrderId,             
            'purchaseOrderSource' => $this->purchaseOrderSource,             
            'selfPickupUnitId' => $this->selfPickupUnitId,             
            'selfSendUnitId' => $this->selfSendUnitId,             
            'bookUserAccount' => $this->bookUserAccount,             
            'purchaseQuantity' => $this->purchaseQuantity,             
            'bookQuantity' => $this->bookQuantity,             
            'whUniqueCode' => $this->whUniqueCode,             
            'returnNo' => $this->returnNo,             
            'hubType' => $this->hubType,             
            'outWarehouseReservationCode' => $this->outWarehouseReservationCode,             
            'shopCode' => $this->shopCode,             
            'shopName' => $this->shopName,             
            'totalWaybillCount' => $this->totalWaybillCount,             
            'deliveryBatchNo' => $this->deliveryBatchNo,             
            'expectedArrivalStartTime' => $this->expectedArrivalStartTime,             
            'expectedArrivalEndTime' => $this->expectedArrivalEndTime,             
            'tranStageType' => $this->tranStageType,             
            'storageHoldType' => $this->storageHoldType,             
            'requireCollectionGoods' => $this->requireCollectionGoods             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkNumeric($this->vehicleType,"vehicleType");

       RequestCheckUtil::checkNumeric($this->vehicleCount,"vehicleCount");

       RequestCheckUtil::checkNumeric($this->requireTransMode,"requireTransMode");

       RequestCheckUtil::checkDate($this->dispatchStartTime,"dispatchStartTime");

       RequestCheckUtil::checkDate($this->dispatchEndTime,"dispatchEndTime");

       RequestCheckUtil::checkNumeric($this->specialInstruction,"specialInstruction");

       RequestCheckUtil::checkString($this->warehouseReservationCode,"warehouseReservationCode");

       RequestCheckUtil::checkDate($this->warehouseReservationTime,"warehouseReservationTime");

       RequestCheckUtil::checkString($this->warehouseRemark,"warehouseRemark");

       RequestCheckUtil::checkString($this->enquiryCode,"enquiryCode");

       RequestCheckUtil::checkNumeric($this->sendToWarehouseId,"sendToWarehouseId");

       RequestCheckUtil::checkString($this->sendToWarehouseCode,"sendToWarehouseCode");

       RequestCheckUtil::checkString($this->sendToWarehouseName,"sendToWarehouseName");

       RequestCheckUtil::checkString($this->warehouseType,"warehouseType");

       RequestCheckUtil::checkNumeric($this->warehouseOrganizationId,"warehouseOrganizationId");

       RequestCheckUtil::checkString($this->warehouseOrganizationCode,"warehouseOrganizationCode");

       RequestCheckUtil::checkString($this->purchaseOrderId,"purchaseOrderId");

       RequestCheckUtil::checkNumeric($this->purchaseOrderSource,"purchaseOrderSource");

       RequestCheckUtil::checkNumeric($this->selfPickupUnitId,"selfPickupUnitId");

       RequestCheckUtil::checkNumeric($this->selfSendUnitId,"selfSendUnitId");

       RequestCheckUtil::checkString($this->bookUserAccount,"bookUserAccount");

       RequestCheckUtil::checkNumeric($this->purchaseQuantity,"purchaseQuantity");

       RequestCheckUtil::checkNumeric($this->bookQuantity,"bookQuantity");

       RequestCheckUtil::checkString($this->whUniqueCode,"whUniqueCode");

       RequestCheckUtil::checkString($this->returnNo,"returnNo");

       RequestCheckUtil::checkNumeric($this->hubType,"hubType");

       RequestCheckUtil::checkString($this->outWarehouseReservationCode,"outWarehouseReservationCode");

       RequestCheckUtil::checkString($this->shopCode,"shopCode");

       RequestCheckUtil::checkString($this->shopName,"shopName");

       RequestCheckUtil::checkNumeric($this->totalWaybillCount,"totalWaybillCount");

       RequestCheckUtil::checkString($this->deliveryBatchNo,"deliveryBatchNo");

       RequestCheckUtil::checkString($this->expectedArrivalStartTime,"expectedArrivalStartTime");

       RequestCheckUtil::checkString($this->expectedArrivalEndTime,"expectedArrivalEndTime");

       RequestCheckUtil::checkNumeric($this->tranStageType,"tranStageType");

       RequestCheckUtil::checkNumeric($this->storageHoldType,"storageHoldType");

       RequestCheckUtil::checkNumeric($this->requireCollectionGoods,"requireCollectionGoods");
    }
}