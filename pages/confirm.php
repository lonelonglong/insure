<?php
require_once ('/config.php');

session_start ();

?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<title>确认投保信息</title>
</head>
<body>
	<div class="secret-cont">
		您填写的内容仅供本次订单使用，对于您的信息我们会严格保密。（<span class="red">*</span>为必填项）
	</div>
	<form method="post" name="form" action="./confirm.php">
		<div class="ins-tit">
			投保计划<small></small>
		</div>
		<table>
			<tbody>
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
					<td><input type="submit" name="next" value="下一步" /></td>
				</tr>
			</tbody>
		</table>

		<div class="ins-tit">
			填写我的信息<small></small>
		</div>

	</form>
</body>
</html>