<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>�û���¼</title>
<script type="text/javascript" src="js/js_utils.js"></script>
<script type="text/javascript" src="js/js_lib.js"></script>
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

	   function SubmitLogin(sURL,callback){
			var sNickName = $("#nickname").val();
			var sPassword = $("#password").val();
			var arrSubmitData = {'nickname':sNickName,'password':sPassword};
			var ret = SubmitData(sURL,arrSubmitData);
			console.log(ret.iRetCode+" "+ret.sRetMsg);
			callback(ret);
	   } 

	   function CallbackLogin(ret){
		   if(0 == ret.iRetCode){
			   alert(ret.sRetMsg);
			   location.href = "home.php?uid="+ret.sRetExtraData;
		   }else{
			   alert(ret.sRetMsg);
			   location.href = "login.php?uid="+ret.sRetExtraData;
		   }
	   }	  
	</script>
	<form name="loginform" action="javascript:SubmitLogin('./action/login.php',CallbackLogin);"
		onSubmit="return CheckLoginInput(this)">
		��¼�ʺţ�<input type="text" name="nickname" id="nickname"><br/>
	        ��¼���룺<input type="password" name="password" id="password" onkeydown="pressEnter();"><br/>
	    <input type="submit" name="submit" value="��¼ϵͳ">
	</form>
</body>
</html>