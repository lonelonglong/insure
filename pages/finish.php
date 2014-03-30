<?php
require_once ('/config.php');

?>
<html>
<head>
<?php
require_once ('/head.php');
?>
<title>申请完成</title>
</head>
<body>
    <div class="content">
        <form action="./finish.php" id="form" method="post">
            <table>
                <tr>
                    <td><label>申请成功！！！</label></td>
                </tr>
                <tr>
                    <td><input type="button" value="返回列表" onclick="javascript:location.href='./list.php';" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>