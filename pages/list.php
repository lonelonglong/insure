<?php
require_once ('/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<?php
require_once ('/head.php');

// http_xyz();
?>
<title>保险项目列表</title>
</head>
<body>
    <div class="content">
        <h1></h1>
        <div>
            <ul>
                <li class="detail">
                    <div class="left">众行天下-境外旅行保障计划1(经济款)</div>
                    <div>承保年龄： 1周岁-85周岁 保障期限： 1-77天或1年</div>
                    <div>
                        <li>意外伤害 30万元</li>
                        <li>公共交通加倍给付 10万元</li>
                        <li>自驾车保障 10万元</li>
                        <li>医疗费用 30万元</li>
                    </div>
                    <div>适用人群： 出境旅行的旅游人士</div>
                    <div> 产品特色： 旅行期间意外医疗、个人财物、家财与宠物等完全保障。更多有趣保障，等你来发现。 </div>
                    <div class="right">
                        <a href="./detail.php?selectIdx=0001">查看详细</a>
                    </div>
                </li>
                <li class="detail">
                    <div class="left">新一站“众享蜜月”境外旅游计划</div>
                    <div class="right">
                        <a href="./detail.php?selectIdx=0002">查看详细</a>
                    </div>
                </li>
                <li class="detail">
                    <div class="left">新一站“自驾游”保障精英计划</div>
                    <div class="right">
                        <a href="./detail.php?selectIdx=0003">查看详细</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>