<?php
include 'common.php';
header ( 'Content-type: text/json' );
session_start ();
$result;
if (isset ( $_SESSION ["codevalue"] ) && $_SESSION ["codevalue"] != "") {
	
	if (strtolower ( $_SESSION ["codevalue"] ) != strtolower ( $_POST ["validate"] )) {
		// 验证码错误时执行的代码
		// header ( "Location: book.html" );
		$result ['result'] = 1;
	} else {
		/* Open a connection */
		$mysqli = new mysqli ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );
		
		/* check connection */
		if (mysqli_connect_errno ()) {
			printf ( "Connect failed: %s<br>", mysqli_connect_error () );
			exit ();
		}
		$mysqli->query ( "set names 'utf8'" );
		$mobile = $_POST ["mobile"];
		$carNo = '浙' . $_POST ["carNo"];
		
		// 检查手机号码和车牌号是否已经预约
		$sql = "select * from bookinfo where mobile = '$mobile' and carNo = '$carNo' and stauts = 0 and bookdate > curdate()";
		if ($mysqli->query ( $sql )->num_rows > 0) {
			$result ['result'] = 4;
			$result ['error'] = '该手机号码车牌号已经预约过！';
			goto end;
		}
		
		$bookDate = $_POST ["bookDate"];
		// $bookDate = date("Y-m-d H:i:s",strtotime($bookDate));
		$bookTime = $_POST ["bookTime"];
		
		$sql = "select dicvalue from dictionary where dickey = 'max_num_$bookTime'";
		$max_num = $mysqli->query ( $sql )->fetch_assoc ();
		$max_num = $max_num['dicvalue'];
		if($max_num == '0'){
			$sql = "select dicvalue from dictionary where dickey = 'max_num'";
			$max_num = $mysqli->query ( $sql )->fetch_assoc ();
			$max_num = $max_num['dicvalue'];
		}
		$result ['max_num'] = $max_num;
		//锁住表
		CommonUtils::lock($mysqli, 'bookinfo',2);
		$sql = "select * from bookinfo where bookDate = '$bookDate' and bookTime ='$bookTime'";
		$bookNum = $mysqli->query ( $sql )->num_rows;
		if ($bookNum >= $max_num) {
			$result ['result'] = 4;
			$result ['error'] = $bookDate . CommonUtils::getTime ( $bookTime ) . '已经预约满了，请选择其它时段！';
			CommonUtils::unlock($mysqli,'bookinfo');
			goto end;
		}
		
		$carShelf = $_POST ["carShelf"];
		$querypwd = mt_rand ( 100000, 999999 );
		$sql = "INSERT INTO bookinfo(mobile,querypwd,carNo,bookDate,bookTime,carShelf) VALUES";
		$sql .= "('$mobile','$querypwd','$carNo','$bookDate','$bookTime','$carShelf')";
		if ($mysqli->query ( $sql ) == 1) {
			$result ['result'] = 0;
			$result ['mobile'] = $mobile;
			$result ['password'] = $querypwd;
			$message = "【温岭车辆检测站】恭喜您预约成功！请妥善保存预约信息：车牌号浙" . $carNo . "，手机号码" . $mobile . "，查询密码" . $querypwd;
			$message .= "，预约时间" . $bookDate . CommonUtils::getTime ( $bookTime ) . "。";
			$smsstate = CommonUtils::sendsms ( $mobile, $message );
		} else {
			$result ['result'] = 3;
		}
		CommonUtils::unlock($mysqli,'bookinfo');
		end:
		$mysqli->close ();
	}
} else {
	// 验证码超时时执行的代码
	$result ['result'] = 2;
}
$_SESSION ["codevalue"] = ""; // 清空验证码SESSION，以防被刷
unset ( $_SESSION ["codevalue"] );
echo json_encode ( $result );
?>