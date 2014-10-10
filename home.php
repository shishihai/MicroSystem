<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>个人页面</title>
<script type="text/javascript" src="js/js_utils.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
</head>
<body>
<script type ="text/javascript">
    $(document).ready (function(){
        var arrURLParams = getURLParams ();
        $("#welcometext").html("欢迎"+arrURLParams[ "uid"]);
        $.cookie("nickname",arrURLParams[ "uid"]);
    });
</script>

<h2 id="welcometext"></h2>
<a href="buy.htm">我要下单</a></br>
<a href="history.php">查看订单</a></br>
</body>
</html>