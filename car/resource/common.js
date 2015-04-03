/** depend on jquery* */

// window.onbeforeunload = onbeforeunload_handler;
var tipCss = {
	"color" : "red",
	"font-size" : "12px"
};
function checkId() {
	var carNoVal = $("#id").val();
	if (carNoVal == null || carNoVal == "") {
		$(".idTip").css(tipCss).html("预约编号不能为空");
		return false;
	} else if (!/^[0-9]{1,}$/.test(carNoVal)) {
		$(".idTip").css(tipCss).html("预约编号为数字");
		return false;
	} else {
		$(".idTip").html("");
		return true;
	}
}

function checkCarNo() {
	var carNoVal = $("#carNo").val();
	if (carNoVal == null || carNoVal == "") {
		$(".carNoTip").css(tipCss).html("车牌号码不能为空");
		return false;
	} else if (!/^[A-Z]{1}[a-zA-Z_0-9]{4,6}$/.test(carNoVal)) {
		$(".carNoTip").css(tipCss).html("车牌号码格式不正确[正确车牌如：浙A88888]");
		return false;
	} else {
		$(".carNoTip").html("");
		return true;
	}
}

function checkMobile() {
	var modbileVal = $("#mobile").val();
	if (modbileVal == null || modbileVal == "") {
		$(".mobileTip").html("手机号码不能为空").css(tipCss);
		return false;
	} else if (!/^0?(13|15|18)[0-9]{9}$/.test(modbileVal)) {
		$(".mobileTip").html("手机号码格式不正确").css(tipCss);
		return false;
	} else {
		$(".mobileTip").html("");
		return true;
	}
}

function checkBookDate() {
	var carNoVal = $("#bookDate").val();
	if (carNoVal == null || carNoVal == "") {
		$(".bookDateTip").css(tipCss).html("预约日期不能为空");
		return false;
	} else {
		$(".carNoTip").html("");
		return true;
	}
}

function checkCarShelf() {
	var carShelfVal = $("#carShelf").val();
	if (carShelfVal == null || carShelfVal == "") {
		$(".carShelfTip").html("车架号不能为空").css(tipCss);
		return false;
	} else if (carShelfVal.length != 6) {
		$(".carShelfTip").html("车架号格式不对，只需填写后六位").css(tipCss);
		return false;
	} else {
		$(".carShelfTip").html("");
		return true;
	}

}

// 检查验证码是否ok
function validateCapt(captchaVal) {
	var ret = false;
	var captchaId = captchaVal;
	$.ajax({
		type : "POST",
		async : false,
		url : "validatecaptcha.php?d=" + new Date() * 1,
		data : {
			"validate" : captchaId
		},
		success : function(msg) {
			if (msg == 'pass') {
				ret = true;
			}
		},
		error : function() {
			alert("系统出错！");
		}
	});
	return ret;
}

function checkCapt(tip, id) {
	var value = $("." + id).val();
	var flag = $("#" + id + "flag").val();
	tip = "." + tip;
	if (value == null || value == "" || flag == 1) {
		$(tip).html("请输入正确的验证码").css(tipCss);
		return false;
	} else {
		$(tip).html("");
		return true;
	}
}
