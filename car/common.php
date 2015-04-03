<?php
class CommonUtils {
	// 您的用户名
	const usernmae = "380121536";
	// 您在短信网关的登录密码
	const password = "789789";
	// 产品编码
	const product = "12";
	static public function sendsms($telephone, $message) {
		$URL = "http://dx.10659com.com:83/ApiService.asmx/Send?account=";
		$URL .= self::usernmae . "&pwd=" . self::password;
		$URL .= "&mobile=" . $telephone . "&message=" . rawurlencode ( iconv ( "utf-8", "gb2312", $message ) );
		$URL .= "&product=" . self::product;
		$content = @file_get_contents ( $URL );
		return $content;
	}
	static public function balance() {
		$URL = "http://dx.10659com.com:83/ApiService.asmx/GetYuE?account=";
		$URL .= self::usernmae . "&pwd=" . self::password . "&product=" . self::product;
		$content = @file_get_contents ( $URL );
		return $content;
	}
	static public function getTime($bookTime) {
		switch ($bookTime) {
			case 1 :
				$bookTime = " 08:00~09:00";
				break;
			case 2 :
				$bookTime = " 09:00~10:00";
				break;
			case 3 :
				$bookTime = " 10:00~11:00";
				break;
			case 4 :
				$bookTime = " 11:00~12:00";
				break;
			case 5 :
				$bookTime = " 12:00~13:00";
				break;
			case 6 :
				$bookTime = " 13:00~14:00";
				break;
			case 7 :
				$bookTime = " 14:00~15:00";
				break;
			case 8 :
				$bookTime = " 15:00~16:00";
				break;
			case 9 :
				$bookTime = " 16:00~17:00";
				break;
		}
		return $bookTime;
	}
	
	/**
	 * 锁表
	 *
	 * @param string $table
	 *        	表名
	 * @param int $type
	 *        	读锁1还是写锁2
	 */
	static public function lock($mysqli, $table, $type = 1) {
		$type = ($type == 1) ? 'READ' : 'WRITE';
		$mysqli->query ( "LOCK TABLE '$table' $type" );
	}
	
	/**
	 * 解锁
	 */
	static public function unlock($mysqli) {
		$mysqli->query ( "UNLOCK TABLES" );
	}
}

/*
 * echo CommonUtils::getTime ( 1 ); echo "<br>"; echo CommonUtils::balance ();
 */
?>