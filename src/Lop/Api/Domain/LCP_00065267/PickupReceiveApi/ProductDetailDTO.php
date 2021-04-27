<?php
namespace Lop\Api\Domain\LCP_00065267\PickupReceiveApi;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ProductDetailDTO implements JsonSerializable {

    /**
     * 商品id
     */
    private $productId;
    /**
     * 商品条码，skuAddService需选择校验条码增值服务时，商品条码必填，且商品条码数量需和商品数量一致，每个商品条码不超过50个，否则拒单
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
     * 商品维度增值服务,勾选多个请用|分隔(1:无外包装不取,2:商品原塑料包装不完整不取,3:商品原包装丢失不取,4:商品原包装破损不取,5:商品已使用不取,6:校验条码)
     */
    private $skuAddService;
    /**
     * 检查外观,勾选多个请用|分隔(1:划痕超过3cm不取,2:破损面积大于3cm²不取,3:污渍面积大于3cm²不取)
     */
    private $skuCheckOutShapes;
    /**
     * 检查附件,勾选多个请用|分隔(1:无保修卡不取,2:无说明书不取,3:无电池不取,4:无电源线不取,5:无充电器不取,6:无吊牌不取)
     */
    private $skuCheckAttachFile;

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
    public function setSkuAddService($skuAddService){
       $this->skuAddService = $skuAddService;
    }
    
    public function getSkuAddService(){
       return $this->skuAddService;
    }
    public function setSkuCheckOutShapes($skuCheckOutShapes){
       $this->skuCheckOutShapes = $skuCheckOutShapes;
    }
    
    public function getSkuCheckOutShapes(){
       return $this->skuCheckOutShapes;
    }
    public function setSkuCheckAttachFile($skuCheckAttachFile){
       $this->skuCheckAttachFile = $skuCheckAttachFile;
    }
    
    public function getSkuCheckAttachFile(){
       return $this->skuCheckAttachFile;
    }

    public function jsonSerialize() {
        return [
            'productId' => $this->productId,             
            'snCode' => $this->snCode,             
            'productName' => $this->productName,             
            'productCount' => $this->productCount,             
            'skuAddService' => $this->skuAddService,             
            'skuCheckOutShapes' => $this->skuCheckOutShapes,             
            'skuCheckAttachFile' => $this->skuCheckAttachFile             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->productId,"productId");

       RequestCheckUtil::checkString($this->snCode,"snCode");

       RequestCheckUtil::checkString($this->productName,"productName");

       RequestCheckUtil::checkNumeric($this->productCount,"productCount");

       RequestCheckUtil::checkString($this->skuAddService,"skuAddService");

       RequestCheckUtil::checkString($this->skuCheckOutShapes,"skuCheckOutShapes");

       RequestCheckUtil::checkString($this->skuCheckAttachFile,"skuCheckAttachFile");
    }
}