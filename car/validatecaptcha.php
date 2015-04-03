<?php
session_start();

if(isset($_SESSION["codevalue"]) && $_SESSION["codevalue"] != ""){

	if(strtolower($_SESSION["codevalue"]) != strtolower($_POST["validate"])){

		//验证码错误时执行的代码
		die ("wrong code");
		//header("Location: 	book.html");
	}

}else{

	//验证码超时时执行的代码
	die ( "time out");
}

//$_SESSION["codevalue"] = "";//清空验证码SESSION，以防被刷

//unset($_SESSION["codevalue"]);

//通过验证后执行的代码
echo "pass";
?>