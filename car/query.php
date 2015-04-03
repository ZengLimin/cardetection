<?php
// header('Content-type: text/json');
/* Open a connection */
include 'common.php';
session_start ();
if(!empty($_POST["nocapt"])){ 
	goto begin;
}
if (isset ( $_SESSION ["codevalue"] ) && $_SESSION ["codevalue"] != "") {
	if (strtolower ( $_SESSION ["codevalue"] ) != strtolower ( $_POST ["validate"] )) {
		// 验证码错误时执行的代码
		// header ( "Location: book.html" );
		echo 1;
	} else {
		begin:
		$mysqli = new mysqli ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );
		
		/* check connection */
		if (mysqli_connect_errno ()) {
			printf ( "Connect failed: %s<br>", mysqli_connect_error () );
			exit ();
		}
		$modile = $_POST ["mobile"];
		$password = $_POST ["password"];
		$sql = "select * from bookinfo where mobile = '$modile' and querypwd = '$password'";
		$mysqli->query ( "set names 'utf8'" );
		$result = $mysqli->query ( $sql );
		$id = - 1;
		$carNO = '';
		if ($result) {
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc ();
				$id = $row ['id'];
				$carNO = $row ['carNo'];
				$bookDate = $row ['bookDate'];
				$stauts = $row ['stauts'];
				?>
<div style="width: 691px;">
	<table border="0" cellspacing="1" class="cj_Table">
		<tr>
			<TH>车牌号码：</TH>
			<td class="editor" id="selectVeh"><?php echo $row ['carNo']; ?></td>
		</tr>
		<tr>
			<TH>查询密码：</TH>
			<td class="editor" id="selectVeh"><font color="red"><?php echo $row ['querypwd']; ?></font></td>
		</tr>
		<tr>
			<TH>手机号码：</TH>
			<td class="editor" id="selectVeh"><?php echo $row ['mobile']; ?></td>
		</tr>
		<tr>
			<TH>预约时间：</TH>
			<td class="editor" id="selectVeh"><?php echo $bookDate.CommonUtils::getTime($row ['bookTime']); ?></td>
		</tr>
		<tr>
			<TH>车架号后6位：</TH>
			<td class="editor" id="selectVeh"><?php echo $row ['carShelf']; ?></td>
		</tr>
		<tr>
			<TH>预约状态：</TH>
			<td class="editor" id="selectVeh">
			<?php
				if ($stauts == 0) {
					echo '正常';
				} else if ($stauts == 1) {
					echo '<font color="red">您已经取消，请重新预约！</font>';
				} else {
					echo '<font color="red">已无效，请重新预约！</font>';
				}
				?>
		</td>
		</tr>
	</table>
<?php
				if ($stauts == 0) {
					echo '<div class="gNextline" style="width: 96%; margin: 0 auto; margin-bottom: 10px;">';
					echo '		<input type="button" value="取消预约" name="B3" class="btnNext" onclick="doSubmit()">';
					echo '		<input type="button" value="返&nbsp;&nbsp;&nbsp;&nbsp;回" name="B3" class="btnNext" onclick="doBack()">';
					echo '</div>';
					echo '<div class="clear"></div>';
				} else {
					echo '<div class="gNextline" style="width: 96%; margin: 0 auto; margin-bottom: 10px;">';
					echo '		<input type="button" value="返&nbsp;&nbsp;&nbsp;&nbsp;回" name="B3" class="btnNext" onclick="doBack()">';
					echo '</div>';
					echo '<div class="clear"></div>';
				}
				?>
			
</div>
<script language="javascript" type="text/javascript">
	function doSubmit() {
		if (confirm("确定取消车牌号：<?php echo $carNO; ?>的预约")) {
			var id = <?php echo $id; ?>;
			$.ajax({
				type : "POST",
				async : false,
				url : "cancel.php",
				data : {
					"id" : id
				},
				success : function(msg) {
					alert(msg);
					location.reload();
				},
				error : function() {
					alert("系统出错！");
				}
			});
		}
	}
	function doBack(){
		location.reload();
	}
</script>
<?php
			}
		}
		/* free result set */
		$mysqli->close ();
	}
} else {
	echo 1;
}
$_SESSION ["codevalue"] = ""; // 清空验证码SESSION，以防被刷
unset ( $_SESSION ["codevalue"] );
?>
