<?php
require_once ('/config.php');

session_start ();

if ($sys_request_type == "POST") {
    if ($_POST ['processType'] == "1") {
        redirect_to ( "finish.php" );
    }
}

?>
<html>
<head>
<?php
require_once ('/head.php');
?>
<title>确认投保信息</title>
</head>
<body>
    <div class="content">
        <h1>
            您填写的内容仅供本次订单使用，对于您的信息我们会严格保密。（<span class="red">*</span>为必填项）
        </h1>
        <form action="./confirm.php" id="form" method="post">
            <input type="hidden" name="processType" value="1">
            <div class="ins-tit">
                投保计划<small></small>
            </div>
            <table>
                <tr>
                    <td><label>*保险计划</label><?php print $_SESSION['userId']?></td>
                </tr>
                <tr>
                    <td><label>*保单起保日期</label><?php print $_SESSION['userId']?></td>
                </tr>
                <tr>
                    <td><label>*保单终止日期</label></td>
                </tr>
                <tr>
                    <td><label>保单起保日期</label></td>
                </tr>
                <tr>
                    <td><label>保单起保日期</label></td>
                </tr>
                <tr>
                    <td><input type="button" value="返回填写页面" onclick="javascript:location.href='./input.php?jumpFrom=3';" /></td>
                    <td><input type="button" value="申请" onclick="submitAction('form', './confirm.php')" /></td>
                </tr>
            </table>

            <div class="ins-tit">
                填写我的信息<small></small>
            </div>

        </form>
    </div>
</body>
</html>