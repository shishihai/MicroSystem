<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>�û���¼</title>
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
		��¼�ʺţ�<input type="text" name="nickname" id="nickname"><br/>
	        ��¼���룺<input type="password" name="password" id="password" onkeydown="pressEnter();"><br/>
	    <input type="submit" name="submit" value="��¼ϵͳ">
	</form>
</body>
</html>