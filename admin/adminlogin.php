<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>����Ա��¼</title>
<script type="text/javascript" src="../js/js_utils.js"></script>
<script type="text/javascript" src="../js/js_lib.js"></script>
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
		    	alert("�������¼�ʺţ�");
		    	form.nickname.focus();
		    	return false;
		    }
		    if(form.password.value==""){
		        alert("�������¼���룡");
		        form.password.focus();
		        return false;
	    	}
		    return true;
	   }
	   function SubmitAdminLogin(sURL,callback){
		   var sAdminName = $("#adminname").val();
		   var sAdminPassword = $("#password").val();
		   var arrSubmitData = {'adminname':sAdminName,'password':sAdminPassword};
		   var ret = SubmitData(sURL,arrSubmitData);
		   callback(ret);
	   }
	   function CallbackAdminLogin(ret){
		   if(0 == ret.iRetCode){
				alert(ret.sRetMsg);
				location.href = "search.php?adminid="+ret.sRetExtraData;   
		   }else{
			   alert(ret.sRetMsg);
			   location.href = "adminlogin.php";
		   }
	   }
	 
	</script>
<form name="loginform" action="javascript:SubmitAdminLogin('./adminaction/adminloginaction.php',CallbackAdminLogin);"
	onSubmit="return CheckAdminLoginInput(this)">��¼�ʺţ�<input type="text"
	name="adminname" id="adminname"><br />
��¼���룺<input type="password" name="password" id="password"
	onkeydown="pressEnter();"><br />
<input type="submit" name="submit" value="��¼ϵͳ"></form>
</body>
</html>
