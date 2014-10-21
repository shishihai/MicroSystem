<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>订单查找</title>
	<script type="text/javascript" src="../js/js_utils.js"></script>
		<script type="text/javascript" src="../js/js_lib.js"></script>
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.cookie.js"></script>
	<script language="javascript" type="text/javascript" src="../js/DatePicker/WdatePicker.js"></script>

</head>
<body>	
	<script>
	 $(document).ready (function(){
	        var arrURLParams = getURLParams ();	      
	        $.cookie("adminid",arrURLParams[ "adminid"]);
	    });
	  document.onkeydown = function (e){
		if(!e){
			e = window.event;
			if((e.keyCode || e.which)==13){
				$("#search_btn").click();
			}
		}
	  }	  
	  function chkSearchInput(form){
		  if(form.itemname.value==""&&form.nickname.value==""&&form.lastupdatetime.value==""){
			  alert("请输入搜索条件！");
		      form.itemname.focus();
			  return false;
		  }
		  return true;
	  }

	</script>
	<form name="searchform" method="post" action="./adminaction/searchaction.php"
		onSubmit="return chkSearchInput(this)">
		物品名称：<input type="text" name="itemname" id="itemname"><br/>
		用户账户：<input type="text" name="nickname" id="nickname"><br/>
		最后修改：<input type="text" name="lastupdatetime" id="lastupdatetime" class="Wdate" onClick="WdatePicker()"> <br/>
		搜索条件：<input type="radio"  name="condition" id="conditionand" value="and" checked/>and 
				<input type="radio" name="condition" id="conditionor" value="or" />or <br/>		
	        提交搜索： <input name="submit" type="submit" id="search_btn" value="搜索">
	</form>
</body>
</html>
