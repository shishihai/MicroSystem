<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>新用户注册</title>
	<script type="text/javascript" src="js/js_utils.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
</head>
<body>	
	<script>
	  document.onkeydown = function (e){
		if(!e){
			e = window.event;
			if((e.keyCode || e.which)==13){
				$("#regsiter_btn").click();
			}
		}
	  }	  
	</script>
	<form name="regform" method="post" action="./action/savereg.php"
		onSubmit="return chkRegisterInput(this)">
		您的昵称：<input type="text" name="nickname"><br/>
	        您的性别：<select name="gender">
		<option value="">请选择</option>
		<option value="男">男</option>
		<option value="女">女</option>
	</select><br/>
	您的电话：<input type="text" name="phone"><br/>
	您的邮箱：<input type="text" name="email"><br/>
	您的地址：<textarea rows="3" cols="20" name="address"></textarea><br/>
	您的密码: <input type="password" name="password"><br/>
	确认密码: <input type="password" name="repassword"><br/>
	提交注册： <input name="submit" type="submit" id="regsiter_btn" value="注册">
	</form>
</body>
</html>
