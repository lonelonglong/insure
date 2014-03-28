<?php
require_once ('/config.php');

session_start ();

if (isset ( $_GET ['selectIdx'] )) {
    $_SESSION ['selectIdx'] = $_GET ['selectIdx'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php
require_once ('/head.php');
?>
<title>保险详细内容</title>
</head>
<body>
<div class="content">
<h1>众行天下-境外旅行保障计划1(经济款)</h1>
<div>
<ul>
<li>适用人群: 出境旅行的旅游人士</li>
<li>承保年龄: 1周岁-85周岁</li>
<li>保障期限: 1-77天或1年</li>
<li><a href="./list.php">返回列表</a></li>
<li><a href="./input.php?jumpFrom=1">我要申请</a></li>
</ul>

</div>
<h1>投保须知</h1>
<li>1、就医除外责任：除了北京市平谷区所有医院，请注意，在北京平谷区所有医院的就医均不给予理赔。</li>
<li>2、凡投保时年龄为1周岁-85周岁，身体健康、能正常工作或正常生活者均可作为被保险人。</li>
<li>3、本保险计划生效日可自由选择，最早为网上投保申请日次日零时生效。如保险期间为一年，每次承保旅程最长期限为183天。</li>
<li>4、被保险人因疾病、意外事故或其他条款约定的不可抗力无法按时回其日常居住地，本产品保险期间可自动延长，但最长不超过10天。</li>
<li>5、本保险计划提供24小时全球救援服务。如需旅行、医疗咨询或救援服务，可拨打24小时救援热线：86-10-8535-5053。</li>
<li>6、根据保监会规定，未满18周岁的未成年人的身故保险金额度最高不能超过人民币10万元。</li>
</div>
</body>
</html>