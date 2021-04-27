<?php
include_once __DIR__ . '/../../../../vendor/autoload.php';
use Lop\Api\LopDomainClient;
use Lop\Api\Request\LCP_00065267\OrbLsCancelWaybillInterceptServiceCancelOrderLopRequest;
use Lop\Api\Domain\LCP_00065267\OrbLsCancelWaybillInterceptService\CancelWaybillInterceptReq;
use Lop\Api\Plugin\Factory\HmacPluginFactory;
use Lop\Api\Plugin\Factory\OAuth2PluginFactory;
use Lop\Api\Plugin\DomainHttpParam;
//测试demo
$client = new LopDomainClient("SERVER_URL");
$request = new OrbLsCancelWaybillInterceptServiceCancelOrderLopRequest();
            $cancelRequest = new CancelWaybillInterceptReq();
                                $cancelRequest->setPin("test");
                                            $cancelRequest->setCancelTime(date_create());
                                            $cancelRequest->setVendorCode("test");
                                            $cancelRequest->setDeliveryId("test");
                                            $cancelRequest->setInterceptReason("test");
                                            $cancelRequest->setCancelReasonCode(1);
                                            $cancelRequest->setCancelOperator("test");
                                            $cancelRequest->setSource("test");
                                            $cancelRequest->setCancelType("test");
                            $request->setCancelRequest($cancelRequest);
                $lopOauthPlugin = OAuth2PluginFactory::produceLopPlugin($client->getServerUrl(),"appKey", "appSecret", "refreshToken");
        $request->addLopPlugin($lopOauthPlugin);
    //参数校验
$request->check();
$resp = $client->execute($request);
echo json_encode($resp,JSON_UNESCAPED_UNICODE);
echo PHP_EOL;
