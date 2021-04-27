<?php
namespace Lop\Api\Domain\LCP_00065267\WaybillJosService;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ProductDetailDto implements JsonSerializable {

    /**
     * 商品id
     */
    private $productId;
    /**
     * 69码、SN码(明细揽收码)
     */
    private $snCode;
    /**
     * 商品名称
     */
    private $productName;
    /**
     * 商品数量
     */
    private $productCount;
    /**
     * 半收原因
1：少货

2：错货

3：破损

4：临保

5：包装破损

6：内物破损
     */
    private $halfReason;
    /**
     * 
     */
    private $serialNo;
    /**
     * 是否sn管理
0：否

1：是
     */
    private $snManage;
    /**
     * 商品主赠关系编号（同一主赠关系中商品，主赠关系编号相同）
     */
    private $relationId;
    /**
     *  商品主赠关系：促销单元商品个数
     */
    private $suitCount;
    /**
     * 商品主赠关系：商品uuid
     */
    private $skuUuid;
    /**
     * 商品主赠关系类型
商品在促销结构中类型

1：不参加促销单品

2：买赠的主品

3：买赠的赠品

4：满赠的主品

5：满赠的赠品

6：加价购赠品

7：延保通

8：延保通赠品
     */
    private $skuType;
    /**
     * 影子sku
     */
    private $virtualSku;
    /**
     * 
     */
    private $guaranteeMoney;
    /**
     * 
     */
    private $volumeStorageCode;
    /**
     * 
     */
    private $volumeStorageName;
    /**
     * 
     */
    private $productAddedServices;
    /**
     * 业务类型
     */
    private $businessType;
    /**
     * 
     */
    private $serviceCode;
    /**
     * 
     */
    private $goodsType;

    public function setProductId($productId){
       $this->productId = $productId;
    }
    
    public function getProductId(){
       return $this->productId;
    }
    public function setSnCode($snCode){
       $this->snCode = $snCode;
    }
    
    public function getSnCode(){
       return $this->snCode;
    }
    public function setProductName($productName){
       $this->productName = $productName;
    }
    
    public function getProductName(){
       return $this->productName;
    }
    public function setProductCount($productCount){
       $this->productCount = $productCount;
    }
    
    public function getProductCount(){
       return $this->productCount;
    }
    public function setHalfReason($halfReason){
       $this->halfReason = $halfReason;
    }
    
    public function getHalfReason(){
       return $this->halfReason;
    }
    public function setSerialNo($serialNo){
       $this->serialNo = $serialNo;
    }
    
    public function getSerialNo(){
       return $this->serialNo;
    }
    public function setSnManage($snManage){
       $this->snManage = $snManage;
    }
    
    public function getSnManage(){
       return $this->snManage;
    }
    public function setRelationId($relationId){
       $this->relationId = $relationId;
    }
    
    public function getRelationId(){
       return $this->relationId;
    }
    public function setSuitCount($suitCount){
       $this->suitCount = $suitCount;
    }
    
    public function getSuitCount(){
       return $this->suitCount;
    }
    public function setSkuUuid($skuUuid){
       $this->skuUuid = $skuUuid;
    }
    
    public function getSkuUuid(){
       return $this->skuUuid;
    }
    public function setSkuType($skuType){
       $this->skuType = $skuType;
    }
    
    public function getSkuType(){
       return $this->skuType;
    }
    public function setVirtualSku($virtualSku){
       $this->virtualSku = $virtualSku;
    }
    
    public function getVirtualSku(){
       return $this->virtualSku;
    }
    public function setGuaranteeMoney($guaranteeMoney){
       $this->guaranteeMoney = $guaranteeMoney;
    }
    
    public function getGuaranteeMoney(){
       return $this->guaranteeMoney;
    }
    public function setVolumeStorageCode($volumeStorageCode){
       $this->volumeStorageCode = $volumeStorageCode;
    }
    
    public function getVolumeStorageCode(){
       return $this->volumeStorageCode;
    }
    public function setVolumeStorageName($volumeStorageName){
       $this->volumeStorageName = $volumeStorageName;
    }
    
    public function getVolumeStorageName(){
       return $this->volumeStorageName;
    }
    public function setProductAddedServices($productAddedServices){
       $this->productAddedServices = $productAddedServices;
    }
    
    public function getProductAddedServices(){
       return $this->productAddedServices;
    }
    public function setBusinessType($businessType){
       $this->businessType = $businessType;
    }
    
    public function getBusinessType(){
       return $this->businessType;
    }
    public function setServiceCode($serviceCode){
       $this->serviceCode = $serviceCode;
    }
    
    public function getServiceCode(){
       return $this->serviceCode;
    }
    public function setGoodsType($goodsType){
       $this->goodsType = $goodsType;
    }
    
    public function getGoodsType(){
       return $this->goodsType;
    }

    public function jsonSerialize() {
        return [
            'productId' => $this->productId,             
            'snCode' => $this->snCode,             
            'productName' => $this->productName,             
            'productCount' => $this->productCount,             
            'halfReason' => $this->halfReason,             
            'serialNo' => $this->serialNo,             
            'snManage' => $this->snManage,             
            'relationId' => $this->relationId,             
            'suitCount' => $this->suitCount,             
            'skuUuid' => $this->skuUuid,             
            'skuType' => $this->skuType,             
            'virtualSku' => $this->virtualSku,             
            'guaranteeMoney' => $this->guaranteeMoney,             
            'volumeStorageCode' => $this->volumeStorageCode,             
            'volumeStorageName' => $this->volumeStorageName,             
            'productAddedServices' => $this->productAddedServices,             
            'businessType' => $this->businessType,             
            'serviceCode' => $this->serviceCode,             
            'goodsType' => $this->goodsType             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->productId,"productId");

       RequestCheckUtil::checkString($this->snCode,"snCode");

       RequestCheckUtil::checkString($this->productName,"productName");

       RequestCheckUtil::checkNumeric($this->productCount,"productCount");

       RequestCheckUtil::checkNumeric($this->halfReason,"halfReason");

       RequestCheckUtil::checkString($this->serialNo,"serialNo");

       RequestCheckUtil::checkNumeric($this->snManage,"snManage");

       RequestCheckUtil::checkNumeric($this->relationId,"relationId");

       RequestCheckUtil::checkNumeric($this->suitCount,"suitCount");

       RequestCheckUtil::checkString($this->skuUuid,"skuUuid");

       RequestCheckUtil::checkNumeric($this->skuType,"skuType");

       RequestCheckUtil::checkString($this->virtualSku,"virtualSku");

       RequestCheckUtil::checkNumeric($this->guaranteeMoney,"guaranteeMoney");

       RequestCheckUtil::checkString($this->volumeStorageCode,"volumeStorageCode");

       RequestCheckUtil::checkString($this->volumeStorageName,"volumeStorageName");

       RequestCheckUtil::checkArray($this->productAddedServices,"productAddedServices");
       if(isset($this->productAddedServices)) {
           $arrlength=count($this->productAddedServices);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->productAddedServices[$index]) && method_exists($this->productAddedServices[$index],"check")) {
                   $this->productAddedServices[$index]->check();
               }
           }
       }

       RequestCheckUtil::checkNumeric($this->businessType,"businessType");

       RequestCheckUtil::checkString($this->serviceCode,"serviceCode");

       RequestCheckUtil::checkNumeric($this->goodsType,"goodsType");
    }
}