<?php
include_once __DIR__ . '/../../../../vendor/autoload.php';
use Lop\Api\LopDomainClient;
use Lop\Api\Request\LCP_00065267\TraceQueryJsfQueryTraceLopRequest;
use Lop\Api\Domain\LCP_00065267\TraceQueryJsf\TraceQueryDTO;
use Lop\Api\Plugin\Factory\HmacPluginFactory;
use Lop\Api\Plugin\Factory\OAuth2PluginFactory;
use Lop\Api\Plugin\DomainHttpParam;
//测试demo
$client = new LopDomainClient("SERVER_URL");
$request = new TraceQueryJsfQueryTraceLopRequest();
            $queryDTO = new TraceQueryDTO();
                                $queryDTO->setCustomerCode("010K1234");
                                            $queryDTO->setWaybillCode("JDVA123456789");
                                            $queryDTO->setJosPin("test");
                            $request->setQueryDTO($queryDTO);
                $lopOauthPlugin = OAuth2PluginFactory::produceLopPlugin($client->getServerUrl(),"appKey", "appSecret", "refreshToken");
        $request->addLopPlugin($lopOauthPlugin);
    //参数校验
$request->check();
$resp = $client->execute($request);
echo json_encode($resp,JSON_UNESCAPED_UNICODE);
echo PHP_EOL;
