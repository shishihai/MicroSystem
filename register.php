<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>���û�ע��</title>
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
		�����ǳƣ�<input type="text" name="nickname"><br/>
	        �����Ա�<select name="gender">
		<option value="">��ѡ��</option>
		<option value="��">��</option>
		<option value="Ů">Ů</option>
	</select><br/>
	���ĵ绰��<input type="text" name="phone"><br/>
	�������䣺<input type="text" name="email"><br/>
	���ĵ�ַ��<textarea rows="3" cols="20" name="address"></textarea><br/>
	��������: <input type="password" name="password"><br/>
	ȷ������: <input type="password" name="repassword"><br/>
	�ύע�᣺ <input name="submit" type="submit" id="regsiter_btn" value="ע��">
	</form>
</body>
</html>
