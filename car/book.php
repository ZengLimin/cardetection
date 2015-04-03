<!DOCTYPE html>
<!-- saved from url=(0042)http://1884812585.wezhan.cn/newsitem/10024 -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.ico">
<title>车检预约</title>
<meta name="keywords" content="车检预约">
 <meta name="description" content="车检预约">
    <meta name="keywords" content="车检预约">
<link rel="stylesheet" href="./resource/base.pc.css" type="text/css">
<link rel="stylesheet" href="./resource/9_zh-CN.css" type="text/css">
<script type="text/javascript" src="resource/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript"	src="./resource/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./resource/public.common.min.js"></script>
<script src="./resource/jquery.lazyload.min.js"></script>
<script src="./resource/underscore.js"></script>
<script type="text/javascript"	src="./resource/jquery-queryTable/jquery-queryTable.js"></script>
<script type="text/javascript" src="./resource/jquery.slider.js"></script>
<link type="text/css" href="./resource/jquery-ui-1.8.17.custom.css"	rel="stylesheet" />
<link type="text/css" href="./resource/jquery-ui-timepicker-addon.css"	rel="stylesheet" />
<script type="text/javascript"	src="./resource/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript"	src="./resource/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript"	src="./resource/jquery-ui-timepicker-zh-CN.js"></script>



</head>
<body>
	<script type="text/javascript">$(function(){ var $templateHeader=$('#flowsmartView_1_Area_0');if($templateHeader.length>0){ $templateHeader.parent().hide();} var $templateFooter=$('#flowsmartView_1_Area_1');if($templateFooter.length>0){ $templateFooter.parent().hide();}});</script>
	<div id="view_layout_1_14637" class="mainSamrtView yibuSmartViewMargin">
		<div class="yibuFrameContent layout_Block3_Item0"	style="width: 100%; border-style: none;">

<style type="text/css">
/* page layout */
.page_wrap {
	margin: 0 auto;
	padding: 0;
}

.page_header {
	clear: both;
}

.page_main {
	clear: both;
	margin-top: 0px;
}

.page_main .page_sidebar {
	float: left;
}

.page_main .page_container {
	float: right;
}

.page_footer {
	clear: both;
	margin-top: 0px;
	height: 100px;
}
</style>
	<!--page_wrap-->
	<div class="page_wrap" style="width: 100%">
	<?php $page = 'book'; include 'resource/header.php'; ?>
	<!--page_main-->
	<div class="page_main f_clearfix" style="width: 1420px; margin-left: auto; margin-right: auto;">
		<?php include 'resource/left.php'; ?>
		<!--page_container-->
	<div id="yibuLayout_container" class="page_container f_clearfix yibuTemplateBody"
						style="width: 941px; background-color:; background-image: url(resource/0062308_text_03_1420.png); background-repeat:;">
						<div id="view_newsinfo_1_9"
							class="mainSamrtView yibuSmartViewMargin" style="height: 508px;">
							<div class="yibuFrameContent newsinfo_NewsStyle1_Item0"
								style="width: 100%; border-style: none;">
								<!--page_wrap-->
								<div class="page_wrap ibody">
									<!--news_view_wrap-->
									<div class="news_view_wrap bookinfo">
									<!--
										<div class="gNextline">
											<form action="query.php" id="book_query" method="post">
												<label>手机号码：</label><input id="q_mobile" class="input_cj"
													type="text" name="mobile" placeholder="预约时填写的手机号码" /> <label
													style="margin-left: 10px">查询密码：</label><input id="password"
													class="input_cj" type="password" name="password"
													placeholder="预约成功后发送到您手机" />
												<button type="button" onclick="doQuery()" class="btnNext"
													style="margin-left: 10px">预约查询</button>
											</form>
										</div>
										<br>
										<hr>
										<br>
										-->
										<!--news_view_header-->
										<div class="news_view_header">
											<h1 class="news_view_title">车检预约</h1>
											<div class="news_view_infobar">请输入预约信息</div>
										</div>
										<!--/news_view_header-->
										<!--news_view_main-->
										<div class="news_view_main">
											<form id="book_form" action="check.php" method="post">
												<table border="0" cellspacing="1" class="cj_Table">
													<tr>
														<TH><font color="red">*</font>车牌号码：</TH>
														<td class="editor" id="selectVeh">浙<input
															placeholder="J888888" name="carNo" class="input_cj"
															id="carNo" type="text" style="width: 125px;" />&nbsp;&nbsp;<span
															class="carNoTip"></span></td>
													</tr>
													<tr id="telephone">
														<TH><font color="red">*</font>手机号码：</TH>
														<td class="editor" id="mobile_td"><input id="mobile"
															name="mobile" class="input_cj" style="width: 139px;"
															type="text" />&nbsp; &nbsp;<span class="mobileTip"></span></td>
													</tr>
													<tr>
														<TH><font color="red">*</font>预约日期：</TH>
														<td class="editor"><input name="bookDate"
															class="input_cj ui_timepicker" id="bookDate" type="text"
															style="width: 139px;" />&nbsp; &nbsp;<span
															class="bookDateTip"></span></td>
													</tr>
													<tr>
														<TH><font color="red">*</font>选择时间：</TH>
														<td class="editor"><select name="bookTime" id="bookTime"
															style="width: 139px; height: 25px;">
																<option value="1" selected="selected">08:00~09:00</option>
																<option value="2">09:00~10:00</option>
																<option value="3">10:00~11:00</option>
																<option value="4">11:00~12:00</option>
																<option value="5">12:00~13:00</option>
																<option value="6">13:00~14:00</option>
																<option value="7">14:00~15:00</option>
																<option value="8">15:00~16:00</option>
																<option value="9">16:00~17:00</option>
														</select>&nbsp; &nbsp;<span class="wtlshTip"></span></td>
													</tr>
													<tr>
														<TH width="320"><font color="red">*</font>车架号后6位：</TH>
														<td class="editor"><input name="carShelf" id="carShelf" 
															type="text" class="input_cj" style="width: 139px;" />&nbsp;
															&nbsp;<span class="carShelfTip"></span></td>
													</tr>
													<tr>
														<TH><font color="red">*</font><LABEL for=captchaId>验证码：</LABEL></TH>
														<td class="editor">
															 <?php $id = 'bookcaptcha'; include 'captcha.php'; ?>
															 <span class="validatecodeTip"></span>
														 </td>
													</tr>
												</table>
											<div style="height: 40px;text-align: center;margin-top: -20px">
											<span class="messageTip" style="color: red;font-size: 14px;"></span>
											</div>
											</form>
											<div class="gNextline"
												style="width: 96%; margin: 0 auto; margin-bottom: 10px;">
												<input type="button" value="重&nbsp;&nbsp;&nbsp;&nbsp;置"
													name="B3" class="btnNext" onclick="doReset()"> <input
													type="button" value="预&nbsp;&nbsp;&nbsp;&nbsp;约" name="B3"
													class="btnNext" onclick="doSubmit()">
											</div>
										</div>
										<!--/news_view_main-->
									</div>
									<!--/news_view_wrap-->
									<script>
	$(function() {
		//车牌号码最多输入六位、自动转大写
		$("#carNo").keyup(function(){
			var hphmVal = $("#carNo").val();
			if(hphmVal!=null&&hphmVal!=""){
				$("#carNo").val(hphmVal.toUpperCase());
			}
			if(hphmVal.length>7){
				$("#carNo").val(hphmVal.substr(0,7));
			}
		});
		
		$("#carNo").blur(function() {
			checkCarNo();
		});		
		$("#mobile").blur(function() {
			checkMobile();
		});
		$("#carShelf").blur(function() {
			checkCarShelf();
		});
		
		    var curr = <?php echo time()*1000; ?>;
			var day = 24 * 60 * 60 * 1000;
			var n = curr + 1 * day;
			//alert(curr + "" + new Date().getTime());
			var minDate = new Date(n);
			n = minDate.getTime() + 6 * day;
			var maxDate = new Date(n);
			$(".ui_timepicker").datetimepicker({
	            timeFormat: '',
	            defaultValue:minDate,
	            minDate: minDate,
	        	maxDate: maxDate,
	            showHour:false,
	            showMinute:false,
	            showSecond:false
	        })
	})
	function doSubmit() {
		if (checkCarNo() 
				&& checkMobile()
				&&checkBookDate() 
				&& checkCarShelf() 
				&& checkCapt('validatecodeTip','bookcaptcha')) {
			$.ajax({
				type : "POST",
				async : false,
				url : "register.php?d=" + new Date()*1,
				data : $("#book_form").serialize(),
				success : function(msg) {
					if(msg.result == 0){
					alert("恭喜您预约成功!");
					//alert(msg.smsstate);
					//alert(msg.msg);
					$("#q_mobile").val(msg.mobile);
					$("#password").val(msg.password);
					doQuery(1);
					return;
					}else if (msg.result == 1){
						$('.messageTip').html("注册码输入不正确！");
					}else if (msg.result == 2){
						$('.messageTip').html("注册码已过期！");
					}else{
						$('.messageTip').html(msg.error);
					}
					$("#bookcaptcha_img").attr("src", 'vcode.php');
					$("#bookcaptchaflag").val(1);
				},
				error: function() {  
					$('.messageTip').html("系统出错！");
			    }
			});
		}
	}
	function doReset(){
		$("span[class$='Tip']").html("");
		$("#book_form")[0].reset();
	}

</script>
								</div>
								<!--/page_wrap-->


							</div>
						</div>

					</div>
					<!--/page_container-->

				</div>
				<!--/page_main-->

	<?php include 'resource/footer.php'; ?>
</div>
		</div>
	</div>
</body>
</html>