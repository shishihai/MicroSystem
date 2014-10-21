function SubmitData(sURL,arrSubmitData){
	var ret;
	$.ajax({
		url:sURL,
		async:false,
        type:"POST",
        data:arrSubmitData,
		dataType:"json",
		success:function(retinfo){
			ret = retinfo;
		}			
	});
	return ret;
}