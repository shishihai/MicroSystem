<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>����ҳ��</title>
<script type="text/javascript" src="js/js_utils.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
</head>
<body>
<script type ="text/javascript">
    $(document).ready (function(){
        var arrURLParams = getURLParams ();
        $("#welcometext").html("��ӭ"+arrURLParams[ "uid"]);
        $.cookie("nickname",arrURLParams[ "uid"]);
    });
</script>

<h2 id="welcometext"></h2>
<a href="buy.htm">��Ҫ�µ�</a></br>
<a href="history.php">�鿴����</a></br>
</body>
</html>