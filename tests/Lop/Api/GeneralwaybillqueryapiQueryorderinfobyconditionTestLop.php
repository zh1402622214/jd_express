<?php
include_once __DIR__ . '/../../../../vendor/autoload.php';
use Lop\Api\LopDomainClient;
use Lop\Api\Request\LCP_00065267\GeneralwaybillqueryapiQueryorderinfobyconditionLopRequest;
use Lop\Api\Domain\LCP_00065267\GeneralWaybillQueryApi\OrderInfoQueryConditionDTO;
use Lop\Api\Plugin\Factory\HmacPluginFactory;
use Lop\Api\Plugin\Factory\OAuth2PluginFactory;
use Lop\Api\Plugin\DomainHttpParam;
//测试demo
$client = new LopDomainClient("SERVER_URL");
$request = new GeneralwaybillqueryapiQueryorderinfobyconditionLopRequest();
            $orderInfoQueryConditionDTO = new OrderInfoQueryConditionDTO();
                                $orderInfoQueryConditionDTO->setCustomerCode("010K10004");
                                            $orderInfoQueryConditionDTO->setDeliveryId("JDV000000000000");
                                            $orderInfoQueryConditionDTO->setJosPin("pin");
                                            $orderInfoQueryConditionDTO->setPhone("2e65029dcb7a861b3f7d1098da6004be");
                                            $orderInfoQueryConditionDTO->setDynamicTimeFlag(0);
                            $request->setOrderInfoQueryConditionDTO($orderInfoQueryConditionDTO);
                $lopOauthPlugin = OAuth2PluginFactory::produceLopPlugin($client->getServerUrl(),"appKey", "appSecret", "refreshToken");
        $request->addLopPlugin($lopOauthPlugin);
    //参数校验
$request->check();
$resp = $client->execute($request);
echo json_encode($resp,JSON_UNESCAPED_UNICODE);
echo PHP_EOL;
