<?php
namespace Lop\Api\Domain\LCP_00065267\Waybill2CTraceApi;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;

class Waybill2CTraceDto implements JsonSerializable {

    /**
     * 配送商家编码
     */
    private $tradeCode;
    /**
     * 运单号
     */
    private $waybillCode;

    public function setTradeCode($tradeCode){
       $this->tradeCode = $tradeCode;
    }
    
    public function getTradeCode(){
       return $this->tradeCode;
    }
    public function setWaybillCode($waybillCode){
       $this->waybillCode = $waybillCode;
    }
    
    public function getWaybillCode(){
       return $this->waybillCode;
    }

    public function jsonSerialize() {
        return [
            'tradeCode' => $this->tradeCode,             
            'waybillCode' => $this->waybillCode             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->tradeCode,"tradeCode");

       RequestCheckUtil::checkString($this->waybillCode,"waybillCode");
    }
}