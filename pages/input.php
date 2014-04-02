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
<!DOCTYPE HTML>
<html>
<head>
<?php
require_once ('/head.php');
?>
<link rel="stylesheet" href="../css/input.css">
<title>填写投保信息</title>
</head>
<body>
  <div class="content">
    <h1 class="h1">
      您填写的内容仅供本次订单使用，对于您的信息我们会严格保密。（<span class="red">*</span>为必填项）
    </h1>
    <form action="./input.php" id="form" method="post">
      <input type="hidden" name="jumpFrom" value="2">
      <div class="plan">
        <h1 class="title">
          投保计划<small></small>
        </h1>
        <table class="table_plan">
          <tr>
            <th><label>*保险计划</label></th>
            <td><input type="text" name="userId" value="" /></td>
          </tr>
          <tr>
            <th><label>*保单起保日期</label></th>
            <td><input type="text" name="userName" value="" /></td>
          </tr>
          <tr>
            <th><label>*保单终止日期</label></th>
            <td><input type="text" name="userName" value="" /></td>
          </tr>
          <tr>
            <th><label>保单起保日期</label></th>
            <td><input type="text" name="userName" value="" /></td>
          </tr>
          <tr>
            <th><label>保单起保日期</label></th>
            <td><input type="text" name="userName" value="" /></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="commit">
        <ul class="multicolumn">
          <li class="left"><input type="button" value="返回前页面a" onclick="javascript:location.href='./detail.php';" /></li>
          <li class="middle"><input type="button" value="确认" onclick="submitAction('form', './input.php')" /></li>
          <li class="right"><input type="reset" value="重新填写" /></li>
        </ul>
      </div>
    </form>
  </div>
</body>
</html>