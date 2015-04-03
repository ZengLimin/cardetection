<?php
/* Open a connection */
$mysqli = new mysqli ( "qdm114573194.my3w.com", "qdm114573194", "zeng3389", "qdm114573194_db" );

/* check connection */
if (mysqli_connect_errno ()) {
	printf ( "Connect failed: %s<br>", mysqli_connect_error () );
	exit ();
}
$id;
if(empty($_GET ["id"])){
	$sql = "select max(id) id from news";
	$result = $mysqli->query ( $sql );
	$row = $result->fetch_assoc ();
	$id = $row ['id'];
}else{
	$id = $_GET ["id"];
}
settype($id, "integer");
$sql = "select * from news where id = $id ";
$mysqli->query ( "set names 'utf8'" );
$result = $mysqli->query ( $sql );
$row = $result->fetch_assoc ();
$title = $row ['title'];
$content ='<h1><p style="text-align: left;"><span style="font-size: 12px;">　　';
$content .= str_replace('<p>', '</span></p><p style="text-align: left;"><span style="font-size: 12px;">　　',$row ['content']) ;
$content .='</span></p><p><br></p></h1>';
$createDate = $row ['createDate'];
// 查询下一条
$sql = "select * from news where id > $id order BY id,createDate LIMIT 1";
$result = $mysqli->query ( $sql );
if ($next = $result->num_rows == 1) {
	$row = $result->fetch_assoc ();
	$nextId = $row ['Id'];
	$nextTitle = $row ['title'];
}

// 查询上一条
$sql = "select * from news where id < $id order BY id desc,createDate desc LIMIT 1";
$result = $mysqli->query ( $sql );
if ($last = $result->num_rows == 1) {
	$row = $result->fetch_assoc ();
	$lastId = $row ['Id'];
	$lastTitle = $row ['title'];
}

?>
<!DOCTYPE html>
<!-- saved from url=(0042)http://1884812585.wezhan.cn/newsitem/10024 -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.ico">
<title>新闻动态-<?php echo $title;?></title>
<meta name="description" content="<?php echo $title;?>">
<meta name="keywords" content="<?php echo $title;?>">
<link rel="stylesheet" href="./resource/base.pc.css" type="text/css">
<link rel="stylesheet" href="./resource/9_zh-CN.css" type="text/css">
<script type="text/javascript" src="./resource/jquery-1.9.1.min.js"></script>
<script type="text/javascript"	src="./resource/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./resource/public.common.min.js"></script>
<script src="./resource/jquery.lazyload.min.js"></script>
<script src="./resource/underscore.js"></script>
<script type="text/javascript" src="./resource/jquery.slider.js"></script>
<script language="javascript" type="text/javascript"	id="yibuHeaderScript">
</script>
</head>
<body>
<script type="text/javascript">$(function(){ var $templateHeader=$('#flowsmartView_1_Area_0');if($templateHeader.length>0){ $templateHeader.parent().hide();} var $templateFooter=$('#flowsmartView_1_Area_1');if($templateFooter.length>0){ $templateFooter.parent().hide();}});</script>
<div id="view_layout_1_14637" class="mainSamrtView yibuSmartViewMargin">
	<div class="yibuFrameContent layout_Block3_Item0"
		style="width: 100%; border-style: none;">
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
<?php $page="news"; include 'resource/header.php'; ?>
<!--page_main-->
<div class="page_main f_clearfix"
	style="width: 1420px; margin-left: auto; margin-right: auto;">

<!--page_sidebar-->
<?php include 'resource/left.php'; ?>
<!--page_container-->
<div id="yibuLayout_container"
	class="page_container f_clearfix yibuTemplateBody"
	style="width: 941px; background-color:; background-image: url(&amp;#39;http://img.wezhan.cn/content/sitefiles/11167/images/0062308_内容区_03_1420.png&amp;#39;); background-repeat:;">
<div id="view_newsinfo_1_9"
	class="mainSamrtView yibuSmartViewMargin" style="height: 508px;">
<div class="yibuFrameContent newsinfo_NewsStyle1_Item0"
	style="width: 100%; border-style: none;">
<!--page_wrap-->
<div class="page_wrap ibody">
	<!--news_view_wrap-->
	<div class="news_view_wrap bookinfo">
		<!--news_view_header-->
		<div class="news_view_header">
			<h1 class="news_view_title"><?php echo $title;?></h1>
			<div class="news_view_infobar"><?php echo $createDate;?></div>
		</div>
		<!--/news_view_header-->
		<!--news_view_main-->
		<div class="news_view_main">
			<!--news_view_content-->
			<div class="news_view_content">
				<?php echo $content;?>
				<div class="qrcode" style="display: none;"></div>
			</div>
			<div class="pagination"></div>
			<!--/news_view_content-->
			<!--news_view_pagebar-->
			<div class="new_view_pagebar">
				<div class="news_view_pagenprev">上一篇：<?php if($last == 0){echo "无";}else{echo '<a href="detail.php?id='.$lastId.'">'.$lastTitle.'</a>';}?></div>
				<div class="news_view_pagennext">下一篇：<?php if($next == 0){echo "无";}else{echo '<a href="detail.php?id='.$nextId.'">'.$nextTitle.'</a>';}?></div>
			</div>
			<!--/news_view_pagebar-->
		</div>
		<!--/news_view_main-->
	</div>
	<!--/news_view_wrap-->
</div>
<!--/page_wrap-->
<script>
var _current_page;
var contents;
$(function () {
    setTimeout(function(){
      var newInfoHtmlId = "view_newsinfo_1_9";
      var $newContainer = $('#' + newInfoHtmlId);
      var height = $newContainer.height();
      var chidHeiht = $newContainer.find('.ibody').height();
      if (chidHeiht > height) {
          $newContainer.height(chidHeiht);
      }
    },500);
    
    $(".ibody img").load(function () {
         height = $newContainer.height();
         chidHeiht = $newContainer.find('.ibody').height();
        if (chidHeiht > height) {
            $newContainer.height(chidHeiht);
        }
    });

    // $(".yibuTemplateBody").css("height","");
    if ($(".news_view_content").html() != null) {
        contents = $(".news_view_content").html().split('_ueditor_page_break_tag_');
        var length = contents.length;
        if (length != 1) {
            $(".pagination").append("<span id='pre_page'>上一页</span>");
            for (var i = 0; i < length; i++) {
                $(".pagination").append("<a class='page' id=" + i + ">" + (i + 1) + "</a>");
            }
            $(".pagination").append("<span id='post_page'>下一页</span>");
            _current_page = $(".page").first();
            $(".page").first().addClass("hover");
            init();
        }
        $(".news_view_content").html(contents[0]);
    }
});

function init() {
    $(".page").click(function () {
        $(".page").removeClass("hover");
        $(".news_view_content").html(contents[$(this).attr('id')]);
        $(this).addClass("hover");
        _current_page = $(".hover");
    });
    $("#pre_page").click(function () {
        _current_page.prev().click();
    });
    $("#post_page").click(function () {
        _current_page.next().click();
    });
}
</script>
<style>
/*- Pagination -*/
.pagination {
	padding: 10px 0;
	font-size: 13px;
	color: #48B9EF;
	text-align: center;
}

.pagination a {
	margin: 0px 3px;
	padding: 2px 5px;
	border: 1px solid #DDD;
	text-decoration: none;
	cursor: pointer;
}

.pagination a:hover,.pagination a:active {
	border: 1px solid #4B90CE;
}

.pagination .hover {
	padding: 2px 5px;
	border: 1px solid #4B90CE;
	background: #4B90CE;
	color: #FFF;
	font-weight: 700;
}

.pagination span {
	margin: 0px 3px;
	padding: 2px 5px;
	border: 1px solid #DDD;
	cursor: pointer
}
</style>
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