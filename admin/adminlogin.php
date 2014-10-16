<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>管理员登录</title>
<script type="text/javascript" src="../js/js_utils.js"></script>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
</head>
<body>
<script>
	  function pressEnter(){
		  $("#password").click();
	   }
	   
	   function CheckAdminLoginInput(form){
		   if(form.adminname.value==""){
		    	alert("请输入登录帐号！");
		    	form.nickname.focus();
		    	return false;
		    }
		    if(form.password.value==""){
		        alert("请输入登录密码！");
		        form.password.focus();
		        return false;
	    	}
		    return true;
	   }
	 
	</script>
<form name="loginform" method="post"
	action="adminloginaction.php"
	onSubmit="return CheckAdminLoginInput(this)">登录帐号：<input type="text"
	name="adminname" id="adminname"><br />
登录密码：<input type="password" name="password" id="password"
	onkeydown="pressEnter();"><br />
<input type="submit" name="submit" value="登录系统"></form>
</body>
</html>
