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
                    <td><input type="button" value="返回填写页面" onclick="javascript:location.href='./input.php?jumpFrom=3';" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>