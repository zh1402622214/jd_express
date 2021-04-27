<?php
namespace Lop\Api\Domain\LCP_00065267\OrderInfoOperateSaf;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class DeliveryIdPackageCodeRelation implements JsonSerializable {

    /**
     * 第三方运单号
     */
    private $thrDeliveryId;
    /**
     * 京东包裹号
     */
    private $packageCode;
    /**
     * 重量
     */
    private $weight;
    /**
     * 长
     */
    private $vloumLong;
    /**
     * 宽
     */
    private $vloumWidth;
    /**
     * 高
     */
    private $vloumHeight;
    /**
     * 体积
     */
    private $vloumn;

    public function setThrDeliveryId($thrDeliveryId){
       $this->thrDeliveryId = $thrDeliveryId;
    }
    
    public function getThrDeliveryId(){
       return $this->thrDeliveryId;
    }
    public function setPackageCode($packageCode){
       $this->packageCode = $packageCode;
    }
    
    public function getPackageCode(){
       return $this->packageCode;
    }
    public function setWeight($weight){
       $this->weight = $weight;
    }
    
    public function getWeight(){
       return $this->weight;
    }
    public function setVloumLong($vloumLong){
       $this->vloumLong = $vloumLong;
    }
    
    public function getVloumLong(){
       return $this->vloumLong;
    }
    public function setVloumWidth($vloumWidth){
       $this->vloumWidth = $vloumWidth;
    }
    
    public function getVloumWidth(){
       return $this->vloumWidth;
    }
    public function setVloumHeight($vloumHeight){
       $this->vloumHeight = $vloumHeight;
    }
    
    public function getVloumHeight(){
       return $this->vloumHeight;
    }
    public function setVloumn($vloumn){
       $this->vloumn = $vloumn;
    }
    
    public function getVloumn(){
       return $this->vloumn;
    }

    public function jsonSerialize() {
        return [
            'thrDeliveryId' => $this->thrDeliveryId,             
            'packageCode' => $this->packageCode,             
            'weight' => $this->weight,             
            'vloumLong' => $this->vloumLong,             
            'vloumWidth' => $this->vloumWidth,             
            'vloumHeight' => $this->vloumHeight,             
            'vloumn' => $this->vloumn             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->thrDeliveryId,"thrDeliveryId");

       RequestCheckUtil::checkString($this->packageCode,"packageCode");

       RequestCheckUtil::checkNumeric($this->weight,"weight");

       RequestCheckUtil::checkNumeric($this->vloumLong,"vloumLong");

       RequestCheckUtil::checkNumeric($this->vloumWidth,"vloumWidth");

       RequestCheckUtil::checkNumeric($this->vloumHeight,"vloumHeight");

       RequestCheckUtil::checkNumeric($this->vloumn,"vloumn");
    }
}