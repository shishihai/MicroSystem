/*Check form input*/
function chkRegisterInput(form){
	
	if(form.nickname.value==""){
		alert("请输入用户昵称！");
		form.nickname.focus();
		return false;
	}
	
	if(form.gender.value==""){
		alert("请选择用户性别！");
		form.gender.focus();
		return false;
	}
	
	if(form.phone.value==""){
		alert("请输入电话号码！");
		form.phone.focus();
		return false;
	}
	
	if(form.email.value==""){
		alert("请输入电子邮箱！");
		form.email.focus();
		return false;			
	}
	
	if(form.address.value==""){
		alert("请输入个人地址！");
		form.address.focus();
		return false;			
	}
	
	if(form.password.value==""){
		alert("请输入个人密码！");
		form.password.focus();
		return false;			
	}
	
	if(form.repassword.value==""){
		alert("请输入确认密码！");
		form.repassword.focus();
		return false;			
	}
	
	if(!checkPhone(form.phone.value)){
		alert("请输入正确的手机号码！");
		form.phone.focus();
		return false;
	}
	
	if(!checkEmail(form.email.value)){
		alert("请输入正确的电子邮箱！");
		form.email.focus();
		return false;
	}
	
	if(!checkPassword(form.password.value,form.repassword.value)){
		alert("您两次输入的密码不匹配，请重新输入！");
		document.getElementsByName("repassword").value="";
		form.repassword.focus();
		return false;
	}
	
	return true;
}

function CheckLoginInput(form){
	if(form.nickname.value==""){
    	alert("请输入登录帐号！");
    	form.nickname.focus();
    	return false;
    }
    if(form.password.value==""){
        alert("请输入登录密码！");
        form.password.focus();
        return false;
    }
    return true;
}

function CheckBuyInput(form){
	if(form.itemname.value==""){
    	alert("请输入登录帐号！");
    	form.nickname.focus();
    	return false;
    }
    if(form.itemnum.value==""){
        alert("请输入登录密码！");
        form.password.focus();
        return false;
    }
    return true;
}

/*Check Phone Number*/
function checkPhone(str){
	var re = /^1\d{10}$/;
	if(!re.test(str)){
		return false;
	}
	return true;
}
/*Check Email Address*/
function checkEmail(str){
	var re = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
	if(!re.test(str)){
		return false;		
	}
	return true;
}
/*Check password*/
function checkPassword(str1,str2){
	if(str1!=str2){
		return false;
	}
	return true;
}

/*Get URL Parameters*/
function getURLParams (){
	var arrURLParams = [];
    var sParam = document.location.search.substr (1).split('&');
    for(var i= 0;i<sParam.length ;i++){
        var temp=sParam[i].split ('=' );
        arrURLParams [temp[0]]=temp[1];
    }
    return arrURLParams;
}