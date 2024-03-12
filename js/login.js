function check_input(){
	console.log("check_input")
	if (!document.login.id.value){
		alert("아이디를 입력하세요.");
		document.login.id.focus();
	}
	else if (!document.login.pw.value){
		alert("비밀번호를 입력하세요.");
		document.login.pw.focus();

	} else {
		document.login.submit()

	}


}

function check_register_input(){
	console.log("check_register_input")
	if (!document.member_register.id.value){
		alert("아이디를 입력하세요.");
		document.member_register.id.focus();
	}
	else if (!document.member_register.pass.value){
		alert("비밀번호를 입력하세요.");
		document.member_register.pass.focus();
	}
	else if (!document.member_register.pass_again.value){
		alert("비밀번호 재확인을 입력하세요.");
		document.member_register.pass_again.focus();
	}
	else if (!document.member_register.name.value){
		alert("이름을 입력하세요.");
		document.member_register.name.focus();
	}
	else if (!document.member_register.email1.value){
		alert("이메일을 입력하세요.");
		document.member_register.email1.focus();
	}
	else {
		document.member_register.submit()

	}
}



function pw_match(){
	if (document.member_register.pass.value != document.member_register.pass_again.value){
		alert("비밀번호가 일치하지 않습니다.");
		document.member_register.pass_again.value = "";
		document.member_register.pass_again.focus();
	}
	else{
		document.member_register.name.focus();
	}
}