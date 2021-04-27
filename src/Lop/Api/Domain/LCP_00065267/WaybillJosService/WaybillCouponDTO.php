<?php
namespace Lop\Api\Domain\LCP_00065267\WaybillJosService;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class WaybillCouponDTO implements JsonSerializable {

    /**
     * 
     */
    private $waybillCode;
    /**
     * 优惠券编号
     */
    private $couponId;
    /**
     * 优惠券类型
     */
    private $couponType;
    /**
     * 优惠券优惠金额，若为折扣券，传null；其他必传且不为空
     */
    private $couponDiscount;
    /**
     * 优惠券类别
     */
    private $couponStyle;
    /**
     * 文案描述--限品类文案
     */
    private $description;
    /**
     * 折扣率，下单入参时，如果couponType=400，为折扣券，则必传且不为空
     */
    private $discountRate;
    /**
     * 折扣券优惠金额上限，下单入参时，如果couponType=400，为折扣券，则必传且不为空
     */
    private $discountUpperLimit;
    /**
     * 0-优惠券；1-折扣编码
     */
    private $couponMold;
    /**
     *  折扣优惠计算必传code
     */
    private $discountMixCode;

    public function setWaybillCode($waybillCode){
       $this->waybillCode = $waybillCode;
    }
    
    public function getWaybillCode(){
       return $this->waybillCode;
    }
    public function setCouponId($couponId){
       $this->couponId = $couponId;
    }
    
    public function getCouponId(){
       return $this->couponId;
    }
    public function setCouponType($couponType){
       $this->couponType = $couponType;
    }
    
    public function getCouponType(){
       return $this->couponType;
    }
    public function setCouponDiscount($couponDiscount){
       $this->couponDiscount = $couponDiscount;
    }
    
    public function getCouponDiscount(){
       return $this->couponDiscount;
    }
    public function setCouponStyle($couponStyle){
       $this->couponStyle = $couponStyle;
    }
    
    public function getCouponStyle(){
       return $this->couponStyle;
    }
    public function setDescription($description){
       $this->description = $description;
    }
    
    public function getDescription(){
       return $this->description;
    }
    public function setDiscountRate($discountRate){
       $this->discountRate = $discountRate;
    }
    
    public function getDiscountRate(){
       return $this->discountRate;
    }
    public function setDiscountUpperLimit($discountUpperLimit){
       $this->discountUpperLimit = $discountUpperLimit;
    }
    
    public function getDiscountUpperLimit(){
       return $this->discountUpperLimit;
    }
    public function setCouponMold($couponMold){
       $this->couponMold = $couponMold;
    }
    
    public function getCouponMold(){
       return $this->couponMold;
    }
    public function setDiscountMixCode($discountMixCode){
       $this->discountMixCode = $discountMixCode;
    }
    
    public function getDiscountMixCode(){
       return $this->discountMixCode;
    }

    public function jsonSerialize() {
        return [
            'waybillCode' => $this->waybillCode,             
            'couponId' => $this->couponId,             
            'couponType' => $this->couponType,             
            'couponDiscount' => $this->couponDiscount,             
            'couponStyle' => $this->couponStyle,             
            'description' => $this->description,             
            'discountRate' => $this->discountRate,             
            'discountUpperLimit' => $this->discountUpperLimit,             
            'couponMold' => $this->couponMold,             
            'discountMixCode' => $this->discountMixCode             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->waybillCode,"waybillCode");

       RequestCheckUtil::checkString($this->couponId,"couponId");

       RequestCheckUtil::checkNumeric($this->couponType,"couponType");

       RequestCheckUtil::checkNumeric($this->couponDiscount,"couponDiscount");

       RequestCheckUtil::checkNumeric($this->couponStyle,"couponStyle");

       RequestCheckUtil::checkString($this->description,"description");

       RequestCheckUtil::checkNumeric($this->discountRate,"discountRate");

       RequestCheckUtil::checkNumeric($this->discountUpperLimit,"discountUpperLimit");

       RequestCheckUtil::checkNumeric($this->couponMold,"couponMold");

       RequestCheckUtil::checkString($this->discountMixCode,"discountMixCode");
    }
}