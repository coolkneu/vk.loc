$(document).ready(function() {
						   
	$.validator.addMethod("validcb1", function(value){
		if ($("input:checked").length > 0) return true
		else return  false;
	},"");
	
	$("fieldset input").click(function(){$("fieldset label.error").remove()});
	
	$("#loginform").validate({
		rules: {
			login: {
				required: true,
				minlength: 2
				}, 
			password: "required",
			date: "required",
			email: {
				required: true,
				email: true
			},
			checkbox3:{validcb1:true},
			msg: "required"
		},
		messages:{
			login:{
				required: "поле не заполнено или заполнено не верно",
				minlength: "В поле должно быть миниму два символа",
			},
			msg: "���� �� ��������� ��� ��������� �� �����",
			password: "поле не заполнено или заполнено не верно",
			date: "поле не заполнено или заполнено не верно",
			checkbox3: "�������� ���� �� �������",
			email: "поле не заполнено или заполнено не верно"
		},
		errorPlacement: function(error, element) {
			if (element.attr("name") == "login") error.insertAfter($("input[name=login]"));
			if (element.attr("name") == "msg") error.insertAfter($("textarea[name=msg]"));
			if (element.attr("name") == "password") error.insertAfter($("input[name=password]"));
			if (element.attr("name") == "date") error.insertAfter($("input[name=date]"));
			if (element.attr("name") == "checkbox3") error.insertAfter($("fieldset label:last"));
			if (element.attr("name") == "email") error.insertAfter($("input[name=email]"));
		}	
	});
})