<?php
require_once ('/config.php');

session_start ();

if ($sys_request_type == "POST") {
    if ($_POST ['jumpFrom'] == '2') {
        process ();
    }
} else {
    if (isset ( $_GET ['jumpFrom'] )) {
        switch ($_GET ['jumpFrom']) {
            case 1 :
                // clear all
                $_SESSION ['userId'] = "";
                $_SESSION ['userName'] = "";
                // session_destroy();
                break;
            case 2 :
                break;
            case 3 :
                break;
            default :
        }
    } else {
    }
}
function process() {
    $userId = $_POST ['userId'];
    $userName = $_POST ['userName'];

    $_SESSION ['userId'] = $userId;
    $_SESSION ['userName'] = $userName;

    redirect_to ( "confirm.php" );
}

?>
<html>
<head>
<?php
require_once ('/head.php');
?>
<title>填写投保信息</title>
</head>
<body>
    <div class="content">
        <h1>
            您填写的内容仅供本次订单使用，对于您的信息我们会严格保密。（<span class="red">*</span>为必填项）
        </h1>
        <form action="./input.php" id="form" method="post">
            <input type="hidden" name="jumpFrom" value="2">
            <div class="ins-tit">
                投保计划<small></small>
            </div>
            <table>
                <tr>
                    <td><label>*保险计划</label><input type="text" name="userId" value="" /></td>
                </tr>
                <tr>
                    <td><label>*保单起保日期</label><input type="text" name="userName" value="" /></td>
                </tr>
                <tr>
                    <td><label>*保单终止日期</label><input type="text" name="userName" value="" /></td>
                </tr>
                <tr>
                    <td><label>保单起保日期</label><input type="text" name="userName" value="" /></td>
                </tr>
                <tr>
                    <td><label>保单起保日期</label><input type="text" name="userName" value="" /></td>
                </tr>
                <tr>
                    <td><input type="button" value="返回前页面" onclick="javascript:location.href='./detail.php';" /></td>
                    <td><input type="button" value="确认" onclick="submitAction('form', './input.php')" /></td>
                    <td><input type="reset" value="重新填写" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>