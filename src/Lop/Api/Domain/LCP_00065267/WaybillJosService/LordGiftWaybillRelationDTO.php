<?php
namespace Lop\Api\Domain\LCP_00065267\WaybillJosService;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class LordGiftWaybillRelationDTO implements JsonSerializable {

    /**
     * 主品订单号
     */
    private $lordOrderId;
    /**
     * 赠品订单号
     */
    private $giftOrderId;

    public function setLordOrderId($lordOrderId){
       $this->lordOrderId = $lordOrderId;
    }
    
    public function getLordOrderId(){
       return $this->lordOrderId;
    }
    public function setGiftOrderId($giftOrderId){
       $this->giftOrderId = $giftOrderId;
    }
    
    public function getGiftOrderId(){
       return $this->giftOrderId;
    }

    public function jsonSerialize() {
        return [
            'lordOrderId' => $this->lordOrderId,             
            'giftOrderId' => $this->giftOrderId             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->lordOrderId,"lordOrderId");

       RequestCheckUtil::checkString($this->giftOrderId,"giftOrderId");
    }
}