<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>用户登录</title>
<script type="text/javascript" src="js/js_utils.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
</head>
<body>
	<script>
	  $(document).ready(function(){
		  /*Input code here when page is ready*/
			 var arrURLParams = getURLParams ();
			 if(arrURLParams['uid']==undefined){
				 $("#nickname").focus();
			 }else{
				 $("#nickname").val(arrURLParams['uid']);
		         $("#password").focus();
			 }
	  });
	  function pressEnter(){
		  $("#password").click();
	   }
	 
	</script>
	<form name="loginform" method="post" action="./action/login.php"
		onSubmit="return CheckLoginInput(this)">
		登录帐号：<input type="text" name="nickname" id="nickname"><br/>
	        登录密码：<input type="password" name="password" id="password" onkeydown="pressEnter();"><br/>
	    <input type="submit" name="submit" value="登录系统">
	</form>
</body>
</html>