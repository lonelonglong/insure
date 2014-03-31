<?php
require_once ('/config.php');

?>
<!DOCTYPE HTML>
<html>
<head>
<?php
require_once ('/head.php');
?>
<link rel="stylesheet" href="../css/finish.css">
<title>申请完成</title>
</head>
<body>
  <div class="content">
    <h1 class="h1">申请完成</h1>
    <form action="./finish.php" id="form" method="post">
      <div class="finish">
        <table class="table_finish">
          <tr>
            <td><label>申请成功！！！<br>XXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>XXXXXXXXXXXX
            </label></td>
          </tr>
        </table>
      </div>
      <div class="commit">
        <ul class="multicolumn">
          <li class="left"><input type="button" value="返回列表" onclick="javascript:location.href='./list.php';" /></li>
        </ul>
      </div>
    </form>
  </div>
</body>
</html>