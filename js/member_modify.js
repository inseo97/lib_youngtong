function check_input() {
    if (!document.member_form.pass.value) {
        alert("비밀번호를 입력하세요");
        document.member_form.pass.focus();
        return;
    }
    if (!document.member_form.pass_confirm.value) {
        alert("비밀번호 확인을 입력하세요");
        document.member_form.pass_confirm.focus();
        return;
    }
    if (!document.member_form.name.value) {
        alert("이름을 입력하세요");
        document.member_form.name.focus();
        return;
    }
    if (!document.member_form.email1.value) {
        alert("이메일 주소를 입력하세요");
        document.member_form.email1.focus();
        return;
    }
    if (!document.member_form.email2.value) {
        alert("이메일 주소를 입력하세요");
        document.member_form.email2.focus();
        return;
    }

    // 비밀번호와 비밀번호 확인이 일치하는지 검사
    if (document.member_form.pass.value !== document.member_form.pass_confirm.value) {
        alert("비밀번호가 일치하지 않습니다.");
        document.member_form.pass.focus();
        document.member_form.pass.select();
        return;
    }

    // 비밀번호가 일치하면 폼 제출
    document.member_form.submit();
}


function reset_form(){
    document.member_form.id.value="";
    document.member_form.pass.value="";
    document.member_form.pass_confirm.value="";
    document.member_form.name.value="";
    document.member_form.email1.value="";
    document.member_form.email2.value="";

    document.member_form.id.focus="";
    return;

}