<?php
function http_xyz($xml) {
    $url = 'https://china.axatrav.com/external/axa.action';
    $url_test = "http://uat.axatrav.com/external/axa.action";

    // POSTデータ
    $data = array (
            "agencyUserId" => "test",
            "messageText" => $xml,
            "sign" => "aaaa"
    );
    $data = http_build_query ( $data, "&" );

    // Request Header
    $header = array (
            "Content-Type: application/x-www-form-urlencoded",
            "Content-Length: " . strlen ( $data )
    );
    $header = implode ( "\r\n", $header );

    // context生成
    $context = array (
            "http" => array (
                    "method" => "POST",
                    "header" => $header,
                    "content" => $data
            )
    );
    // 送信、戻り値はレスポンスのデータ部
    $out = file_get_contents ( $url_test, false, stream_context_create ( $context ) );

    // レスポンスヘッダーを出力
    foreach ( $http_response_header as $header ) {
        //echo ($header . '<br/>');
    }
    //echo ('<br/>');
    // レスポンスデータ部をエスケープして出力
    echo (htmlspecialchars ( $out ));

    $xml = simplexml_load_string($out);
    $xml->saveXML ( '../xml/response.xml' );
}
?>