<?php
echo '<input type="hidden" id="'.$id.'flag" >';
echo '<input class="';
echo $id.'" type="text" name="validate" value="" size=10 />';
echo '<img id="'.$id.'_img" class="vcode_img" title="点击刷新" src="vcode.php"  onclick="this.src=\'vcode.php?\'+Math.random();"></img>';
?>
<script>
    $(function() {
    	//预验证验证码
		$(".<?php echo $id;?>").keyup(function(){
			var yzmVal = $(this).val();
			if(yzmVal!=null&&yzmVal.length==4){
				if(validateCapt(yzmVal)){
					$(this).css('border','2px solid green');
					$("#<?php echo $id ;?>flag").val(0);
				}else{
					$(this).css("border","2px solid red");
					$("#<?php echo $id ;?>flag").val(1);
				}
			}else{
				$(this).css("border","");
			}
		});
    });
</script>
