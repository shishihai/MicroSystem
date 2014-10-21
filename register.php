<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>新用户注册</title>
	<script type="text/javascript" src="js/js_utils.js"></script>
	<script type="text/javascript" src="js/js_lib.js"></script>
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
	  function SubmitRegister(sURL, callback){
			var sNickName = encodeURIComponent($("#nickname").val());
			var sGender = encodeURIComponent($("#gender").val());
			var sPhone = encodeURIComponent($("#phone").val());
			var sEmail = encodeURIComponent($("#email").val());
			var sAddress = encodeURIComponent($("#address").val());
			var sPassword = encodeURIComponent($("#password").val());
			var sRepassword = encodeURIComponent($("#repassword").val());
			
			var arrSubmitData = {'nickname':sNickName,
								'gender':sGender,
								'phone':sPhone,
								'email':sEmail,
								'address':sAddress,
								'password':sPassword,
								'repassword':sRepassword};
			var ret = SubmitData(sURL, arrSubmitData);
			callback(ret);
		  }
	  function CallbackRegister(ret){
		  if(0 == ret.iRetCode){
				alert(ret.sRetMsg);
				location.href = "login.php";
		  }else{
			  alert(ret.sRetMsg);
			  loaction.href = "register.php";
		  }
	  }	 
	   
	</script>
	<form name="regform" action="javascript:SubmitRegister('./action/savereg.php',CallbackRegister);"
		onSubmit="return chkRegisterInput(this)">
		您的昵称：<input type="text" name="nickname" id="nickname"><p>(请使用英文字符或数字注册昵称)</p><br/>
	        您的性别：<select name="gender" id="gender">
		<option value="">请选择</option>
		<option value="男">男</option>
		<option value="女">女</option>
	</select><br/>
	您的电话：<input type="text" name="phone" id="phone"><br/>
	您的邮箱：<input type="text" name="email" id="email"><br/>
	您的地址：<textarea rows="3" cols="20" name="address" id="address"></textarea><br/>
	您的密码: <input type="password" name="password" id="password"><br/>
	确认密码: <input type="password" name="repassword" id="repassword"><br/>
	提交注册： <input name="submit" type="submit" id="regsiter_btn" value="注册">
	</form>
</body>
</html>
