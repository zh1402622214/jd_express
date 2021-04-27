<?php
include_once __DIR__ . '/../../../../vendor/autoload.php';
use Lop\Api\LopDomainClient;
use Lop\Api\Request\LCP_00065267\OrderInfoOperateSafUpdatePackageNumLopRequest;
use Lop\Api\Domain\LCP_00065267\OrderInfoOperateSaf\DeliveryIdPackageCodeRelation;
use Lop\Api\Domain\LCP_00065267\OrderInfoOperateSaf\OrderInfoOperateDTO;
use Lop\Api\Plugin\Factory\HmacPluginFactory;
use Lop\Api\Plugin\Factory\OAuth2PluginFactory;
use Lop\Api\Plugin\DomainHttpParam;
//测试demo
$client = new LopDomainClient("SERVER_URL");
$request = new OrderInfoOperateSafUpdatePackageNumLopRequest();
            $queryDTO = new OrderInfoOperateDTO();
                                $queryDTO->setVendorCode("010K1234");
                                            $queryDTO->setDeliveryId("JDVA12344556");
                                            $queryDTO->setPackageNum(1);
                                                                $queryDTO->setCompanyId(123);
                                            $queryDTO->setInterceptReason("test");
                                            $queryDTO->setModifyType(123);
                                            $queryDTO->setJosPin("test");
                                            $queryDTO->setCancelOperatorCodeType(123);
                                            $queryDTO->setCancelSource("test");
                                            $queryDTO->setCancelTime(date_create());
                                            $queryDTO->setExtendMessage("test");
                                            $queryDTO->setCancelOperator("test");
                                                $request->setQueryDTO($queryDTO);
                $lopOauthPlugin = OAuth2PluginFactory::produceLopPlugin($client->getServerUrl(),"appKey", "appSecret", "refreshToken");
        $request->addLopPlugin($lopOauthPlugin);
    //参数校验
$request->check();
$resp = $client->execute($request);
echo json_encode($resp,JSON_UNESCAPED_UNICODE);
echo PHP_EOL;
