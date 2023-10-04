<?php
$admin_id = "admin";
$admin_pw = "asdfqwer";

if($_GET['id'] == $admin_id)
{
	if($_GET['pw'] == $admin_pw)#ID, PW가 일치함
	{	
		print("로그인 성공");
	}
	else #아이디는 맞으나, 패스워드가 일치하지 않음
	{
		print("패스워드가 일치하지 않습니다.");
	}
}
else
{
	print("아이디가 일치하지 않습니다");
}
?>
