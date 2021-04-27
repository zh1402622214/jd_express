<?php
namespace Lop\Api\Request\LCP_00065267;

use Lop\Api\Util\RequestCheckUtil;
use Lop\Api\Request\DomainAbstractRequest;
use Lop\Api\Plugin\DomainHttpParam;
use Lop\Api\LopDomainClient;
use Lop\Api\Plugin\Entity\HmacPlugin;
use Lop\Api\Plugin\Entity\OAuth2Plugin;
    use Lop\Api\Plugin\Factory\OAuth2PluginFactory;
use Lop\Api\Plugin\Template\OAuth2Template;
    
/**
* 
*/
class GeneralwaybillqueryapiQueryorderinfobyconditionLopRequest extends DomainAbstractRequest{
    private $domainHttpParam;
   /**
    * 
    */
    private $orderInfoQueryConditionDTO;


    public function setOrderInfoQueryConditionDTO($orderInfoQueryConditionDTO){
        $this->orderInfoQueryConditionDTO=$orderInfoQueryConditionDTO;
}

public function getOrderInfoQueryConditionDTO(){
    return $this->orderInfoQueryConditionDTO;
}


public function getApiMethod(){
    return "/generalwaybillqueryapi/queryorderinfobycondition";
}

public function getAppJsonParams() {
    $apiParams = array();
            $apiParams[0] = $this->orderInfoQueryConditionDTO;
        return json_encode($apiParams);
}
public function getDomain(){
    return "express";
}
public function getBodyObject(){
    $apiParams = array();
            $apiParams[0] = $this->orderInfoQueryConditionDTO;
        return $apiParams;
}
public function buildDomainHttpParam(LopDomainClient $client)
{
    $httpParam = new DomainHttpParam();
            $lopPluginList = $this->getLopPluginList();
        foreach ($lopPluginList as $index => $lopPlugin) {
                                    if($lopPlugin instanceof OAuth2Plugin){
                    $lopPluginTemplate = new OAuth2Template();
                    $lopPluginTemplate->buildHttpParams($httpParam,$this,$lopPlugin);
                }
                            }
        if ($this->domainHttpParam != null) {
        $httpParam->addHeaders($this->domainHttpParam->getHeaders());
        $httpParam->addUrlArg($this->domainHttpParam->getUrlArgs());
    }
    $this->domainHttpParam=$httpParam;
    return $httpParam;
}

public function getDomainHttpParam()
{
    return $this->domainHttpParam;
}

public function setDomainHttpParam($domainHttpParam)
{
    return $this->domainHttpParam=$domainHttpParam;
}

public function check() {
    
        RequestCheckUtil::checkObject($this->orderInfoQueryConditionDTO,"orderInfoQueryConditionDTO");
    if(isset($this->orderInfoQueryConditionDTO) && method_exists($this->orderInfoQueryConditionDTO,"check")) {
        $this->orderInfoQueryConditionDTO->check();
    }
    }
}