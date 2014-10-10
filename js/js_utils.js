/*Check form input*/
function chkRegisterInput(form){
	
	if(form.nickname.value==""){
		alert("�������û��ǳƣ�");
		form.nickname.focus();
		return false;
	}
	
	if(form.gender.value==""){
		alert("��ѡ���û��Ա�");
		form.gender.focus();
		return false;
	}
	
	if(form.phone.value==""){
		alert("������绰���룡");
		form.phone.focus();
		return false;
	}
	
	if(form.email.value==""){
		alert("������������䣡");
		form.email.focus();
		return false;			
	}
	
	if(form.address.value==""){
		alert("��������˵�ַ��");
		form.address.focus();
		return false;			
	}
	
	if(form.password.value==""){
		alert("������������룡");
		form.password.focus();
		return false;			
	}
	
	if(form.repassword.value==""){
		alert("������ȷ�����룡");
		form.repassword.focus();
		return false;			
	}
	
	if(!checkPhone(form.phone.value)){
		alert("��������ȷ���ֻ����룡");
		form.phone.focus();
		return false;
	}
	
	if(!checkEmail(form.email.value)){
		alert("��������ȷ�ĵ������䣡");
		form.email.focus();
		return false;
	}
	
	if(!checkPassword(form.password.value,form.repassword.value)){
		alert("��������������벻ƥ�䣬���������룡");
		document.getElementsByName("repassword").value="";
		form.repassword.focus();
		return false;
	}
	
	return true;
}

function CheckLoginInput(form){
	if(form.nickname.value==""){
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

function CheckBuyInput(form){
	if(form.itemname.value==""){
    	alert("�������¼�ʺţ�");
    	form.nickname.focus();
    	return false;
    }
    if(form.itemnum.value==""){
        alert("�������¼���룡");
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