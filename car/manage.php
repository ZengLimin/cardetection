<!DOCTYPE html>
<html lang="zh">
<head>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" type="text/css"
	href="resource/css/jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" href="resource/css/ui.jqgrid.css" />
<script src="resource/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="resource/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="resource/js/grid.locale-cn.js" type="text/javascript"></script>
<script src="resource/js/jquery.jqGrid.src.js" type="text/javascript"></script>
<script src="resource/js/grid.setcolumns.js" type="text/javascript"></script>
<meta charset="utf-8" />
<title>后台管理页面</title>
</head>
<style type="text/css">
body{font-size:12px;}
</style>
<body>
	<div style="width: 800px; margin-left: auto; margin-right: auto;">
	<div style="top: 20px;bottom: 20px;height: 30px;">
		<a href="index.php">首页</a>
	<?php
	if (empty ( $_POST ['pwd'] ) || $_POST ['pwd'] != 'admin007') {
		?>
		</div>
	   <div
			style="width: 400px; margin-left: auto; margin-right: auto; margin-top: 200px">
			<h2>请输入管理员密码</h2>
			<form action='manage.php' method="post">
				<label>密码:</label> <input name='pwd' type="password"> <span
					class="messageTip" style="color: red; font-size: 14px;">
					<?php if(empty ( $_POST ['pwd'])){ echo '输入密码错误！';} ?>
					</span>
				<button type="button" onclick='doSubmit()'>登录</button>
			</form>
		</div>
	<?php
	} else {
		?>
			<div id="dialog" title="添加新闻" style="display: none;font-size: 12px;" dis>
			  <form action="" id="addnews_form" method="post">
			    <input name='id' type='hidden'>
			  	<label>标题：</label><input type="text" name="title" style="width: 500px"><p>
			  	<label style="float: top">正文：</label><textarea placeholder="添加正文时如果要分段请用&lt;p&gt;分割，例如：...&lt;p&gt;...&lt;p&gt;...&lt;p&gt;..." type="text" name="content" style="vertical-align: top;width: 500px;height: 250px;"></textarea>
			  	<div style="text-align: center; height: 10px;">
			  	<p><span class="messageTip" style="color: red;font-size: 14px;"></span>
			  	</div><p>
			  	<div style="text-align: center;t">
			  	<button type="reset" style="width: 80px;">重置</button>
			  	<button type="button" onclick="doAddNews()" style="width: 80px">提交</button>
			  	</div>
			  </form>
			</div>
	    </div>
		<table id="bookinfo"></table>
		<div id="pager"></div>
		<p>
		<div id="accordion" style="width:800px;font-size: 12px">  
		<div>  
			<h3><a href="#">修改参数</a></h3>  
		    <div>
	<?php
		$con = new mysqli ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );
		$con->query ( "set names 'utf8'" );
		$result = $con->query ( "select * from dictionary" );
		while ( $row = $result->fetch_assoc () ) {
			?>
			<div>
			<table>
				<tr>
					<th width="250px" align="right"><?php echo $row['mark'];?>:</th>
					<td><input class="update_input" name='<?php echo $row['dickey'];?>' type='text'
						style="width: 80px" value='<?php echo $row['dicvalue'];?>'></input></td>
					<td><button type="button"
							onclick='doUpdate(<?php echo $row['id'];?>,"<?php echo $row['dickey'];?>")'>修改</button></td>
					<td><span class="<?php echo $row['id'];?>errorTip"
						style="color: red;"></span></td>
					<td>更新时间：<?php echo $row['updateDate'];?></td>
				</tr>
			</table>
		</div>
			<?php
		}
		?>
		</div>
		</div>  
		<div>  
		<h3><a href="#">更新新闻</a></h3>  
		<div>
		<div style="width: 100%;text-align: center;">
			<button onclick="addNews()">添加新闻</button>
		</div>
		<hr>	
		<?php 
		$sql = "select * from news order BY id desc,createDate";
		$con->query ( "set names 'utf8'" );
		$result = $con->query ( $sql );
			while ( $row = $result->fetch_assoc () ) {
			?>
			<div>
			<table>
				<tr>
					<td>
					<button class="button<?php echo $row['Id'];?>" type="button" onclick="doDelete(<?php echo $row['Id'];?>)">删除</button>
					<button class="button<?php echo $row['Id'];?>" type="button" onclick="doModify(<?php echo $row['Id'];?>)">修改</button>
					</td>
					<td><span class="<?php echo $row['Id'];?>delErrorTip"
						style="color: red; font-size: 14px;"></span></td>
					<td>[<?php echo $row['createDate'];?>]</td>
					<td width="250px" align="left">标题：<?php echo $row['title'];?></td>
				</tr>
			</table>
		  </div>
			<?php
			}
			$con->close ();	
		}
		?>
		</div>  
			</div>  
	</div> 
	
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function($) {

			$("#accordion").accordion({  
				header:"h3",    //头信息 h3 必须是h3 页面中div中是什么 这里必须是什么  
				event:"click",  //面板展开的事件效果 默认是click效果  
				active:2, //默认展开的面板 从0开始 默认值0  
				collapsible: true,
				animated:"bounceslide", //面板展开的动画效果  
				autoHeight:true, //面板的高度 是否是自动 增高的  
				fillSpace:true
				  
				}).sortable({ //排序  
				axis:"y", //只能在y轴上拖拽排序 x轴 x,y默认 x,y  
				handle:"h3",    //只能拖拽h3  
				/*  stop:function (event,ui){   //stop事件 匿名函数 event 浏览器自带的事件处理对象 ui操作控件对象  
				//ui item help等  
				ui.item.children("h3").triggerHandler("focusout");  
				}*/  
				  
				});  
				  
				//通过绑定的操作方式 写事件处理  
				$("#accordion").bind("sortstop",function (event,ui){  
				  
				//alert("这种方式也可以");  
				});  


			
			$("input[name='pwd']").focus(); 
			$('.update_input').change(function(){
				$("span[class$='errorTip']").html("");
			});
			
			jQuery('#bookinfo').jqGrid({ 
			    caption: '预约信息', 
			       url:'service.php', 
			       datatype: "json", 
			       colNames:['编号','电话号码','车牌号码','车架号','检测日期','检测时段','预约日期'], 
			       colModel:[ 
			           {name:'id',index:'id', width:40,align:'center',search:false}, 
			          // {name:'querypwd',index:'querypwd', width:40,align:'center'}, 
			           {name:'mobile',index:'mobile', width:80,align:'center',searchoptions:{sopt:['in'],searchtitle:'请输入手机号码回车'}}, 
			           {name:'carNo',index:'carNo', width:40, searchoptions:{sopt:['in'],searchtitle:'请输入车牌号'}}, 
			           {name:'carShelf',index:'carShelf', width:40,search:false},
			           {name:'bookDate',index:'bookDate', width:40,align:'center',sortable:false,search:false,hidden:true}, 
			           {name:'bookTime',index:'bookTime', width:80,align:'center',sortable:false,formatter:formatTime,search:false},
			           {name:'createDate',index:'createDate', width:80,align:'center',search:false}
			       ], 
			       rowNum:10, 
			       rowList:[10,20,30], 
			       pager: '#pager', 
			       sortname: 'id', 
			    autowidth: true, 
			    height:240, 
			    width:800,
			    viewrecords: true, 
			    resettitle:'清空',
			    //multiselect: true, 
			    multiselectWidth: 25, 
			    multipleSearch:true,
			    sortable:true, 
			    multikey : "ctrlKey",
			    sortorder: "asc" 
			 }); 
			jQuery("#bookinfo").jqGrid('navGrid','#pager',{del:false,add:false,edit:false});
			//jQuery("#bookinfo").jqGrid('filterToolbar',{searchOperators : true});
		});
		function doUpdate(id,name){
			var tip = '.' + id + 'errorTip';
			var value = $("input[name='"+name+"']").val();
			if(value){
			$.ajax({
				type : "POST",
				async : false,
				url : "update.php",
				data : {id:id,
						value:$("input[name='"+name+"']").val()
					},
				success : function(msg) {
					if(msg==0){
						$(tip).html('修改成功');
					}else{
						$(tip).html('修改失败');
					}
				},
				error: function() {  
					$(tip).html("系统出错");
			    }
			});
		   }else{
			   $(tip).html("值不能为空");
				}
		};

		function doDelete(id){
			var tip = '.' + id + 'delErrorTip';
			$.ajax({
				type : "POST",
				async : false,
				url : "delnews.php",
				data : {id:id
					},
				success : function(msg) {
					if(msg==0){
						$(tip).html('删除成功');
						$('.button'  + id).attr('disabled',"true"); 
					}else{
						$(tip).html('删除失败');
					}
				},
				error: function() {  
					$(tip).html("系统出错");
			    }
			});
		};

		function doModify(id){
			$('.messageTip').html('');
			var tip = '.' + id + 'delErrorTip';
			$.ajax({
				type : "POST",
				async : true,
				url : "querynews.php",
				data : {id:id
					},
				success : function(msg) {
					$("input[name='title']").val(msg.title);
					$("input[name='id']").val(msg.id);
					$("textarea[name='content']").val(msg.content);
					$( "#dialog" ).dialog({
						title:'修改新闻',
						width:600,
						height: 400,
						fontSize:12
					});
				},
				error: function() {  
					$(tip).html("系统出错");
			    }
			});
		};
		
		function doSubmit(){
			var pwd = $('input').val();
			if(pwd){
				$('from').submit();
			}else{
				$('.messageTip').html('请输入密码！');
			}
		};

		function formatTime(c,o,r){
			switch (c) {
			case '1' :
				c = " 08:00~09:00";
				break;
			case '2' :
				c = "09:00~10:00";
				break;
			case '3' :
				c = "10:00~11:00";
				break;
			case '4' :
				c = "11:00~12:00";
				break;
			case '5' :
				c = "12:00~13:00";
				break;
			case '6' :
				c = "13:00~14:00";
				break;
			case '7' :
				c = "14:00~15:00";
				break;
			case '8' :
				c = "15:00~16:00";
				break;
			case '9' :
				c = "16:00~17:00";
				break;
			}
			return r[4] + " " +c;
		};

		function addNews(){
			$('.messageTip').html('');
			$("#addnews_form")[0].reset();
			$( "#dialog" ).dialog({
					title:'添加新闻',
					width:600,
					height: 400
				});
			}
		function doAddNews(){
			var title = $("input[name='title']").val();
			var id = $("input[name='id']").val();
			var content = $("textarea[name='content']").val();
			if (title == null || title == "") {
				$('.messageTip').html('新闻标题不能为空');
				$("input[name='title']").focus();
				return;
			}
			if (content == null || content == "") {
				$('.messageTip').html('新闻内容不能为空');
				$("textarea[name='content']").focus();
				return;
			}
			$.ajax({
				type : "POST",
				async : false,
				url : "addnews.php",
				data : {content:content,
						title:title,
						id:id
					},
				success : function(msg) {
					if(msg == 0){
						if(confirm("添加新闻成功，是否去浏览")){
							if(id > 0){
							 window.open("detail.php?id=" + id);
							}else{
							 window.open("detail.php");
							}
						 location.reload();
						}
					}else{
						$('.messageTip').html('添加新闻失败！');
					}
				},
				error: function() {  
					$('.messageTip').html("系统出错");
			    }
			});
		}
	</script>
</body>
</html>