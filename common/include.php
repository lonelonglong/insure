<?php
define ( 'INSURE_CMN', str_replace ( "\\", "/", dirname ( __FILE__ ) ) );
define ( 'INSURE_ROOT', str_replace ( "\\", "/", substr_replace ( INSURE_CMN, 0, - 7 ) ) );
define ( 'INSURE_PAGES', INSURE_ROOT . "/pages" );
define ( 'INSURE_XML', INSURE_ROOT . "/xml" );

$sys_request_type = isset ( $_SERVER ['REQUEST_METHOD'] ) ? $_SERVER ['REQUEST_METHOD'] : '';

require_once (INSURE_CMN . '/check.php');
require_once (INSURE_CMN . '/xml.php');
require_once (INSURE_CMN . '/http.php');

?>