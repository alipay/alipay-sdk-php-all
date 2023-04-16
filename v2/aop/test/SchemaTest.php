<?php
require_once '../schema/ServiceSchemaWriter.php';
require_once '../schema/ServiceSchemaFactory.php';
require_once '../schema/ServiceSchemaReader.php';


//读☺️xml文件 转成数组
try {
    $result = ServiceSchemaReader::readXmlForArrayByFile('your_xml_file_path');
    echo var_dump($result), PHP_EOL;
} catch (Exception $e) {
    var_dump($e->getMessage());
}

try {
    //获取字符串 转成数组
    $xml_string = 'your_xml_string';
//    $xml_string = "<serviceSchema><attribute id=\"serviceName\" name=\"服务名称\" type=\"single\" valueType=\"text\"><value/><rules><rule type=\"required\" name=\"是否必填\" value=\"true\"/><rule type=\"maxLength\" name=\"最大长度\" value=\"10\"/><rule type=\"minLength\" name=\"最小长度\" value=\"2\"/><rule type=\"pattern\" name=\"正则表达式\" value=\"[\\u4E00-\\u9FA5A-Za-z0-9_+]+\"/><rule type=\"devTip\" name=\"开发者提示\" value=\"这是框外文案填写格式：可以由中文、数字、英文、下划线、+、-组成审核提醒：1.服务名称代表小程序内的某个功能或一类服务，服务名称不可重复且需代表不同的功能2.服务名称不可与小程序名称重复3.二级服务需要与小程序本身提供的服务相关，如租赁类小程序的服务名称需要与租赁服务有关\"/></rules></attribute><attribute id=\"serviceDesc\" name=\"服务描述\" type=\"single\" valueType=\"text\"><value/><rules><rule type=\"required\" name=\"是否必填\" value=\"true\"/><rule type=\"maxLength\" name=\"最大长度\" value=\"16\"/><rule type=\"minLength\" name=\"最小长度\" value=\"5\"/><rule type=\"devTip\" name=\"开发者提示\" value=\"这是框外文案审核提醒：&amp;lt;br/&amp;gt;1.要清楚介绍小程序的服务功能，比如提供了什么功能，便于通过审核&amp;lt;br/&amp;gt;2.请不要填写无意义的内容&amp;lt;br/&amp;gt;3.请不要出现向外部应用引流的文案\"/></rules></attribute><attribute id=\"serviceUrl\" name=\"服务链接\" type=\"multiComplex\" valueType=\"object\"><attributes><attribute id=\"carrierType\" name=\"载体类型\" type=\"single\" valueType=\"enum\"><rules><rule type=\"required\" name=\"是否必填\" value=\"true\"/></rules><options><option displayName=\"支付宝小程序\" value=\"SC_MINI_APP\"/><option displayName=\"高德小程序\" value=\"AMAP_MINI_APP\"/><option displayName=\"UC小程序地址\" value=\"UC_MINI_APP\"/><option displayName=\"夸克小程序地址\" value=\"QUARK_MINI_APP\"/></options><value/></attribute><attribute id=\"carrierUrl\" name=\"载体url\" type=\"single\" valueType=\"text\"><rules><rule type=\"required\" name=\"是否必填\" value=\"true\"/></rules><value/></attribute></attributes></attribute><attribute id=\"poi\" name=\"poi信息\" type=\"complex\" valueType=\"object\"><attributes><attribute id=\"shopId\" name=\"门店ID\" type=\"single\" valueType=\"text\"><rules><rule type=\"required\" name=\"是否必填\" value=\"false\"/><rule type=\"devTip\" name=\"开发者提示\" value=\"如果服务对应的门店已创建过支付宝门店（https://opendocs.alipay.com/mini/0149jo），可以只传对应的shopID；门店ID和（门店名称+城市码+地址）二选一。\"/></rules><value/></attribute><attribute id=\"poiName\" name=\"门店名称\" type=\"single\" valueType=\"text\"><rules><rule type=\"required\" name=\"是否必填\" value=\"false\"/><rule type=\"devTip\" name=\"开发者提示\" value=\"服务对应的线下门店名称，需要填写标准，门店ID和（门店名称+城市码+地址）二选一。\"/></rules><value/></attribute><attribute id=\"address\" name=\"地址\" type=\"single\" valueType=\"text\"><rules><rule type=\"required\" name=\"是否必填\" value=\"false\"/><rule type=\"devTip\" name=\"开发者提示\" value=\"服门店详细地址,具体到门牌号,支付宝测会基于这个信息去高德转换经纬度信息，需要填写标准，门店ID和（门店名称+城市码+地址）二选一。\"/></rules><value/></attribute><attribute id=\"cityCode\" name=\"城市码\" type=\"single\" valueType=\"text\"><rules><rule type=\"required\" name=\"是否必填\" value=\"false\"/><rule type=\"devTip\" name=\"开发者提示\" value=\"服务对应线下门店所属城市6位行政编码，门店ID和（门店名称+城市码+地址）二选一。\"/></rules><value/></attribute></attributes><rules><rule type=\"devTip\" name=\"开发者提示\" value=\"门店id和(adress+门店名称+cityCode)二选一,有门店id传shopId,没有门店id就填门店详细地址adress;如果选择adress,对应的门店名称和门店所在城市码必须传\"/><rule type=\"required\" name=\"是否必填\" value=\"true\"/><rule type=\"maxSize\" name=\"最大条目数\" value=\"1\"/><rule type=\"minSize\" name=\"最小条目数\" value=\"1\"/></rules></attribute><attribute id=\"A2021031200406612\" name=\"标准属性_TEXT\" type=\"multi\" valueType=\"text\"><values/><rules><rule type=\"required\" name=\"是否必填\" value=\"true\"/><rule type=\"maxSize\" name=\"最大条目数\" value=\"10\"/><rule type=\"minSize\" name=\"最小条目数\" value=\"2\"/><rule type=\"devTip\" name=\"开发者提示\" value=\"这是框外文案\"/></rules></attribute></serviceSchema>";
    $result = ServiceSchemaReader::readXmlForArrayByString($xml_string);
    echo var_dump($result), PHP_EOL;
    //将处理后的数组转为最终结果
    $res = ServiceSchemaWriter::writeSchemaXmlString(handleResult($result));
    echo var_dump($res), PHP_EOL;
} catch (Exception $e) {
    var_dump($e->getMessage());
}

function handleResult($result){
    $attributeArr = array();
    foreach ($result as $key => $value) {
        switch ($key){
            case "serviceName":
                $value->setValues("sdk构造测试");
                break;
            case "serviceDesc":
                $value->setValues("sdk构造测试-描述");
                break;
            case "serviceUrl":
                foreach ($value->getValues() as $item){
                    foreach ($item->getValues() as $attr) {
                        if($attr->getId() == 'carrierType'){
                            $attr->setValues('SC_MINI_APP');
                        }elseif ($attr->getId() == 'carrierUrl'){
                            $attr->setValues('alipays://platformapi/startapp?appId=2019101468340048&page=pages');
                        }
                    }
                }
                break;
            case "poi":
                foreach ($value->getValues() as $attr){
                    if($attr->getId() == 'poiName'){
                        $attr->setValues('肯德基');
                    }elseif ($attr->getId() == 'address'){
                        $attr->setValues('蚂蚁金服A空间');
                    }elseif ($attr->getId() == 'cityCode'){
                        $attr->setValues('330100');
                    }
                }
                break;
            case "A2021031200406612":
                $value->setValues(array("6","5"));
                break;
        }
        $attributeArr[] = $value;
    }
    return $attributeArr;
}





//single
$singleAttribute = setSingleAttribute();
//$singleAttribute = setSingleAttribute("errValue");
//multi
$multiAttributes = setMultiAttribute();
//complex
$complexAttributes = setComplexAttribute();
//multiComplex
$multiComplexAttributes = setMultiComplexAttribute();

//数组构建schema的xml格式（不含rules和options）
try {
    echo var_dump(ServiceSchemaWriter::writeSchemaXmlString(array($singleAttribute, $multiAttributes, $complexAttributes, $multiComplexAttributes))), PHP_EOL;
} catch (Exception $e) {
    var_dump($e->getMessage());
}
//数组构建schema的xml格式（完整格式）
try {
    echo var_dump(ServiceSchemaWriter::writeFullchemaXmlString(array($singleAttribute, $multiAttributes, $complexAttributes, $multiComplexAttributes))), PHP_EOL;
} catch (Exception $e) {
    var_dump($e->getMessage());
}

function setSingleAttribute($errType=null)
{
    $attribute = ServiceSchemaFactory::createAttribute("serviceName", "服务名称", "single", "text");
    //构造异常数据
    if($errType=='errId'){
        $attribute = ServiceSchemaFactory::createAttribute(null, "服务名称", "single", "text");
    }elseif ($errType=='errValueType'){
        $attribute = ServiceSchemaFactory::createAttribute("serviceName", "服务名称", "single", "text123");
    }
    //values
    $attribute->setValues("服务提报demo");
    if($errType=='errValue'){
        $attribute->setValues(array("服务提报demo"));
    }
    //rules
    $rules = array(
        $errType == 'errRule' ? ServiceSchemaFactory::createRule("required", "必填") : ServiceSchemaFactory::createRule("required", "必填", "true"),
        ServiceSchemaFactory::createRule("maxLength", "最大长度", "15")
    );
    $attribute->setRules($rules);
    //options
    $options = array(
        $errType == 'errOption' ? ServiceSchemaFactory::createOption("支付宝小程序") : ServiceSchemaFactory::createOption("支付宝小程序", "SC_MINI_APP"),
        ServiceSchemaFactory::createOption("高德小程序", "AMAP_MINI_APP")
    );
    $attribute->setOptions($options);
    return $attribute;
}

function setMultiAttribute($errType=null)
{
    $attribute = ServiceSchemaFactory::createAttribute("serviceName", "服务名称", "multi", "text");
    //values
    $values = array("周一", "周二");
    $attribute->setValues($values);
    if($errType=='errValue'){
        $attribute->setValues("周一");
    }
    //rules
    $rules = array(
        ServiceSchemaFactory::createRule("pattern", "正则表达式", "[\\u4E00-\\u9FA5A-Za-z0-9_+\\-()（）]+"),
        ServiceSchemaFactory::createRule("minLength", "最小长度", "2")
    );
    $attribute->setRules($rules);
    //options
    $options = array(
        ServiceSchemaFactory::createOption("UC小程序地址", "UC_MINI_APP"),
        ServiceSchemaFactory::createOption("夸克小程序地址", "QUARK_MINI_APP")
    );
    $attribute->setOptions($options);
    return $attribute;
}

function setComplexAttribute($errType=null)
{
    $attributes = ServiceSchemaFactory::createAttribute("serviceName", "服务名称", "complex", "text");

    $singleAttribute = setSingleAttribute();
    $multiAttributes = setMultiAttribute();
    //values
    $attributes->setValues(array($singleAttribute, $multiAttributes));
    if($errType=='errValue'){
        $attributes->setValues("服务提报demo");
    }

    $attributes->setRules(array(
        ServiceSchemaFactory::createRule("pattern", "正则表达式", "[\\u4E00-\\u9FA5A-Za-z0-9_+\\-()（）]+"),
        ServiceSchemaFactory::createRule("minLength", "最小长度", "2")
    ));
    return $attributes;
}

function setMultiComplexAttribute($errType=null)
{
    $attribute = ServiceSchemaFactory::createAttribute("serviceName", "服务名称", "multiComplex", "text");

    $attributesComplex = setComplexAttribute();
    //values
    $values = array($attributesComplex, $attributesComplex);
    $attribute->setValues($values);
    if($errType=='errValue'){
        $attribute->setValues(array("服务提报demo"));
    }
    return $attribute;
}
