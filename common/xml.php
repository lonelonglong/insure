<?php
function genNSell() {

    // インスタンスの生成
    $dom = new DomDocument ( '1.0', 'UTF-8' );
    // prefs ノードを追加
    $xmlData = $dom->appendChild ( $dom->createElement ( 'XML_DATA' ) );

    $header = $xmlData->appendChild ( $dom->createElement ( 'Header' ) );
    // 要素ノードを追加してテキストを入れる
    // 版本，目前为1.0
    $header->appendChild ( $dom->createElement ( 'Version', '1.0' ) );

    // NSell表示新单购买,Cancellation表示取消，GenerateDoc表示获取pdf保单
    $header->appendChild ( $dom->createElement ( 'TransactionType', 'NSell' ) );
    // 合作伙伴系统中的唯一编号
    $header->appendChild ( $dom->createElement ( 'TransactionId', '2011010100001' ) );

    // ErrorCode=0，ErrorMessage=OK表示交易成功
    //$header->appendChild ( $dom->createElement ( 'ErrorCode', '0' ) );

    //$header->appendChild ( $dom->createElement ( 'ErrorMessage', 'OK' ) );

    $segment = $xmlData->appendChild ( $dom->createElement ( 'Segment' ) );
    $policyIn = $segment->appendChild ( $dom->createElement ( 'PolicyIn' ) );

    // 产品代码
    $policyIn->appendChild ( $dom->createElement ( 'ProductCode', '00001' ) );
    // 计划代码
    $policyIn->appendChild ( $dom->createElement ( 'PlanCode', 'PLAN1D' ) );
    // 出发地
    $policyIn->appendChild ( $dom->createElement ( 'OriginatingCity', '北京' ) );
    // 目的地
    $policyIn->appendChild ( $dom->createElement ( 'FurthestCity', '东京' ) );
    // 申请时间
    $policyIn->appendChild ( $dom->createElement ( 'TransactionApplDate', '2011-01-01 15:00:00' ) );
    // 保单生效时间
    $policyIn->appendChild ( $dom->createElement ( 'TransactionEffDate', '2011-01-30 00:00:000' ) );
    // 保单失效时间
    $policyIn->appendChild ( $dom->createElement ( 'TransactionExpDate', '2011-01-30 23:59:59' ) );

    $insured = $segment->appendChild ( $dom->createElement ( 'Insured' ) );

    // 与投保人关系
    $insured->appendChild ( $dom->createElement ( 'Relation', '本人' ) );
    // 姓名
    $insured->appendChild ( $dom->createElement ( 'Name', 'aaa' ) );
    // 出生日期
    $insured->appendChild ( $dom->createElement ( 'BirthDt', '1980-03-15' ) );
    // 证件类型,身份证=1，护照=3，其它=6
    $insured->appendChild ( $dom->createElement ( 'InsuredIdNoType', '3' ) );
    // 证件号码
    $insured->appendChild ( $dom->createElement ( 'InsuredIdNo', 'HO12345' ) );
    // 联系电话
    $insured->appendChild ( $dom->createElement ( 'HomePhoneNo', '15012345678' ) );
    // 电子邮件
    $insured->appendChild ( $dom->createElement ( 'EmailAddr', 'abc@a.com' ) );
    // 如果是保单持有人，非被保险人，IsInsuredFlag=0
    // 如果是保单持有人，且是被保险人，IsInsuredFlag=1
    // 如果不是保单持有人，只是被保险人，InInsuredFlag=2
    // 一个保单必须有一个且只有一个保单持有人，可以有多个被保险人
    $insured->appendChild ( $dom->createElement ( 'IsInsuredFlag', '0' ) );

    // XML を整形（改行・字下げ）して出力
    $dom->formatOutput = true;
    // 保存（上書き）

    $dom->save ( '../xml/nSell.xml' );

    return $dom->saveXML ();
}


function genCancellation() {

    // インスタンスの生成
    $dom = new DomDocument ( '1.0', 'UTF-8' );
    // prefs ノードを追加
    $xmlData = $dom->appendChild ( $dom->createElement ( 'XML_DATA' ) );

    $header = $xmlData->appendChild ( $dom->createElement ( 'Header' ) );
    // 要素ノードを追加してテキストを入れる
    // 版本，目前为1.0
    $header->appendChild ( $dom->createElement ( 'Version', '1.0' ) );

    // NSell表示新单购买,Cancellation表示取消，GenerateDoc表示获取pdf保单
    $header->appendChild ( $dom->createElement ( 'TransactionType', 'Cancellation' ) );
    // 合作伙伴系统中的唯一编号
    $header->appendChild ( $dom->createElement ( 'TransactionId', '2014033000001' ) );

    // ErrorCode=0，ErrorMessage=OK表示交易成功
    //$header->appendChild ( $dom->createElement ( 'ErrorCode', '0' ) );

    //$header->appendChild ( $dom->createElement ( 'ErrorMessage', 'OK' ) );

    $segment = $xmlData->appendChild ( $dom->createElement ( 'Segment' ) );
    $policyIn = $segment->appendChild ( $dom->createElement ( 'PolicyIn' ) );

    // 产品代码
    $policyIn->appendChild ( $dom->createElement ( 'PolicyNumber', 'AAA000001' ) );
    // 申请时间
    $policyIn->appendChild ( $dom->createElement ( 'TransactionApplDate', '2014-03-30 22:00:00' ) );

    // XML を整形（改行・字下げ）して出力
    $dom->formatOutput = true;
    // 保存（上書き）

    $dom->save ( '../xml/cancellation.xml' );

    return $dom->saveXML ();
}

function genGenerateDoc() {

    // インスタンスの生成
    $dom = new DomDocument ( '1.0', 'UTF-8' );
    // prefs ノードを追加
    $xmlData = $dom->appendChild ( $dom->createElement ( 'XML_DATA' ) );

    $header = $xmlData->appendChild ( $dom->createElement ( 'Header' ) );
    // 要素ノードを追加してテキストを入れる
    // 版本，目前为1.0
    $header->appendChild ( $dom->createElement ( 'Version', '1.0' ) );

    // NSell表示新单购买,Cancellation表示取消，GenerateDoc表示获取pdf保单
    $header->appendChild ( $dom->createElement ( 'TransactionType', 'GenerateDoc' ) );
    // 合作伙伴系统中的唯一编号
    $header->appendChild ( $dom->createElement ( 'TransactionId', '2014033000001' ) );

    $segment = $xmlData->appendChild ( $dom->createElement ( 'Segment' ) );
    $policyIn = $segment->appendChild ( $dom->createElement ( 'PolicyIn' ) );

    // 产品代码
    $policyIn->appendChild ( $dom->createElement ( 'PolicyNumber', 'AAA000001' ) );
    // 申请时间
    $policyIn->appendChild ( $dom->createElement ( 'TransactionApplDate', '2014-03-30 22:00:00' ) );

    // XML を整形（改行・字下げ）して出力
    $dom->formatOutput = false;
    // 保存（上書き）

    $dom->save ( '../xml/generateDoc.xml' );

    return $dom->saveXML ();
}

function genXml() {
    $outputStr = "<?xml version='1.0' encoding='UTF-8'?><XML_DATA><Header><Version>1.0</Version><TransactionType>GenerateDoc</TransactionType><TransactionId>2014033000001</TransactionId></Header><Segment><PolicyIn><PolicyNumber>AAA000001</PolicyNumber><TransactionApplDate>2014-03-30 22:00:00</TransactionApplDate></PolicyIn></Segment></XML_DATA>";
    return $outputStr;
}
?>