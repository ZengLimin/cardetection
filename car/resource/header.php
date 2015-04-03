<div style="width:100%;height:160px;background-color:;">
	<div class="page_header inbox" style="width:1420px;height:160px;margin-left:auto;margin-right:auto;;">
        <div class="runTimeflowsmartView">
        <div id="view_image_25_14637" class="yibuSmartViewMargin absPos" oldbottom="78">
		<div class="yibuFrameContent overflow_hidden image_Style1_Item0" style="height:50px;width:320px;">    <div class="megwh" style="height:100%; width:100%;">
		        <a id="autosize_view_image_25_14637" href="javascript:void(0);" target="_self" style="cursor:default;">
		            <img src="./resource/0069051_logo.png" alt="" style="border: none; position: relative; height: 50px;margin-top: -1px;margin-left: -9px;width: 320px; display: inline;">
		        </a>
		    </div>
		</div>
</div>
<!-- <div id="view_photoalbum_28_14637" class="yibuSmartViewMargin absPos" oldbottom="492">
<div class="yibuFrameContent overflow_hidden photoalbum_Style1_Item0 view_photoalbum_28_14637_Style1_Item0" style="height:326px;width:1002px;"><div id="w_slider_28" class="w_slider w_sliders_28" style="width:100%;height:100%;">
    <div class="w_slider_num">
        <ul style="display:none;">


                <li style="font-size:12px;" class="on">1</li>
        </ul>
    </div>
    <div class="w_slider_img">
        <ul>
                <li>
                    <a href="javascript:void(0);" title="banner图_03" style=" cursor:default">
                        <img class="lazyload" src="./resource/0061528_banner图_03.png" data-original="http://img.wezhan.cn/content/sitefiles/11167/images/0061528_banner图_03.png" onload="DynamicLoad(this)" title="banner图_03" isload="1" style="display: block;">
                    </a>
                </li>
        </ul>
    </div>
</div>
</div>
</div> -->
<div id="view_navigator_30_14637" class="yibuSmartViewMargin absPos" oldbottom="149" style="z-index: 999999;">
<div class="yibuFrameContent overflow_hidden navigator_Style2_Item0 view_navigator_30_14637_Style2_Item0" style="height: 43px; width: 999px; overflow: visible;"><!--nav-->
    <ul id="nav_view_navigator_30_14637">
            <li class="w_nav_item on" style="width:14.28%;*width:14%">
                    <h3>
                        <a href="index.php">
                            首页
                        </a>
                    </h3>
                            </li>
           <li class="w_nav_item <?php if($page == 'book')echo 'w_nav_item_current';?>" style="width:14.28%;*width:14%">
                    <h3>
                        <a href="book.php">
                        预约车检                
                        </a>
                    </h3>
                            </li>
            <li class="w_nav_item <?php if($page == 'about')echo 'w_nav_item_current';?>" style="width:14.28%;*width:14%">
                    <h3>
                        <a href="about.php">
                            关于我们
                        </a>
                    </h3>
                            </li>
            <li class="w_nav_item <?php if($page == 'news')echo 'w_nav_item_current';?>" style="width:14.28%;*width:14%">
                    <h3>
                        <a href="news.php">
                            新闻动态
                        </a>
                    </h3>
                            </li>
            <li class="w_nav_item <?php if($page == 'contact')echo 'w_nav_item_current';?>" style="width:14.28%;*width:14%">
                    <h3>
                        <a href="contact.php" style="border-right-width: 0px;">
                            联系我们
                        </a>
                    </h3>
                            </li>
    </ul>

<!--/nav-->
<input type="hidden" id="HeightVariablesStr_view_navigator_30_14637" value="$height:43px;$Item_height:43px;$SubItem_height:43px;">
<script>
    $(function () {
        slideMenu("nav_" + 'view_navigator_30_14637');
        jQuery("#nav_" + 'view_navigator_30_14637').parent("div").css("overflow", "visible");
        var isDivider = true;
        jQuery("#nav_" + 'view_navigator_30_14637').children("li").each(function () {
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
            jQuery("#nav_" + 'view_navigator_30_14637').children("li:last").children("h3").children("a").css("border-right-width", "0px");//去掉最后一项的分隔线

        if ("False" == "False") {
            jQuery("#" + 'view_navigator_30_14637').css("z-index", "999999");
            if ($.browser.msie) {
                jQuery("#" + 'view_navigator_30_14637').parent(".runTimeflowsmartView").css("z-index", "999999");
            }
            if (jQuery("#" + 'view_navigator_30_14637').parent().attr("class") != "runTimeflowsmartView") {//导航可能放在容器控件中了，需要把容器控件的z-index的值设大
                jQuery("#" + 'view_navigator_30_14637').parent(".w_container_content").parent().parent().css("z-index", "999998");
            }
        }
        SetNavSelectedStyle("nav_" + 'view_navigator_30_14637', 'nav');//选中当前导航
    })
</script>
</div>
</div>
<div id="view_banner_38_14637" class="yibuSmartViewMargin absPos" oldbottom="149">
<div class="yibuFrameContent overflow_hidden banner_Style1_Item0 view_banner_38_14637_Style1_Item0" style="height: 43px; width: 1000px; overflow: visible;">    <div class="w_container_wrap renderfullScreen" style="left: -210px; width: 1419px; height: 43px;"></div>
    <script>
        $(function () {
            setRenderFullScreen($('#view_banner_38_14637'));
        })
    </script>


<div class="flowsmartView isflowcontainer w_container_content" refarea="Area_0" id="flowsmartView_38" style="width:1000px;">
    
</div>
<script type="text/javascript">
    function setLayoutHeight() {
        var bannerheight = $("#view_banner_38_14637").css("height");
        $("#view_banner_38_14637").children(".yibuFrameContent").css("height", bannerheight);
    };
</script></div>
</div>
<!--  
<div id="view_text_39_14637" class="yibuSmartViewMargin absPos" oldbottom="71">
<div class="yibuFrameContent overflow_hidden text_Style1_Item0" style="height:27px;width:260px;">
<div id="view_text_39_14637_txt" style="cursor:default; height:100%; width:100%;">
    <div class="editableContent">
        <p>
    <span style="font-size: 18px; ">预约热线：400 856 4566</span>
</p>
    </div>
</div>
<script>
    Pagination('view_text_39_14637_txt');
</script>
</div>
-->
</div>
</div>
	</div>
  </div>
	<!--/page_header-->