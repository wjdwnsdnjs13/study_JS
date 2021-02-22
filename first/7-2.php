<!doctype html>
<html>
<head>
  <title>JS_login</title>
  <meta charset="utf-8">
</head>
<body>
	<?php
	$password = $_GET["password"];
	if($password == "1111"){
		echo "로그인 완료!";
	} else {
		echo "로그인 실패.";
	}
	?>
</body>
</html>
