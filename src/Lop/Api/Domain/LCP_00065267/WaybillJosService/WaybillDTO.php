<?php
namespace Lop\Api\Domain\LCP_00065267\WaybillJosService;

use Lop\Api\Util\RequestCheckUtil;
use JsonSerializable;
use DateTime;

class WaybillDTO implements JsonSerializable {

    /**
     * 京东pin，使用SDK可以不管这个字段；非SDK则属性必须有，值可以为空
     */
    private $josPin;
    /**
     * 应用的app_key,使用SDK可以不管这个字段；非SDK则属性必须有，值可以为空
     */
    private $appKey;
    /**
     * 订单来源，仓配、纯配B2B为ECLP，其他情况商家可自定义，但不能与现有来源重复
     */
    private $source;
    /**
     * 0010001：京东平台
0030001：其他小型销售平台
0010003：苏宁
0090001：POP商家自主售后
0010002：天猫平台
0010004：亚马逊中国
0020001：ChinaSkin（韩国瓷肌）
非SOP商家默认填写：0030001
     */
    private $salePlat;
    /**
     * 商家ID（商家编码在数据库中商家基础信息表中的ID）
     */
    private $customerId;
    /**
     * 商家编码
青龙业主号（配送编码），是青龙系统对商家的编码
     */
    private $customerCode;
    /**
     * 商家名称
     */
    private $customerName;
    /**
     * 商家订单号，强烈建议商家填写，该字段用于系统防重。如果不填写，系统将使用青龙运单号填充该字段
     */
    private $orderId;
    /**
     * 销售平台订单号。例如京东订单号或天猫订单号。如果有多个单号，用英文,间隔。例如：7898675,7898676如果不是平台下单而是某一个商家下单，则不用填写
     */
    private $thrOrderId;
    /**
     * 寄件人姓名，说明：不能为生僻字，暂不支持emoji
     */
    private $senderName;
    /**
     * 寄件人地址，说明：不能为生僻字，请填写省市区县详细地址
     */
    private $senderAddress;
    /**
     * 寄件人电话（座机）（与senderMobile必须有一个不为空）
     */
    private $senderTel;
    /**
     * 寄件人手机(寄件人电话、手机至少有一个不为空)
     */
    private $senderMobile;
    /**
     * 寄件人邮编
     */
    private $senderPostcode;
    /**
     * 收件人名称，说明：不能为生僻字，暂不支持emoji
     */
    private $receiveName;
    /**
     * 收件人详细地址，说明：不能为生僻字，请填写省市区县详细地址
     */
    private $receiveAddress;
    /**
     * 收件人电话（座机）（与receiveMobile必须有一个不为空）
     */
    private $receiveTel;
    /**
     * 收件人手机号(收件人电话、手机至少有一个不为空)
     */
    private $receiveMobile;
    /**
     * 收件人省编码
     */
    private $provinceId;
    /**
     * 收件人省（可以直接拼入receiveAddress中）
     */
    private $province;
    /**
     * 收件人市编码
     */
    private $cityId;
    /**
     * 收件人市（可以直接拼入receiveAddress中）
     */
    private $city;
    /**
     * 收件人县编码
     */
    private $countyId;
    /**
     * 收件人县可以直接拼入receiveAddress中）
     */
    private $county;
    /**
     * 收件人镇编码
     */
    private $townId;
    /**
     * 收件人镇（可以直接拼入receiveAddress中）
     */
    private $town;
    /**
     * 收件人邮编
     */
    private $postcode;
    /**
     * 0、默认 1、上门揽收 2、自送网点 3、司机现场下单揽收 4、整车上门提货（TC项目使用）。不填写：商家无诉求，此字段无意义
     */
    private $pickMethod;
    /**
     * 取件地址
     */
    private $pickAddress;
    /**
     * 取件联系人姓名
     */
    private $pickContract;
    /**
     * 取件联系人座机
     */
    private $pickContractTel;
    /**
     * 取件联系人手机
     */
    private $pickContractMobile;
    /**
     * 接货省ID
     */
    private $areaProvId;
    /**
     * 接货市ID
     */
    private $areaCityId;
    /**
     * 包裹数(大于0，小于1000)
     */
    private $packageCount;
    /**
     * 重量(单位：kg，保留小数点后两位)，可以填0
     */
    private $weight;
    /**
     * 包裹长(单位：cm,保留小数点后两位)
     */
    private $vloumLong;
    /**
     * 包裹宽(单位：cm，保留小数点后两位)
     */
    private $vloumWidth;
    /**
     * 包裹高(单位：cm，保留小数点后两位)
     */
    private $vloumHeight;
    /**
     * 体积(单位：cm3，保留小数点后两位)，可以填0

如果vloumLong、

vloumWidth、

vloumHeight均不是空，此处应填写三者之积
     */
    private $vloumn;
    /**
     * 是否客户打印运单(是：1，否：0。不填或者超出范围，默认是1)
     */
    private $selfPrintWayBill;
    /**
     * 寄托物内容
     */
    private $description;
    /**
     * 货款
商家声明的寄托物的价格
     */
    private $goodsMoney;
    /**
     * 是否代收货款(是：1，否：0。不填或者超出范围，默认是0)
     */
    private $collectionValue;
    /**
     * 代收货款金额(保留小数点后两位)
     */
    private $collectionMoney;
    /**
     * 是否保价(是：1，否：0。不填或者超出范围，默认是0)
     */
    private $guaranteeValue;
    /**
     * 保价金额(保留小数点后两位)
     */
    private $guaranteeValueAmount;
    /**
     * 包装要求(不需包装：1，简单包装：2，特殊包装：3。不填或者超出范围，默认是1)
     */
    private $packageRequired;
    /**
     * 签单返还(签单返还类型：0-不返单，1-普通返单，2-校验身份返单，3-电子签返单，4-电子返单+普通返单)
     */
    private $signReturn;
    /**
     * 时效(普通：1，工作日：2，非工作日：3，晚间：4。O2O一小时达：5。O2O定时达：6。不填或者超出范围，默认是1)
     */
    private $aging;
    /**
     * 运输类型(陆运：1，航空：2。不填或者超出范围，默认是1)
     */
    private $transType;
    /**
     * 
     */
    private $pType;
    /**
     * 门店编码(只O2O运单需要传，普通运单不需要传)
     */
    private $shopCode;
    /**
     * 
     */
    private $deliveryTime;
    /**
     * 预约配送时间（格式：yyyy-MM-dd HH:mm:ss。例如：2020-08-18 08:30:00）
     */
    private $orderSendTime;
    /**
     * 配送业务类型（ 1:普通，2:生鲜常温，5:鲜活，6:控温，7:冷藏，8:冷冻，9:深冷）默认是1；若是生鲜相关产品，则填写枚举2、5、6、7、8、9，否则不填或填1
     */
    private $goodsType;
    /**
     * 运单类型。(普通外单：0，O2O外单：1)默认为0

0：普通外单

1：O2O外单

默认：0
     */
    private $orderType;
    /**
     * 运单状态ID（仅内部使用）
     */
    private $orderStatusId;
    /**
     * 
     */
    private $orgId;
    /**
     * 分拣中心ID
     */
    private $sortingCenterId;
    /**
     * 站点类型
     */
    private $siteType;
    /**
     * 站点编码
     */
    private $siteId;
    /**
     * 站点名称
     */
    private $siteName;
    /**
     * 路区；XXX路XXX小区
     */
    private $road;
    /**
     * 发货仓编码
     */
    private $warehouseCode;
    /**
     * 运单备注（不超过20个字）,打印面单时备注内容也会显示在快递面单上
     */
    private $remark;
    /**
     * 
     */
    private $extendField1;
    /**
     * 
     */
    private $extendField2;
    /**
     * 
     */
    private $extendField3;
    /**
     * 
     */
    private $extendField4;
    /**
     * 
     */
    private $extendField5;
    /**
     * 
     */
    private $idNumber;
    /**
     * 增值服务
     */
    private $addedService;
    /**
     * 计费方式

0：普通计费

1：仓配一体价

默认为0
     */
    private $billType;
    /**
     * 
     */
    private $storeType;
    /**
     * 
     */
    private $cky2;
    /**
     * 
     */
    private $storeId;
    /**
     * 
     */
    private $returnType;
    /**
     * 
     */
    private $clientId;
    /**
     * 商家期望的配送开始时间
     */
    private $shipmentStartTime;
    /**
     * 商家期望的配送结束时间
     */
    private $shipmentEndTime;
    /**
     * 
     */
    private $pickupSign;
    /**
     * 电商模式

0：2C订单

1：2B订单
     */
    private $bussinessModel;
    /**
     * 包裹半收类型

0：

1：

2：

3
     */
    private $halfReceive;
    /**
     * 商品明细
     */
    private $goodsDtoList;
    /**
     * 
     */
    private $lordGiftType;
    /**
     * 
     */
    private $lordGiftRelationList;
    /**
     * 商家期望的揽收开始时间
     */
    private $pickUpStartTime;
    /**
     * 商家期望的揽收结束时间
     */
    private $pickUpEndTime;
    /**
     * 
     */
    private $pickUpRemark;
    /**
     * 预计送达时间
     */
    private $deliveryPromiseTime;
    /**
     * 下单时间
     */
    private $orderSubmitTime;
    /**
     * 
     */
    private $logisticMode;
    /**
     * 快运业务扩展信息
     */
    private $transExtendedDTO;
    /**
     * 寄件人公司，长度：50，说明：不能为生僻字
     */
    private $senderCompany;
    /**
     * 收件人公司，长度：50，说明：不能为生僻字
     */
    private $receiveCompany;
    /**
     * 
     */
    private $userPin;
    /**
     * 寄件人省的京标四级地址（一级地址）
     */
    private $senderProvinceId;
    /**
     * 寄件人省的中文名称（可拼入senderAddress中）
     */
    private $senderProvince;
    /**
     * 寄件人市的京标四级地址（二级地址）
     */
    private $senderCityId;
    /**
     * 寄件人市的中文名称（可拼入senderAddress中）
     */
    private $senderCity;
    /**
     * 寄件人区、县的京标四级地址（三级地址）
     */
    private $senderCountyId;
    /**
     * 寄件人区、县的中文名称可拼入senderAddress中）
     */
    private $senderCounty;
    /**
     * 寄件人村、镇的京标四级地址（四级地址）
     */
    private $senderTownId;
    /**
     * 寄件人村、镇的中文名称（可拼入senderAddress中）
     */
    private $senderTown;
    /**
     * 
     */
    private $senderIdNumber;
    /**
     * 
     */
    private $senderIdType;
    /**
     * KA专用，如果填写会覆盖description（兼容终端展示逻辑）
     */
    private $goods;
    /**
     * 
     */
    private $goodsCount;
    /**
     * 预估费用
     */
    private $freight;
    /**
     * 产品类型（1：特惠送 2：特快送 4：城际闪送 7：微小件 8: 生鲜专送 16：生鲜特快 17、生鲜特惠 20:函数达 21：特惠包裹）
     */
    private $promiseTimeType;
    /**
     * 
     */
    private $waybillCouponDTOList;
    /**
     * 业务订单来源

京喜：JINGXI
     */
    private $waybillChannel;
    /**
     * 开箱验货标识（1：随心验(收费)，2：开商品包装验货，3：开物流包装验货，4：不支持开箱验货）
     */
    private $unpackingInspection;
    /**
     * 
     */
    private $boxCodeList;
    /**
     * 文件url，选择函速达时必填
     */
    private $fileUrl;
    /**
     * 揽收明细 2：支持缺量
     */
    private $pickUpDetailType;
    /**
     * 
     */
    private $pickupSiteId;
    /**
     * 
     */
    private $extendMessage;
    /**
     * 
     */
    private $customerBoxList;

    public function setJosPin($josPin){
       $this->josPin = $josPin;
    }
    
    public function getJosPin(){
       return $this->josPin;
    }
    public function setAppKey($appKey){
       $this->appKey = $appKey;
    }
    
    public function getAppKey(){
       return $this->appKey;
    }
    public function setSource($source){
       $this->source = $source;
    }
    
    public function getSource(){
       return $this->source;
    }
    public function setSalePlat($salePlat){
       $this->salePlat = $salePlat;
    }
    
    public function getSalePlat(){
       return $this->salePlat;
    }
    public function setCustomerId($customerId){
       $this->customerId = $customerId;
    }
    
    public function getCustomerId(){
       return $this->customerId;
    }
    public function setCustomerCode($customerCode){
       $this->customerCode = $customerCode;
    }
    
    public function getCustomerCode(){
       return $this->customerCode;
    }
    public function setCustomerName($customerName){
       $this->customerName = $customerName;
    }
    
    public function getCustomerName(){
       return $this->customerName;
    }
    public function setOrderId($orderId){
       $this->orderId = $orderId;
    }
    
    public function getOrderId(){
       return $this->orderId;
    }
    public function setThrOrderId($thrOrderId){
       $this->thrOrderId = $thrOrderId;
    }
    
    public function getThrOrderId(){
       return $this->thrOrderId;
    }
    public function setSenderName($senderName){
       $this->senderName = $senderName;
    }
    
    public function getSenderName(){
       return $this->senderName;
    }
    public function setSenderAddress($senderAddress){
       $this->senderAddress = $senderAddress;
    }
    
    public function getSenderAddress(){
       return $this->senderAddress;
    }
    public function setSenderTel($senderTel){
       $this->senderTel = $senderTel;
    }
    
    public function getSenderTel(){
       return $this->senderTel;
    }
    public function setSenderMobile($senderMobile){
       $this->senderMobile = $senderMobile;
    }
    
    public function getSenderMobile(){
       return $this->senderMobile;
    }
    public function setSenderPostcode($senderPostcode){
       $this->senderPostcode = $senderPostcode;
    }
    
    public function getSenderPostcode(){
       return $this->senderPostcode;
    }
    public function setReceiveName($receiveName){
       $this->receiveName = $receiveName;
    }
    
    public function getReceiveName(){
       return $this->receiveName;
    }
    public function setReceiveAddress($receiveAddress){
       $this->receiveAddress = $receiveAddress;
    }
    
    public function getReceiveAddress(){
       return $this->receiveAddress;
    }
    public function setReceiveTel($receiveTel){
       $this->receiveTel = $receiveTel;
    }
    
    public function getReceiveTel(){
       return $this->receiveTel;
    }
    public function setReceiveMobile($receiveMobile){
       $this->receiveMobile = $receiveMobile;
    }
    
    public function getReceiveMobile(){
       return $this->receiveMobile;
    }
    public function setProvinceId($provinceId){
       $this->provinceId = $provinceId;
    }
    
    public function getProvinceId(){
       return $this->provinceId;
    }
    public function setProvince($province){
       $this->province = $province;
    }
    
    public function getProvince(){
       return $this->province;
    }
    public function setCityId($cityId){
       $this->cityId = $cityId;
    }
    
    public function getCityId(){
       return $this->cityId;
    }
    public function setCity($city){
       $this->city = $city;
    }
    
    public function getCity(){
       return $this->city;
    }
    public function setCountyId($countyId){
       $this->countyId = $countyId;
    }
    
    public function getCountyId(){
       return $this->countyId;
    }
    public function setCounty($county){
       $this->county = $county;
    }
    
    public function getCounty(){
       return $this->county;
    }
    public function setTownId($townId){
       $this->townId = $townId;
    }
    
    public function getTownId(){
       return $this->townId;
    }
    public function setTown($town){
       $this->town = $town;
    }
    
    public function getTown(){
       return $this->town;
    }
    public function setPostcode($postcode){
       $this->postcode = $postcode;
    }
    
    public function getPostcode(){
       return $this->postcode;
    }
    public function setPickMethod($pickMethod){
       $this->pickMethod = $pickMethod;
    }
    
    public function getPickMethod(){
       return $this->pickMethod;
    }
    public function setPickAddress($pickAddress){
       $this->pickAddress = $pickAddress;
    }
    
    public function getPickAddress(){
       return $this->pickAddress;
    }
    public function setPickContract($pickContract){
       $this->pickContract = $pickContract;
    }
    
    public function getPickContract(){
       return $this->pickContract;
    }
    public function setPickContractTel($pickContractTel){
       $this->pickContractTel = $pickContractTel;
    }
    
    public function getPickContractTel(){
       return $this->pickContractTel;
    }
    public function setPickContractMobile($pickContractMobile){
       $this->pickContractMobile = $pickContractMobile;
    }
    
    public function getPickContractMobile(){
       return $this->pickContractMobile;
    }
    public function setAreaProvId($areaProvId){
       $this->areaProvId = $areaProvId;
    }
    
    public function getAreaProvId(){
       return $this->areaProvId;
    }
    public function setAreaCityId($areaCityId){
       $this->areaCityId = $areaCityId;
    }
    
    public function getAreaCityId(){
       return $this->areaCityId;
    }
    public function setPackageCount($packageCount){
       $this->packageCount = $packageCount;
    }
    
    public function getPackageCount(){
       return $this->packageCount;
    }
    public function setWeight($weight){
       $this->weight = $weight;
    }
    
    public function getWeight(){
       return $this->weight;
    }
    public function setVloumLong($vloumLong){
       $this->vloumLong = $vloumLong;
    }
    
    public function getVloumLong(){
       return $this->vloumLong;
    }
    public function setVloumWidth($vloumWidth){
       $this->vloumWidth = $vloumWidth;
    }
    
    public function getVloumWidth(){
       return $this->vloumWidth;
    }
    public function setVloumHeight($vloumHeight){
       $this->vloumHeight = $vloumHeight;
    }
    
    public function getVloumHeight(){
       return $this->vloumHeight;
    }
    public function setVloumn($vloumn){
       $this->vloumn = $vloumn;
    }
    
    public function getVloumn(){
       return $this->vloumn;
    }
    public function setSelfPrintWayBill($selfPrintWayBill){
       $this->selfPrintWayBill = $selfPrintWayBill;
    }
    
    public function getSelfPrintWayBill(){
       return $this->selfPrintWayBill;
    }
    public function setDescription($description){
       $this->description = $description;
    }
    
    public function getDescription(){
       return $this->description;
    }
    public function setGoodsMoney($goodsMoney){
       $this->goodsMoney = $goodsMoney;
    }
    
    public function getGoodsMoney(){
       return $this->goodsMoney;
    }
    public function setCollectionValue($collectionValue){
       $this->collectionValue = $collectionValue;
    }
    
    public function getCollectionValue(){
       return $this->collectionValue;
    }
    public function setCollectionMoney($collectionMoney){
       $this->collectionMoney = $collectionMoney;
    }
    
    public function getCollectionMoney(){
       return $this->collectionMoney;
    }
    public function setGuaranteeValue($guaranteeValue){
       $this->guaranteeValue = $guaranteeValue;
    }
    
    public function getGuaranteeValue(){
       return $this->guaranteeValue;
    }
    public function setGuaranteeValueAmount($guaranteeValueAmount){
       $this->guaranteeValueAmount = $guaranteeValueAmount;
    }
    
    public function getGuaranteeValueAmount(){
       return $this->guaranteeValueAmount;
    }
    public function setPackageRequired($packageRequired){
       $this->packageRequired = $packageRequired;
    }
    
    public function getPackageRequired(){
       return $this->packageRequired;
    }
    public function setSignReturn($signReturn){
       $this->signReturn = $signReturn;
    }
    
    public function getSignReturn(){
       return $this->signReturn;
    }
    public function setAging($aging){
       $this->aging = $aging;
    }
    
    public function getAging(){
       return $this->aging;
    }
    public function setTransType($transType){
       $this->transType = $transType;
    }
    
    public function getTransType(){
       return $this->transType;
    }
    public function setPType($pType){
       $this->pType = $pType;
    }
    
    public function getPType(){
       return $this->pType;
    }
    public function setShopCode($shopCode){
       $this->shopCode = $shopCode;
    }
    
    public function getShopCode(){
       return $this->shopCode;
    }
    public function setDeliveryTime($deliveryTime){
       $this->deliveryTime = $deliveryTime;
    }
    
    public function getDeliveryTime(){
       return $this->deliveryTime;
    }
    public function setOrderSendTime($orderSendTime){
       $this->orderSendTime = $orderSendTime;
    }
    
    public function getOrderSendTime(){
       return $this->orderSendTime;
    }
    public function setGoodsType($goodsType){
       $this->goodsType = $goodsType;
    }
    
    public function getGoodsType(){
       return $this->goodsType;
    }
    public function setOrderType($orderType){
       $this->orderType = $orderType;
    }
    
    public function getOrderType(){
       return $this->orderType;
    }
    public function setOrderStatusId($orderStatusId){
       $this->orderStatusId = $orderStatusId;
    }
    
    public function getOrderStatusId(){
       return $this->orderStatusId;
    }
    public function setOrgId($orgId){
       $this->orgId = $orgId;
    }
    
    public function getOrgId(){
       return $this->orgId;
    }
    public function setSortingCenterId($sortingCenterId){
       $this->sortingCenterId = $sortingCenterId;
    }
    
    public function getSortingCenterId(){
       return $this->sortingCenterId;
    }
    public function setSiteType($siteType){
       $this->siteType = $siteType;
    }
    
    public function getSiteType(){
       return $this->siteType;
    }
    public function setSiteId($siteId){
       $this->siteId = $siteId;
    }
    
    public function getSiteId(){
       return $this->siteId;
    }
    public function setSiteName($siteName){
       $this->siteName = $siteName;
    }
    
    public function getSiteName(){
       return $this->siteName;
    }
    public function setRoad($road){
       $this->road = $road;
    }
    
    public function getRoad(){
       return $this->road;
    }
    public function setWarehouseCode($warehouseCode){
       $this->warehouseCode = $warehouseCode;
    }
    
    public function getWarehouseCode(){
       return $this->warehouseCode;
    }
    public function setRemark($remark){
       $this->remark = $remark;
    }
    
    public function getRemark(){
       return $this->remark;
    }
    public function setExtendField1($extendField1){
       $this->extendField1 = $extendField1;
    }
    
    public function getExtendField1(){
       return $this->extendField1;
    }
    public function setExtendField2($extendField2){
       $this->extendField2 = $extendField2;
    }
    
    public function getExtendField2(){
       return $this->extendField2;
    }
    public function setExtendField3($extendField3){
       $this->extendField3 = $extendField3;
    }
    
    public function getExtendField3(){
       return $this->extendField3;
    }
    public function setExtendField4($extendField4){
       $this->extendField4 = $extendField4;
    }
    
    public function getExtendField4(){
       return $this->extendField4;
    }
    public function setExtendField5($extendField5){
       $this->extendField5 = $extendField5;
    }
    
    public function getExtendField5(){
       return $this->extendField5;
    }
    public function setIdNumber($idNumber){
       $this->idNumber = $idNumber;
    }
    
    public function getIdNumber(){
       return $this->idNumber;
    }
    public function setAddedService($addedService){
       $this->addedService = $addedService;
    }
    
    public function getAddedService(){
       return $this->addedService;
    }
    public function setBillType($billType){
       $this->billType = $billType;
    }
    
    public function getBillType(){
       return $this->billType;
    }
    public function setStoreType($storeType){
       $this->storeType = $storeType;
    }
    
    public function getStoreType(){
       return $this->storeType;
    }
    public function setCky2($cky2){
       $this->cky2 = $cky2;
    }
    
    public function getCky2(){
       return $this->cky2;
    }
    public function setStoreId($storeId){
       $this->storeId = $storeId;
    }
    
    public function getStoreId(){
       return $this->storeId;
    }
    public function setReturnType($returnType){
       $this->returnType = $returnType;
    }
    
    public function getReturnType(){
       return $this->returnType;
    }
    public function setClientId($clientId){
       $this->clientId = $clientId;
    }
    
    public function getClientId(){
       return $this->clientId;
    }
    public function setShipmentStartTime($shipmentStartTime){
       $this->shipmentStartTime = $shipmentStartTime;
    }
    
    public function getShipmentStartTime(){
       return $this->shipmentStartTime;
    }
    public function setShipmentEndTime($shipmentEndTime){
       $this->shipmentEndTime = $shipmentEndTime;
    }
    
    public function getShipmentEndTime(){
       return $this->shipmentEndTime;
    }
    public function setPickupSign($pickupSign){
       $this->pickupSign = $pickupSign;
    }
    
    public function getPickupSign(){
       return $this->pickupSign;
    }
    public function setBussinessModel($bussinessModel){
       $this->bussinessModel = $bussinessModel;
    }
    
    public function getBussinessModel(){
       return $this->bussinessModel;
    }
    public function setHalfReceive($halfReceive){
       $this->halfReceive = $halfReceive;
    }
    
    public function getHalfReceive(){
       return $this->halfReceive;
    }
    public function setGoodsDtoList($goodsDtoList){
       $this->goodsDtoList = $goodsDtoList;
    }
    
    public function getGoodsDtoList(){
       return $this->goodsDtoList;
    }
    public function setLordGiftType($lordGiftType){
       $this->lordGiftType = $lordGiftType;
    }
    
    public function getLordGiftType(){
       return $this->lordGiftType;
    }
    public function setLordGiftRelationList($lordGiftRelationList){
       $this->lordGiftRelationList = $lordGiftRelationList;
    }
    
    public function getLordGiftRelationList(){
       return $this->lordGiftRelationList;
    }
    public function setPickUpStartTime($pickUpStartTime){
       $this->pickUpStartTime = $pickUpStartTime;
    }
    
    public function getPickUpStartTime(){
       return $this->pickUpStartTime;
    }
    public function setPickUpEndTime($pickUpEndTime){
       $this->pickUpEndTime = $pickUpEndTime;
    }
    
    public function getPickUpEndTime(){
       return $this->pickUpEndTime;
    }
    public function setPickUpRemark($pickUpRemark){
       $this->pickUpRemark = $pickUpRemark;
    }
    
    public function getPickUpRemark(){
       return $this->pickUpRemark;
    }
    public function setDeliveryPromiseTime($deliveryPromiseTime){
       $this->deliveryPromiseTime = $deliveryPromiseTime;
    }
    
    public function getDeliveryPromiseTime(){
       return $this->deliveryPromiseTime;
    }
    public function setOrderSubmitTime($orderSubmitTime){
       $this->orderSubmitTime = $orderSubmitTime;
    }
    
    public function getOrderSubmitTime(){
       return $this->orderSubmitTime;
    }
    public function setLogisticMode($logisticMode){
       $this->logisticMode = $logisticMode;
    }
    
    public function getLogisticMode(){
       return $this->logisticMode;
    }
    public function setTransExtendedDTO($transExtendedDTO){
       $this->transExtendedDTO = $transExtendedDTO;
    }
    
    public function getTransExtendedDTO(){
       return $this->transExtendedDTO;
    }
    public function setSenderCompany($senderCompany){
       $this->senderCompany = $senderCompany;
    }
    
    public function getSenderCompany(){
       return $this->senderCompany;
    }
    public function setReceiveCompany($receiveCompany){
       $this->receiveCompany = $receiveCompany;
    }
    
    public function getReceiveCompany(){
       return $this->receiveCompany;
    }
    public function setUserPin($userPin){
       $this->userPin = $userPin;
    }
    
    public function getUserPin(){
       return $this->userPin;
    }
    public function setSenderProvinceId($senderProvinceId){
       $this->senderProvinceId = $senderProvinceId;
    }
    
    public function getSenderProvinceId(){
       return $this->senderProvinceId;
    }
    public function setSenderProvince($senderProvince){
       $this->senderProvince = $senderProvince;
    }
    
    public function getSenderProvince(){
       return $this->senderProvince;
    }
    public function setSenderCityId($senderCityId){
       $this->senderCityId = $senderCityId;
    }
    
    public function getSenderCityId(){
       return $this->senderCityId;
    }
    public function setSenderCity($senderCity){
       $this->senderCity = $senderCity;
    }
    
    public function getSenderCity(){
       return $this->senderCity;
    }
    public function setSenderCountyId($senderCountyId){
       $this->senderCountyId = $senderCountyId;
    }
    
    public function getSenderCountyId(){
       return $this->senderCountyId;
    }
    public function setSenderCounty($senderCounty){
       $this->senderCounty = $senderCounty;
    }
    
    public function getSenderCounty(){
       return $this->senderCounty;
    }
    public function setSenderTownId($senderTownId){
       $this->senderTownId = $senderTownId;
    }
    
    public function getSenderTownId(){
       return $this->senderTownId;
    }
    public function setSenderTown($senderTown){
       $this->senderTown = $senderTown;
    }
    
    public function getSenderTown(){
       return $this->senderTown;
    }
    public function setSenderIdNumber($senderIdNumber){
       $this->senderIdNumber = $senderIdNumber;
    }
    
    public function getSenderIdNumber(){
       return $this->senderIdNumber;
    }
    public function setSenderIdType($senderIdType){
       $this->senderIdType = $senderIdType;
    }
    
    public function getSenderIdType(){
       return $this->senderIdType;
    }
    public function setGoods($goods){
       $this->goods = $goods;
    }
    
    public function getGoods(){
       return $this->goods;
    }
    public function setGoodsCount($goodsCount){
       $this->goodsCount = $goodsCount;
    }
    
    public function getGoodsCount(){
       return $this->goodsCount;
    }
    public function setFreight($freight){
       $this->freight = $freight;
    }
    
    public function getFreight(){
       return $this->freight;
    }
    public function setPromiseTimeType($promiseTimeType){
       $this->promiseTimeType = $promiseTimeType;
    }
    
    public function getPromiseTimeType(){
       return $this->promiseTimeType;
    }
    public function setWaybillCouponDTOList($waybillCouponDTOList){
       $this->waybillCouponDTOList = $waybillCouponDTOList;
    }
    
    public function getWaybillCouponDTOList(){
       return $this->waybillCouponDTOList;
    }
    public function setWaybillChannel($waybillChannel){
       $this->waybillChannel = $waybillChannel;
    }
    
    public function getWaybillChannel(){
       return $this->waybillChannel;
    }
    public function setUnpackingInspection($unpackingInspection){
       $this->unpackingInspection = $unpackingInspection;
    }
    
    public function getUnpackingInspection(){
       return $this->unpackingInspection;
    }
    public function setBoxCodeList($boxCodeList){
       $this->boxCodeList = $boxCodeList;
    }
    
    public function getBoxCodeList(){
       return $this->boxCodeList;
    }
    public function setFileUrl($fileUrl){
       $this->fileUrl = $fileUrl;
    }
    
    public function getFileUrl(){
       return $this->fileUrl;
    }
    public function setPickUpDetailType($pickUpDetailType){
       $this->pickUpDetailType = $pickUpDetailType;
    }
    
    public function getPickUpDetailType(){
       return $this->pickUpDetailType;
    }
    public function setPickupSiteId($pickupSiteId){
       $this->pickupSiteId = $pickupSiteId;
    }
    
    public function getPickupSiteId(){
       return $this->pickupSiteId;
    }
    public function setExtendMessage($extendMessage){
       $this->extendMessage = $extendMessage;
    }
    
    public function getExtendMessage(){
       return $this->extendMessage;
    }
    public function setCustomerBoxList($customerBoxList){
       $this->customerBoxList = $customerBoxList;
    }
    
    public function getCustomerBoxList(){
       return $this->customerBoxList;
    }

    public function jsonSerialize() {
        return [
            'josPin' => $this->josPin,             
            'appKey' => $this->appKey,             
            'source' => $this->source,             
            'salePlat' => $this->salePlat,             
            'customerId' => $this->customerId,             
            'customerCode' => $this->customerCode,             
            'customerName' => $this->customerName,             
            'orderId' => $this->orderId,             
            'thrOrderId' => $this->thrOrderId,             
            'senderName' => $this->senderName,             
            'senderAddress' => $this->senderAddress,             
            'senderTel' => $this->senderTel,             
            'senderMobile' => $this->senderMobile,             
            'senderPostcode' => $this->senderPostcode,             
            'receiveName' => $this->receiveName,             
            'receiveAddress' => $this->receiveAddress,             
            'receiveTel' => $this->receiveTel,             
            'receiveMobile' => $this->receiveMobile,             
            'provinceId' => $this->provinceId,             
            'province' => $this->province,             
            'cityId' => $this->cityId,             
            'city' => $this->city,             
            'countyId' => $this->countyId,             
            'county' => $this->county,             
            'townId' => $this->townId,             
            'town' => $this->town,             
            'postcode' => $this->postcode,             
            'pickMethod' => $this->pickMethod,             
            'pickAddress' => $this->pickAddress,             
            'pickContract' => $this->pickContract,             
            'pickContractTel' => $this->pickContractTel,             
            'pickContractMobile' => $this->pickContractMobile,             
            'areaProvId' => $this->areaProvId,             
            'areaCityId' => $this->areaCityId,             
            'packageCount' => $this->packageCount,             
            'weight' => $this->weight,             
            'vloumLong' => $this->vloumLong,             
            'vloumWidth' => $this->vloumWidth,             
            'vloumHeight' => $this->vloumHeight,             
            'vloumn' => $this->vloumn,             
            'selfPrintWayBill' => $this->selfPrintWayBill,             
            'description' => $this->description,             
            'goodsMoney' => $this->goodsMoney,             
            'collectionValue' => $this->collectionValue,             
            'collectionMoney' => $this->collectionMoney,             
            'guaranteeValue' => $this->guaranteeValue,             
            'guaranteeValueAmount' => $this->guaranteeValueAmount,             
            'packageRequired' => $this->packageRequired,             
            'signReturn' => $this->signReturn,             
            'aging' => $this->aging,             
            'transType' => $this->transType,             
            'pType' => $this->pType,             
            'shopCode' => $this->shopCode,             
            'deliveryTime' => $this->deliveryTime,             
            'orderSendTime' => $this->orderSendTime,             
            'goodsType' => $this->goodsType,             
            'orderType' => $this->orderType,             
            'orderStatusId' => $this->orderStatusId,             
            'orgId' => $this->orgId,             
            'sortingCenterId' => $this->sortingCenterId,             
            'siteType' => $this->siteType,             
            'siteId' => $this->siteId,             
            'siteName' => $this->siteName,             
            'road' => $this->road,             
            'warehouseCode' => $this->warehouseCode,             
            'remark' => $this->remark,             
            'extendField1' => $this->extendField1,             
            'extendField2' => $this->extendField2,             
            'extendField3' => $this->extendField3,             
            'extendField4' => $this->extendField4,             
            'extendField5' => $this->extendField5,             
            'idNumber' => $this->idNumber,             
            'addedService' => $this->addedService,             
            'billType' => $this->billType,             
            'storeType' => $this->storeType,             
            'cky2' => $this->cky2,             
            'storeId' => $this->storeId,             
            'returnType' => $this->returnType,             
            'clientId' => $this->clientId,             
            'shipmentStartTime' => (isset($this->shipmentStartTime) && method_exists($this->shipmentStartTime,"format"))?($this->shipmentStartTime->format(DateTime::ISO8601)):($this->shipmentStartTime),             
            'shipmentEndTime' => (isset($this->shipmentEndTime) && method_exists($this->shipmentEndTime,"format"))?($this->shipmentEndTime->format(DateTime::ISO8601)):($this->shipmentEndTime),             
            'pickupSign' => $this->pickupSign,             
            'bussinessModel' => $this->bussinessModel,             
            'halfReceive' => $this->halfReceive,             
            'goodsDtoList' => $this->goodsDtoList,             
            'lordGiftType' => $this->lordGiftType,             
            'lordGiftRelationList' => $this->lordGiftRelationList,             
            'pickUpStartTime' => (isset($this->pickUpStartTime) && method_exists($this->pickUpStartTime,"format"))?($this->pickUpStartTime->format(DateTime::ISO8601)):($this->pickUpStartTime),             
            'pickUpEndTime' => (isset($this->pickUpEndTime) && method_exists($this->pickUpEndTime,"format"))?($this->pickUpEndTime->format(DateTime::ISO8601)):($this->pickUpEndTime),             
            'pickUpRemark' => $this->pickUpRemark,             
            'deliveryPromiseTime' => (isset($this->deliveryPromiseTime) && method_exists($this->deliveryPromiseTime,"format"))?($this->deliveryPromiseTime->format(DateTime::ISO8601)):($this->deliveryPromiseTime),             
            'orderSubmitTime' => (isset($this->orderSubmitTime) && method_exists($this->orderSubmitTime,"format"))?($this->orderSubmitTime->format(DateTime::ISO8601)):($this->orderSubmitTime),             
            'logisticMode' => $this->logisticMode,             
            'transExtendedDTO' => $this->transExtendedDTO,             
            'senderCompany' => $this->senderCompany,             
            'receiveCompany' => $this->receiveCompany,             
            'userPin' => $this->userPin,             
            'senderProvinceId' => $this->senderProvinceId,             
            'senderProvince' => $this->senderProvince,             
            'senderCityId' => $this->senderCityId,             
            'senderCity' => $this->senderCity,             
            'senderCountyId' => $this->senderCountyId,             
            'senderCounty' => $this->senderCounty,             
            'senderTownId' => $this->senderTownId,             
            'senderTown' => $this->senderTown,             
            'senderIdNumber' => $this->senderIdNumber,             
            'senderIdType' => $this->senderIdType,             
            'goods' => $this->goods,             
            'goodsCount' => $this->goodsCount,             
            'freight' => $this->freight,             
            'promiseTimeType' => $this->promiseTimeType,             
            'waybillCouponDTOList' => $this->waybillCouponDTOList,             
            'waybillChannel' => $this->waybillChannel,             
            'unpackingInspection' => $this->unpackingInspection,             
            'boxCodeList' => $this->boxCodeList,             
            'fileUrl' => $this->fileUrl,             
            'pickUpDetailType' => $this->pickUpDetailType,             
            'pickupSiteId' => $this->pickupSiteId,             
            'extendMessage' => $this->extendMessage,             
            'customerBoxList' => $this->customerBoxList             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->josPin,"josPin");

       RequestCheckUtil::checkString($this->appKey,"appKey");

       RequestCheckUtil::checkString($this->source,"source");

       RequestCheckUtil::checkString($this->salePlat,"salePlat");

       RequestCheckUtil::checkNumeric($this->customerId,"customerId");

       RequestCheckUtil::checkString($this->customerCode,"customerCode");

       RequestCheckUtil::checkString($this->customerName,"customerName");

       RequestCheckUtil::checkString($this->orderId,"orderId");

       RequestCheckUtil::checkString($this->thrOrderId,"thrOrderId");

       RequestCheckUtil::checkString($this->senderName,"senderName");

       RequestCheckUtil::checkString($this->senderAddress,"senderAddress");

       RequestCheckUtil::checkString($this->senderTel,"senderTel");

       RequestCheckUtil::checkString($this->senderMobile,"senderMobile");

       RequestCheckUtil::checkString($this->senderPostcode,"senderPostcode");

       RequestCheckUtil::checkString($this->receiveName,"receiveName");

       RequestCheckUtil::checkString($this->receiveAddress,"receiveAddress");

       RequestCheckUtil::checkString($this->receiveTel,"receiveTel");

       RequestCheckUtil::checkString($this->receiveMobile,"receiveMobile");

       RequestCheckUtil::checkNumeric($this->provinceId,"provinceId");

       RequestCheckUtil::checkString($this->province,"province");

       RequestCheckUtil::checkNumeric($this->cityId,"cityId");

       RequestCheckUtil::checkString($this->city,"city");

       RequestCheckUtil::checkNumeric($this->countyId,"countyId");

       RequestCheckUtil::checkString($this->county,"county");

       RequestCheckUtil::checkNumeric($this->townId,"townId");

       RequestCheckUtil::checkString($this->town,"town");

       RequestCheckUtil::checkString($this->postcode,"postcode");

       RequestCheckUtil::checkString($this->pickMethod,"pickMethod");

       RequestCheckUtil::checkString($this->pickAddress,"pickAddress");

       RequestCheckUtil::checkString($this->pickContract,"pickContract");

       RequestCheckUtil::checkString($this->pickContractTel,"pickContractTel");

       RequestCheckUtil::checkString($this->pickContractMobile,"pickContractMobile");

       RequestCheckUtil::checkNumeric($this->areaProvId,"areaProvId");

       RequestCheckUtil::checkNumeric($this->areaCityId,"areaCityId");

       RequestCheckUtil::checkNumeric($this->packageCount,"packageCount");

       RequestCheckUtil::checkNumeric($this->weight,"weight");

       RequestCheckUtil::checkNumeric($this->vloumLong,"vloumLong");

       RequestCheckUtil::checkNumeric($this->vloumWidth,"vloumWidth");

       RequestCheckUtil::checkNumeric($this->vloumHeight,"vloumHeight");

       RequestCheckUtil::checkNumeric($this->vloumn,"vloumn");

       RequestCheckUtil::checkNumeric($this->selfPrintWayBill,"selfPrintWayBill");

       RequestCheckUtil::checkString($this->description,"description");

       RequestCheckUtil::checkNumeric($this->goodsMoney,"goodsMoney");

       RequestCheckUtil::checkNumeric($this->collectionValue,"collectionValue");

       RequestCheckUtil::checkNumeric($this->collectionMoney,"collectionMoney");

       RequestCheckUtil::checkNumeric($this->guaranteeValue,"guaranteeValue");

       RequestCheckUtil::checkNumeric($this->guaranteeValueAmount,"guaranteeValueAmount");

       RequestCheckUtil::checkString($this->packageRequired,"packageRequired");

       RequestCheckUtil::checkNumeric($this->signReturn,"signReturn");

       RequestCheckUtil::checkNumeric($this->aging,"aging");

       RequestCheckUtil::checkNumeric($this->transType,"transType");

       RequestCheckUtil::checkString($this->pType,"pType");

       RequestCheckUtil::checkString($this->shopCode,"shopCode");

       RequestCheckUtil::checkString($this->deliveryTime,"deliveryTime");

       RequestCheckUtil::checkString($this->orderSendTime,"orderSendTime");

       RequestCheckUtil::checkNumeric($this->goodsType,"goodsType");

       RequestCheckUtil::checkNumeric($this->orderType,"orderType");

       RequestCheckUtil::checkNumeric($this->orderStatusId,"orderStatusId");

       RequestCheckUtil::checkNumeric($this->orgId,"orgId");

       RequestCheckUtil::checkNumeric($this->sortingCenterId,"sortingCenterId");

       RequestCheckUtil::checkNumeric($this->siteType,"siteType");

       RequestCheckUtil::checkNumeric($this->siteId,"siteId");

       RequestCheckUtil::checkString($this->siteName,"siteName");

       RequestCheckUtil::checkString($this->road,"road");

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->remark,"remark");

       RequestCheckUtil::checkString($this->extendField1,"extendField1");

       RequestCheckUtil::checkString($this->extendField2,"extendField2");

       RequestCheckUtil::checkString($this->extendField3,"extendField3");

       RequestCheckUtil::checkNumeric($this->extendField4,"extendField4");

       RequestCheckUtil::checkNumeric($this->extendField5,"extendField5");

       RequestCheckUtil::checkString($this->idNumber,"idNumber");

       RequestCheckUtil::checkString($this->addedService,"addedService");

       RequestCheckUtil::checkNumeric($this->billType,"billType");

       RequestCheckUtil::checkString($this->storeType,"storeType");

       RequestCheckUtil::checkNumeric($this->cky2,"cky2");

       RequestCheckUtil::checkNumeric($this->storeId,"storeId");

       RequestCheckUtil::checkNumeric($this->returnType,"returnType");

       RequestCheckUtil::checkNumeric($this->clientId,"clientId");

       RequestCheckUtil::checkDate($this->shipmentStartTime,"shipmentStartTime");

       RequestCheckUtil::checkDate($this->shipmentEndTime,"shipmentEndTime");

       RequestCheckUtil::checkString($this->pickupSign,"pickupSign");

       RequestCheckUtil::checkNumeric($this->bussinessModel,"bussinessModel");

       RequestCheckUtil::checkNumeric($this->halfReceive,"halfReceive");

       RequestCheckUtil::checkArray($this->goodsDtoList,"goodsDtoList");
       if(isset($this->goodsDtoList)) {
           $arrlength=count($this->goodsDtoList);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->goodsDtoList[$index]) && method_exists($this->goodsDtoList[$index],"check")) {
                   $this->goodsDtoList[$index]->check();
               }
           }
       }

       RequestCheckUtil::checkNumeric($this->lordGiftType,"lordGiftType");

       RequestCheckUtil::checkArray($this->lordGiftRelationList,"lordGiftRelationList");
       if(isset($this->lordGiftRelationList)) {
           $arrlength=count($this->lordGiftRelationList);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->lordGiftRelationList[$index]) && method_exists($this->lordGiftRelationList[$index],"check")) {
                   $this->lordGiftRelationList[$index]->check();
               }
           }
       }

       RequestCheckUtil::checkDate($this->pickUpStartTime,"pickUpStartTime");

       RequestCheckUtil::checkDate($this->pickUpEndTime,"pickUpEndTime");

       RequestCheckUtil::checkString($this->pickUpRemark,"pickUpRemark");

       RequestCheckUtil::checkDate($this->deliveryPromiseTime,"deliveryPromiseTime");

       RequestCheckUtil::checkDate($this->orderSubmitTime,"orderSubmitTime");

       RequestCheckUtil::checkNumeric($this->logisticMode,"logisticMode");

       RequestCheckUtil::checkObject($this->transExtendedDTO,"transExtendedDTO");
       if(isset($this->transExtendedDTO) && method_exists($this->transExtendedDTO,"check")) {
           $this->transExtendedDTO->check();
       }        

       RequestCheckUtil::checkString($this->senderCompany,"senderCompany");

       RequestCheckUtil::checkString($this->receiveCompany,"receiveCompany");

       RequestCheckUtil::checkString($this->userPin,"userPin");

       RequestCheckUtil::checkNumeric($this->senderProvinceId,"senderProvinceId");

       RequestCheckUtil::checkString($this->senderProvince,"senderProvince");

       RequestCheckUtil::checkNumeric($this->senderCityId,"senderCityId");

       RequestCheckUtil::checkString($this->senderCity,"senderCity");

       RequestCheckUtil::checkNumeric($this->senderCountyId,"senderCountyId");

       RequestCheckUtil::checkString($this->senderCounty,"senderCounty");

       RequestCheckUtil::checkNumeric($this->senderTownId,"senderTownId");

       RequestCheckUtil::checkString($this->senderTown,"senderTown");

       RequestCheckUtil::checkString($this->senderIdNumber,"senderIdNumber");

       RequestCheckUtil::checkNumeric($this->senderIdType,"senderIdType");

       RequestCheckUtil::checkString($this->goods,"goods");

       RequestCheckUtil::checkNumeric($this->goodsCount,"goodsCount");

       RequestCheckUtil::checkNumeric($this->freight,"freight");

       RequestCheckUtil::checkNumeric($this->promiseTimeType,"promiseTimeType");

       RequestCheckUtil::checkArray($this->waybillCouponDTOList,"waybillCouponDTOList");
       if(isset($this->waybillCouponDTOList)) {
           $arrlength=count($this->waybillCouponDTOList);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->waybillCouponDTOList[$index]) && method_exists($this->waybillCouponDTOList[$index],"check")) {
                   $this->waybillCouponDTOList[$index]->check();
               }
           }
       }

       RequestCheckUtil::checkString($this->waybillChannel,"waybillChannel");

       RequestCheckUtil::checkString($this->unpackingInspection,"unpackingInspection");

       RequestCheckUtil::checkArray($this->boxCodeList,"boxCodeList");
       if(isset($this->boxCodeList)) {
           $arrlength=count($this->boxCodeList);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->boxCodeList[$index]) && method_exists($this->boxCodeList[$index],"check")) {
                   $this->boxCodeList[$index]->check();
               }
           }
       }

       RequestCheckUtil::checkString($this->fileUrl,"fileUrl");

       RequestCheckUtil::checkNumeric($this->pickUpDetailType,"pickUpDetailType");

       RequestCheckUtil::checkNumeric($this->pickupSiteId,"pickupSiteId");


       RequestCheckUtil::checkArray($this->customerBoxList,"customerBoxList");
       if(isset($this->customerBoxList)) {
           $arrlength=count($this->customerBoxList);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->customerBoxList[$index]) && method_exists($this->customerBoxList[$index],"check")) {
                   $this->customerBoxList[$index]->check();
               }
           }
       }
    }
}