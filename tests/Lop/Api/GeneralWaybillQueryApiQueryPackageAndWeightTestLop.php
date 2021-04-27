<?php
include_once __DIR__ . '/../../../../vendor/autoload.php';
use Lop\Api\LopDomainClient;
use Lop\Api\Request\LCP_00065267\GeneralWaybillQueryApiQueryPackageAndWeightLopRequest;
use Lop\Api\Domain\LCP_00065267\GeneralWaybillQueryApi\QueryPackgeAndWeightDTO;
use Lop\Api\Plugin\Factory\HmacPluginFactory;
use Lop\Api\Plugin\Factory\OAuth2PluginFactory;
use Lop\Api\Plugin\DomainHttpParam;
//测试demo
$client = new LopDomainClient("SERVER_URL");
$request = new GeneralWaybillQueryApiQueryPackageAndWeightLopRequest();
            $queryPackgeAndWeightDTO = new QueryPackgeAndWeightDTO();
                                $queryPackgeAndWeightDTO->setDeliveryId("test");
                                            $queryPackgeAndWeightDTO->setCustomerCode("test");
                                            $queryPackgeAndWeightDTO->setJosPin("test");
                            $request->setQueryPackgeAndWeightDTO($queryPackgeAndWeightDTO);
                $lopOauthPlugin = OAuth2PluginFactory::produceLopPlugin($client->getServerUrl(),"appKey", "appSecret", "refreshToken");
        $request->addLopPlugin($lopOauthPlugin);
    //参数校验
$request->check();
$resp = $client->execute($request);
echo json_encode($resp,JSON_UNESCAPED_UNICODE);
echo PHP_EOL;
