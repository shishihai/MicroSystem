<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>���û�ע��</title>
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
		�����ǳƣ�<input type="text" name="nickname" id="nickname"><p>(��ʹ��Ӣ���ַ�������ע���ǳ�)</p><br/>
	        �����Ա�<select name="gender" id="gender">
		<option value="">��ѡ��</option>
		<option value="��">��</option>
		<option value="Ů">Ů</option>
	</select><br/>
	���ĵ绰��<input type="text" name="phone" id="phone"><br/>
	�������䣺<input type="text" name="email" id="email"><br/>
	���ĵ�ַ��<textarea rows="3" cols="20" name="address" id="address"></textarea><br/>
	��������: <input type="password" name="password" id="password"><br/>
	ȷ������: <input type="password" name="repassword" id="repassword"><br/>
	�ύע�᣺ <input name="submit" type="submit" id="regsiter_btn" value="ע��">
	</form>
</body>
</html>
