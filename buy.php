<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>我要下单</title>
	<script type="text/javascript" src="js/js_utils.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
</head>
<body>	
	<script>
	  $(document).ready(function(){
		  /*Input code here when page is ready*/
		  if($.cookie("nickname")==undefined){
			  alert("对不起，请登录后继续操作哦！");
			  location.href = "login.htm";
		  }
	  });	 
	</script>
	
	<form name="buyform" method="post" action="./action/savebuy.php"
		onSubmit="return chkBuyInput(this)">
		物品名称：<input type="text" name="itemname" id="itemname"><br/>
	        物品数量：<select name="itemnum" id="itemnum">
		<option value="">请选择数量：</option>
		<option value=1>1</option>
		<option value=2>2</option>
		<option value=3>3</option>
		<option value=4>4</option>
		<option value=5>5</option>
		<option value=6>6</option>
		<option value=7>7</option>
		<option value=8>8</option>
		<option value=9>9</option>
		<option value=0>其他</option>
	</select><br/>	
	补充说明：<textarea rows="3" cols="20" name="extrainfo" id="extrainfo"></textarea><br/>	
	我要下单： <input name="submit" type="submit" id="buy_btn" value="下单">
	</form>
</body>
</html>
