<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>��Ҫ�µ�</title>
	<script type="text/javascript" src="js/js_utils.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
</head>
<body>	
	<script>
	  $(document).ready(function(){
		  /*Input code here when page is ready*/
		  if($.cookie("nickname")==undefined){
			  alert("�Բ������¼���������Ŷ��");
			  location.href = "login.htm";
		  }
	  });	 
	</script>
	
	<form name="buyform" method="post" action="./action/savebuy.php"
		onSubmit="return chkBuyInput(this)">
		��Ʒ���ƣ�<input type="text" name="itemname" id="itemname"><br/>
	        ��Ʒ������<select name="itemnum" id="itemnum">
		<option value="">��ѡ��������</option>
		<option value=1>1</option>
		<option value=2>2</option>
		<option value=3>3</option>
		<option value=4>4</option>
		<option value=5>5</option>
		<option value=6>6</option>
		<option value=7>7</option>
		<option value=8>8</option>
		<option value=9>9</option>
		<option value=0>����</option>
	</select><br/>	
	����˵����<textarea rows="3" cols="20" name="extrainfo" id="extrainfo"></textarea><br/>	
	��Ҫ�µ��� <input name="submit" type="submit" id="buy_btn" value="�µ�">
	</form>
</body>
</html>
