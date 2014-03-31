<?php
require_once ('/config.php');

session_start ();

if ($sys_request_type == "POST") {
    if ($_POST ['processType'] == "1") {
        redirect_to ( "finish.php" );
    }
}

?>
<!DOCTYPE HTML>
<html>
<head>
<?php
require_once ('/head.php');
?>
<link rel="stylesheet" href="../css/confirm.css">
<title>确认投保信息</title>
</head>
<body>
  <div class="content">
    <h1 class="h1">
      您填写的内容仅供本次订单使用，对于您的信息我们会严格保密。（<span class="red">*</span>为必填项）
    </h1>
    <form action="./confirm.php" id="form" method="post">
      <input type="hidden" name="processType" value="1">
      <div class="confirm">
        <h1 class="title">
          投保计划<small></small>
        </h1>
        <table class="table_confirm">
          <tr>
            <th><label>*保险计划</label></th>
            <td><?php print $_SESSION['userId']?></td>
          </tr>
          <tr>
            <th><label>*保单起保日期</label></th>
            <td><?php print $_SESSION['userId']?></td>
          </tr>
          <tr>
            <th><label>*保单终止日期</label></th>
            <td></td>
          </tr>
          <tr>
            <th><label>保单起保日期</label></th>
            <td></td>
          </tr>
          <tr>
            <th><label>保单起保日期</label></th>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="commit">
        <ul class="multicolumn">
          <li class="left"><input type="button" value="返回填写页面" onclick="javascript:location.href='./input.php?jumpFrom=3';" /></li>
          <li class="right"><input type="button" value="申请" onclick="submitAction('form', './confirm.php')" /></li>
        </ul>
      </div>
    </form>
  </div>
</body>
</html>