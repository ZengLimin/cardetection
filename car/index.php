<!DOCTYPE html>
<!-- saved from url=(0030)http://1884812585.wezhan.cn/sy -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon"  href="favicon.ico">
    <title>首页</title>
    <meta name="description" content="温岭西城车辆检测首页">
    <meta name="keywords" content="温岭西城车辆检测,车检预约">

    <link rel="stylesheet" href="./resource/base.pc.css" type="text/css">
    <link rel="stylesheet" href="./resource/1265_zh-CN.css" type="text/css">
    
        <script type="text/javascript" src="./resource/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="./resource/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="./resource/public.common.min.js"></script>
        <script src="./resource/jquery.lazyload.min.js"></script>
        <script src="./resource/underscore.js"></script>
        <script type="text/javascript" src="./resource/jquery.slider.js"></script>
<script language="javascript" type="text/javascript" id="yibuHeaderScript">
</script>


</head>
<body>
<div id="view_layout_1_843" class="mainSamrtView yibuSmartViewMargin">
    <style type="text/css">
/* page layout */
.page_wrap { margin:0 auto; padding:0; }
.page_header { clear:both; }
.page_main { clear:both; margin-top:0px; }
.page_main .page_sidebar { float:left; }
.page_main .page_container { float:right; }
.page_footer { clear:both; margin-top:0px; height:100px;}


</style>
<div class="yibuFrameContent layout_Block2_Item0" style="width:100%;border-style:none;">
      <div style="width:100%;height:492px;background-color:;">
        <div class="page_header" style="width:1420px;height:492px;margin-left:auto;margin-right:auto;;">
        <div class="runTimeflowsmartView">
        <div id="view_image_25_843" class="yibuSmartViewMargin absPos" oldbottom="75">
		<div class="yibuFrameContent overflow_hidden image_Style1_Item0" style="height:50px;width:320px;">    
		<div class="megwh" style="height:100%; width:100%;">
		     <a id="autosize_view_image_25_843" href="javascript:void(0);" target="_self" style="cursor:default;">
		          <img  src="./resource/0069051_logo.png" alt="" style="border: none; position: relative; height: 50px; margin-top: 0px; width: 320px; display: inline;">
		     </a>
		 </div>
<script type="text/javascript">
    $(function () {
        ChangeImage("view_image_25_843");
    });
</script>
</div>
</div>
<div id="view_photoalbum_28_843" class="yibuSmartViewMargin absPos" oldbottom="490">
<div class="yibuFrameContent overflow_hidden photoalbum_Style1_Item0 view_photoalbum_28_843_Style1_Item0" style="height:326px;width:1002px;"><div id="w_slider_28" class="w_slider w_sliders_28" style="width:100%;height:100%;">
    <div class="w_slider_num">
        <ul style="display:none;">


                <li style="font-size:12px;" class="on">1</li>
        </ul>
    </div>
    <div class="w_slider_img">
        <ul>
                <li>
                    <a href="javascript:void(0);" title="banner图_03" style=" cursor:default">
                        <img class="lazyload" src="./resource/0061528_banner_03.png" data-original="http://img.wezhan.cn/content/sitefiles/11167/images/0061528_banner图_03.png" onload="DynamicLoad(this)" title="banner图_03" isload="1" style="display: block;">
                    </a>
                </li>
        </ul>
    </div>
</div>



<script type="text/javascript">
    
    $(".w_sliders_28").slide({
        mainCell: $(".w_sliders_28 .w_slider_img ul"),
        titCell: $(".w_sliders_28 .w_slider_num li"),
        effect: "fade",
        autoPlay: "true",
        trigger: "click",
        interTime: "3000"
    });
</script></div>
</div>
<div id="view_navigator_29_843" class="yibuSmartViewMargin absPos" oldbottom="147" style="z-index: 999999;">
<div class="yibuFrameContent overflow_hidden navigator_Style2_Item0" style="height: 40px; width: 1003px; overflow: visible;"><!--nav-->
    <ul id="nav_view_navigator_29_843">
    </ul>

<!--/nav-->
<input type="hidden" id="HeightVariablesStr_view_navigator_29_843" value="">
<script>
    $(function () {
        slideMenu("nav_" + 'view_navigator_29_843');
        jQuery("#nav_" + 'view_navigator_29_843').parent("div").css("overflow", "visible");
        var isDivider = true;
        jQuery("#nav_" + 'view_navigator_29_843').children("li").each(function () {
            var topWidth = $(this).children("h3").children("a").css("border-top-width");
            var leftWidth = $(this).children("h3").children("a").css("border-left-width");
            var bottomWidth = $(this).children("h3").children("a").css("border-bottom-width");
            if (topWidth != "0" && topWidth != "0px") {
                isDivider = false;
                return false;
            }
            if (leftWidth != "0" && leftWidth != "0px") {
                isDivider = false;
                return false;
            }
            if (bottomWidth != "0" && bottomWidth != "0px") {
                isDivider = false;
                return false;
            }

            if ($(this).children("ul").length > 0) {
                var maxWidth = $(this).children("ul").width();
                $(this).children("ul").children("li").each(function () {
                    var a = $(this).children("a");
                    var currentWidth = GetCurrentStrWidth(a.html(), a.css("font-size")) + 20;
                    if (maxWidth < currentWidth)
                        maxWidth = currentWidth;
                });
                $(this).children("ul").css("width", maxWidth + "px");
            }
        });
        if (isDivider)
            jQuery("#nav_" + 'view_navigator_29_843').children("li:last").children("h3").children("a").css("border-right-width", "0px");//去掉最后一项的分隔线

        if ("False" == "False") {
            jQuery("#" + 'view_navigator_29_843').css("z-index", "999999");
            if ($.browser.msie) {
                jQuery("#" + 'view_navigator_29_843').parent(".runTimeflowsmartView").css("z-index", "999999");
            }
            if (jQuery("#" + 'view_navigator_29_843').parent().attr("class") != "runTimeflowsmartView") {//导航可能放在容器控件中了，需要把容器控件的z-index的值设大
                jQuery("#" + 'view_navigator_29_843').parent(".w_container_content").parent().parent().css("z-index", "999998");
            }
        }
        SetNavSelectedStyle("nav_" + 'view_navigator_29_843', 'nav');//选中当前导航
    })
</script>
</div>
</div>
<div id="view_navigator_30_843" class="yibuSmartViewMargin absPos" oldbottom="149" style="z-index: 999999;">
<div class="yibuFrameContent overflow_hidden navigator_Style2_Item0 view_navigator_30_843_Style2_Item0" style="height: 43px; width: 1002px; overflow: visible;"><!--nav-->
    <ul id="nav_view_navigator_30_843">
            <li class="w_nav_item on w_nav_item_current" style="width:14.28%;*width:14%">
                    <h3>
                        <a href="#">
                            首页
                        </a>
                    </h3>
                            </li>
			 <li class="w_nav_item" style="width:14.28%;*width:14%">
                    <h3>
                        <a href="book.php">
                            车检预约
                        </a>
                    </h3>
                            </li>				
            <li class="w_nav_item" style="width:14.28%;*width:14%">
                    <h3>
                        <a href="about.php">
                            关于我们
                        </a>
                    </h3>
             <li class="w_nav_item" style="width:14.28%;*width:14%">
                    <h3>
                        <a href="news.php">
                            新闻动态
                        </a>
                    </h3>
                            </li>
            <li class="w_nav_item" style="width:14.28%;*width:14%">
                    <h3>
                        <a href="contact.php" style="border-right-width: 0px;">
                            联系我们
                        </a>
                    </h3>
                            </li>
    </ul>

<!--/nav-->
<input type="hidden" id="HeightVariablesStr_view_navigator_30_843" value="$height:43px;$Item_height:43px;$SubItem_height:43px;">
<script>
    $(function () {
        slideMenu("nav_" + 'view_navigator_30_843');
        jQuery("#nav_" + 'view_navigator_30_843').parent("div").css("overflow", "visible");
        var isDivider = true;
        jQuery("#nav_" + 'view_navigator_30_843').children("li").each(function () {
            var topWidth = $(this).children("h3").children("a").css("border-top-width");
            var leftWidth = $(this).children("h3").children("a").css("border-left-width");
            var bottomWidth = $(this).children("h3").children("a").css("border-bottom-width");
            if (topWidth != "0" && topWidth != "0px") {
                isDivider = false;
                return false;
            }
            if (leftWidth != "0" && leftWidth != "0px") {
                isDivider = false;
                return false;
            }
            if (bottomWidth != "0" && bottomWidth != "0px") {
                isDivider = false;
                return false;
            }

            if ($(this).children("ul").length > 0) {
                var maxWidth = $(this).children("ul").width();
                $(this).children("ul").children("li").each(function () {
                    var a = $(this).children("a");
                    var currentWidth = GetCurrentStrWidth(a.html(), a.css("font-size")) + 20;
                    if (maxWidth < currentWidth)
                        maxWidth = currentWidth;
                });
                $(this).children("ul").css("width", maxWidth + "px");
            }
        });
        if (isDivider)
            jQuery("#nav_" + 'view_navigator_30_843').children("li:last").children("h3").children("a").css("border-right-width", "0px");//去掉最后一项的分隔线

        if ("False" == "False") {
            jQuery("#" + 'view_navigator_30_843').css("z-index", "999999");
            if ($.browser.msie) {
                jQuery("#" + 'view_navigator_30_843').parent(".runTimeflowsmartView").css("z-index", "999999");
            }
            if (jQuery("#" + 'view_navigator_30_843').parent().attr("class") != "runTimeflowsmartView") {//导航可能放在容器控件中了，需要把容器控件的z-index的值设大
                jQuery("#" + 'view_navigator_30_843').parent(".w_container_content").parent().parent().css("z-index", "999998");
            }
        }
        SetNavSelectedStyle("nav_" + 'view_navigator_30_843', 'nav');//选中当前导航
    })
</script>
</div>
</div>
<!-- 
<div id="view_text_31_843" class="yibuSmartViewMargin absPos" oldbottom="67">
<div class="yibuFrameContent overflow_hidden text_Style1_Item0" style="height:24px;width:224px;">
<div id="view_text_31_843_txt" style="cursor:default; height:100%; width:100%;">
    <div class="editableContent">
        <p><span style="font-size: 18px; ">预约热线：400 856 4566</span></p>
    </div>
</div>
<script>
    Pagination('view_text_31_843_txt');
</script>
</div>
</div>
-->
<div id="view_banner_37_843" class="yibuSmartViewMargin absPos" oldbottom="149">
<div class="yibuFrameContent overflow_hidden banner_Style1_Item0 view_banner_37_843_Style1_Item0" style="height: 43px; width: 1000px; overflow: visible;">    
<div class="w_container_wrap renderfullScreen" style="left: -210px; width: 1419px; height: 43px;"></div>
    <script>
        $(function () {
            setRenderFullScreen($('#view_banner_37_843'));
        })
    </script>


<div class="flowsmartView isflowcontainer w_container_content" refarea="Area_0" id="flowsmartView_37" style="width:1000px;">
    
</div>
<script type="text/javascript">
    function setLayoutHeight() {
        var bannerheight = $("#view_banner_37_843").css("height");
        $("#view_banner_37_843").children(".yibuFrameContent").css("height", bannerheight);
    };
</script></div>
</div>
</div>
        </div>
    </div>
    <div class="page_main" style="width:1420px;margin-left:auto;margin-right:auto;background-color:;">
    <div id="yibuLayout_center" class="yibuTemplateBody" style="min-height:100px; width:100%;background-image:url(&#39;http://img.wezhan.cn/content/sitefiles/11167/images/0061539_内容区_02_1420.png&#39;);background-repeat:;">
    <div id="view_main_1_1265" class="mainSamrtView yibuSmartViewMargin">
<div class="yibuFrameContent main__Item0" style="height:208px;width:100%;border-style:none;">
<div class="runTimeflowsmartView">
<div id="view_line_5_1265" class="yibuSmartViewMargin absPos" oldbottom="39">
<div class="yibuFrameContent overflow_hidden line_Style1_Item0 view_line_5_1265_Style1_Item0" style="height:7px;width:348px;">
    <div class="w_line"></div>
</div>
</div>
<div id="view_text_6_1265" class="yibuSmartViewMargin absPos" oldbottom="32">
<div class="yibuFrameContent overflow_hidden text_Style1_Item0" style="height:21px;width:177px;">
<div id="view_text_6_1265_txt" style="cursor:default; height:100%; width:100%;">
    <div class="editableContent">
        <p><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px; color: #1a6fbc;">公司简介 /&nbsp;<span style="font-family: arial, helvetica, sans-serif; font-size: 12px; color:#9c9c9c;">Company Profile</span></span></p>
    </div>
</div>
<script>
    Pagination('view_text_6_1265_txt');
</script>
</div>
</div>
<div id="view_image_7_1265" class="yibuSmartViewMargin absPos" oldbottom="29">
<div class="yibuFrameContent overflow_hidden image_Style1_Item0" style="height:16px;width:47px;">    <div class="megwh" style="height:100%; width:100%;">
        <a id="autosize_view_image_7_1265" href="about.php" target="_self">
            <input id="w_view_image_7_1265" type="hidden" value="37">
            <input id="h_view_image_7_1265" type="hidden" value="8">
            <img class="lazyload" src="./resource/resize_pictrue.png">
        </a>
    </div>
<!-- <script type="text/javascript">
    $(function () {
        ChangeImage("view_image_7_1265");
    });
</script> -->
</div>
</div>
<div id="view_image_8_1265" class="yibuSmartViewMargin absPos" oldbottom="176">
<div class="yibuFrameContent overflow_hidden image_Style1_Item0" style="height:146px;width:117px;">    <div class="megwh" style="height:100%; width:100%;">
        <a id="autosize_view_image_8_1265" href="javascript:void(0);" target="_self" style="cursor:default;">
            <img src="./resource/0061536_profile_06.png" alt="" style="border: none; position: relative; height: 126px; margin-top: 0px; width: 117px; display: inline;">
        </a>
    </div>
<script type="text/javascript">
    $(function () {
        ChangeImage("view_image_8_1265");
    });
</script>
</div>
</div>
<div id="view_text_9_1265" class="yibuSmartViewMargin absPos" oldbottom="178">
<div class="yibuFrameContent overflow_hidden text_Style1_Item0" style="height:155px;width:213px;">
<div id="view_text_9_1265_txt" style="cursor:default; height:100%; width:100%;">
    <div class="editableContent">
        <p><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; color: #494949;line-height:24px;">　　温岭市西城检测有限公司是具有独立的法人地位的检测站。本检测站独立开展第三方公正检测，主营机动车辆安全性能检测，环保检测与营运车辆综合性能检测，是为社会提供车辆安全性能检测的技术服务单位。</span></p><p><br></p>
    </div>
</div>
<script>
    Pagination('view_text_9_1265_txt');
</script>
</div>
</div>
<div id="view_line_10_1265" class="yibuSmartViewMargin absPos" oldbottom="39">
<div class="yibuFrameContent overflow_hidden line_Style1_Item0 view_line_10_1265_Style1_Item0" style="height:7px;width:296px;">


    <div class="w_line"></div>
</div>
</div>
<div id="view_text_11_1265" class="yibuSmartViewMargin absPos" oldbottom="32">
<div class="yibuFrameContent overflow_hidden text_Style1_Item0" style="height:21px;width:128px;">
<div id="view_text_11_1265_txt" style="cursor:default; height:100%; width:100%;">
    <div class="editableContent">
        <p><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px; color: #1a6fbc;">新闻动态 / <span style="font-family: arial, helvetica, sans-serif; font-size: 12px; color: #9c9c9c;">News</span></span></p>
    </div>
</div>
<script>
    Pagination('view_text_11_1265_txt');
</script>
</div>
</div>
<div id="view_image_12_1265" class="yibuSmartViewMargin absPos" oldbottom="30">
<div class="yibuFrameContent overflow_hidden image_Style1_Item0" style="height:17px;width:41px;">    <div class="megwh" style="height:100%; width:100%;">
        <a id="autosize_view_image_12_1265" href="news.php" target="_self">
            <input id="w_view_image_12_1265" type="hidden" value="37">
            <input id="h_view_image_12_1265" type="hidden" value="8">
        	<img class="lazyload" src="./resource/resize_pictrue.png">
         </a>
    </div>
<!-- <script type="text/javascript">
    $(function () {
        ChangeImage("view_image_12_1265");
    });
</script> -->
</div>
</div>
<div id="view_image_13_1265" class="yibuSmartViewMargin absPos" oldbottom="185">
<div class="yibuFrameContent overflow_hidden image_Style1_Item0" style="height:178px;width:289px;">   
 <div class="megwh" style="height:100%; width:100%;">
        <a id="autosize_view_image_13_1265" href="javascript:void(0);" target="_self" style="cursor:default;">
            <img src="./resource/0061538_contact_03.png" alt="" style="border: none; position: relative; height: 178px; margin-top: 0px; width: 289px; display: inline;">
        </a>
    </div>
<script type="text/javascript">
    $(function () {
        ChangeImage("view_image_13_1265");
    });
</script>
</div>
</div>
<div id="view_text_14_1265" class="yibuSmartViewMargin absPos" oldbottom="31">
<div class="yibuFrameContent overflow_hidden text_Style1_Item0" style="height:19px;width:157px;">
<div id="view_text_14_1265_txt" style="cursor:default; height:100%; width:100%;">
    <div class="editableContent">
        <p><span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px; color: #1a6fbc;">车检预约 / <span style="font-family: arial, helvetica, sans-serif; font-size: 12px; color: #9c9c9c;">Book</span></span></p>
    </div>
</div>
<script>
    Pagination('view_text_14_1265_txt');
</script>
</div>
</div>
<div id="view_image_15_1265" class="yibuSmartViewMargin absPos" oldbottom="32">
<div class="yibuFrameContent overflow_hidden image_Style1_Item0" style="height:19px;width:38px;">    <div class="megwh" style="height:100%; width:100%;">
        <a id="autosize_view_image_15_1265" href="book.php" target="_self">
            <input id="w_view_image_15_1265" type="hidden" value="37">
            <input id="h_view_image_15_1265" type="hidden" value="8">
            <img class="lazyload" src="./resource/resize_pictrue.png"/>
        </a>
    </div>
<!-- <script type="text/javascript">
    $(function () {
        ChangeImage("view_image_15_1265");
    });
</script> -->
</div>
</div>

<div id="view_text_16_1265" class="yibuSmartViewMargin absPos" oldbottom="190">
<div class="yibuFrameContent overflow_hidden text_Style1_Item0" style="height:143px;width:289px;">
   <a href="book.php">
		<img src="./resource/book.png" style="width:282px;"/>
	</a>
	<a href="book.php">
		<img src="./resource/cancel.png" style="width:282px;padding-top:2px;"/>
	</a>
</div>
</div>
<div id="view_list_20_1265" class="yibuSmartViewMargin absPos" oldbottom="178">
<div class="yibuFrameContent overflow_hidden list_Style2_Item0 view_list_20_1265_Style2_Item0" style="height:158px;width:296px;"><!--list-->
    <?php include 'newsList.php';?>
<!--/list-->
<script type="text/javascript">
    $(function () {
        var hoverIcon = "";
        if (hoverIcon != "") {
            var obj = $("#view_list_20_1265").find(" li i");
            obj.unbind("hover");
            obj.hover(function () {
                $(this).html(hoverIcon);
            },
            function () {
                $(this).html("");
            });
        }
    });

</script></div>
</div>
</div>
</div>
<div id="view_code_27_1265" class="yibuSmartViewMargin absPos" oldbottom="371">
<div class="yibuFrameContent overflow_hidden code_Style1_Item0" style="height:100px;width:200px;">    <div>
        <php? phpinfo();="" ?="">
    </php?></div>

</div>
</div>
<div id="view_code_28_1265" class="yibuSmartViewMargin absPos" oldbottom="378">
<div class="yibuFrameContent overflow_hidden code_Style1_Item0" style="height:100px;width:200px;">    <div>
        
    </div>

</div>
</div>
</div></div>
</div>
    </div>
    <?php include 'resource/footer.php'; ?>
</div>
</body></html>