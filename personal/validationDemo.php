<html>
<head>
<title>Enable Disable Submit Button Based on Validation</title>
<style>
#btn-submit{padding: 10px 20px;background: #555;border: 0;color: #FFF;display:inline-block;margin-top:20px;cursor: pointer;}
#btn-submit:disabled{padding: 10px 20px;background: #CCC;border: 0;color: #FFF;display:inline-block;margin-top:20px;cursor: no-drop;}
.validation-error {color:#FF0000;}
.input-control{padding:10px;}
.input-group{margin-top:10px;}
</style>
</head>
<body>
<h1>Enable Disable Submit Button Based on Validation</h1>
<form id="frm" method="post">
   <div class="input-group">Name <span class="name-validation validation-error"></span></div>
   <div>
        <input type="text" name="name" id="name" class="input-control" onblur="validate()" />
   </div>
   <div class="input-group">Email <span class="email-validation validation-error"></span></div>
   <div>
		<input type="text" name="email" id="email" class="input-control" onblur="validate()" />
   </div>
   <div>
        <button type="submit" name="btn-submit" id="btn-submit" disabled="disabled">Submit</button>
    </div>
</form>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
function validate() {
	
	var valid = true;
	valid = checkEmpty($("#name"));
	valid = valid && checkEmail($("#email"));
	
    $("#btn-submit").attr("disabled",true);
	if(valid) {
		$("#btn-submit").attr("disabled",false);
	}
}
function checkEmpty(obj) {
	var name = $(obj).attr("name");
	$("."+name+"-validation").html("");	
	$(obj).css("border","");
	if($(obj).val() == "") {
		$(obj).css("border","#FF0000 1px solid");
		$("."+name+"-validation").html("Required");
		return false;
		result = checkEmpty(obj);
	}
	return true;	
}
function checkEmail(obj) {
	var result = true;
	
	var name = $(obj).attr("name");
	$("."+name+"-validation").html("");	
	$(obj).css("border","");
	
	result = checkEmpty(obj);
	
	if(!result) {
		$(obj).css("border","#FF0000 1px solid");
		$("."+name+"-validation").html("Required");
		return false;
	}
	
	var email_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,3})+$/;
	result = email_regex.test($(obj).val());
	
	if(!result) {
		$(obj).css("border","#FF0000 1px solid");
		$("."+name+"-validation").html("Invalid");
		return false;
	}
	
	return result;	
}
</script>		
</body>
</html>