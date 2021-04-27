<?php
include_once __DIR__ . '/../../../../vendor/autoload.php';
use Lop\Api\LopDomainClient;
use Lop\Api\Request\LCP_00065267\Waybill2CTraceApiGetWaybill2CTraceByWaybillCodeLopRequest;
use Lop\Api\Domain\LCP_00065267\Waybill2CTraceApi\Waybill2CTraceDto;
use Lop\Api\Plugin\Factory\HmacPluginFactory;
use Lop\Api\Plugin\Factory\OAuth2PluginFactory;
use Lop\Api\Plugin\DomainHttpParam;
//测试demo
$client = new LopDomainClient("SERVER_URL");
$request = new Waybill2CTraceApiGetWaybill2CTraceByWaybillCodeLopRequest();
            $waybill2CTraceDto = new Waybill2CTraceDto();
                                $waybill2CTraceDto->setTradeCode("010K00001");
                                            $waybill2CTraceDto->setWaybillCode("JDVA00000000001");
                            $request->setWaybill2CTraceDto($waybill2CTraceDto);
                $lopOauthPlugin = OAuth2PluginFactory::produceLopPlugin($client->getServerUrl(),"appKey", "appSecret", "refreshToken");
        $request->addLopPlugin($lopOauthPlugin);
    //参数校验
$request->check();
$resp = $client->execute($request);
echo json_encode($resp,JSON_UNESCAPED_UNICODE);
echo PHP_EOL;
