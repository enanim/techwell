<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');


?>

<!-- 메인이미지 시작 { -->

<section style="display:none">
	<script type="text/javascript" src="/js/jquery.banner.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.goods_photo img').mouseover(function() {
				$(this).fadeTo(0,0.60);
			
	 
			});
			$('.goods_photo img').mouseout(function() {
				$(this).fadeTo(0,6);
		
			});
		});
	</script>
	<link rel="stylesheet" href="/layerslider/css/layerslider.css" type="text/css">
	
	<script src="/layerslider/js/greensock.js" type="text/javascript"></script>
	
	<!-- LayerSlider script files -->
	<script src="/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<div class="main_big_banner" style="margin:0px auto;height:619px; width:1200px; padding-top:66px; position:relative">
		<div id="layerslider" style="width:100%; height:100%">
			<div class="ls-slide" data-ls="transition2d:13;">
				<img src="/layerslider/css/blank.gif" data-src="/theme/basic/img/main/main_bg01.jpg" class="ls-bg" alt="Slide background">
				
			</div>
			<div class="ls-slide" data-ls="transition2d:11;">
				<img src="/layerslider/css/blank.gif" data-src="/theme/basic/img/main/main_bg02.jpg" class="ls-bg" alt="Slide background">
			</div>
			<div class="ls-slide" data-ls="transition2d:1;">
				<img src="/layerslider/css/blank.gif" data-src="/theme/basic/img/main/main_bg03.jpg" class="ls-bg" alt="Slide background">
			</div>
			<div class="ls-slide" data-ls="transition2d:1;">
				<img src="/layerslider/css/blank.gif" data-src="/theme/basic/img/main/main_bg04.jpg" class="ls-bg" alt="Slide background">
			</div>
			<div class="ls-slide" data-ls="transition2d:1;">
				<img src="/layerslider/css/blank.gif" data-src="/theme/basic/img/main/main_bg05.jpg" class="ls-bg" alt="Slide background">
			</div>
		</div>
	</div>
</section>

	<script type="text/javascript">
	/*
		$(document).ready(function(){
			$('#layerslider').layerSlider({
				navPrevNext: false,
				hoverPrevNext: false,
				navStartStop: false,
				thumbnailNavigation: 'disabled'
			});
			$('#layerslider2').layerSlider({
				navPrevNext: false,
				hoverPrevNext: false,
				navStartStop: false,
				thumbnailNavigation: 'disabled'
			});
		});
		*/
	</script>
<!--
	<div style="margin:0 auto; text-align:center; position:relative; width:1120px;">
	<video loop controls autoplay width="1120">
		<source src="/theme/basic/img/inkyo.mp4" type="video/mp4">
	</video>
	<div style="position:absolute; top:30px; left:-160px; display:none">
		<a href="/bbs/board.php?bo_table=AuditionNotice"><img src="/theme/basic/img/main_banner01.png" style="margin-bottom:10px; display:block" /></a>
		<a href="/bbs/board.php?bo_table=talk"><img src="/theme/basic/img/main_banner02.png" /></a>
	</div>
</div>
-->
	
	<!--  메인슬라이드 -->
	<script src="/theme/basic/html/js/layout.js"></script>
    
    <div id="main_banner_height" style="">
		<div id="main_banner">
			<div id="slider"> 
        	<a href=""><img src="/theme/basic/img/main/main_visual_01.png"></a> 
            <a href=""><img src="/theme/basic/img/main/main_visual_02.png"></a> 
            <a href=""><img src="/theme/basic/img/main/main_visual_03.png"></a>
        	</div>
			<div id="slider_bullet"></div>
	  </div>
	  <div id="slider_controller" style="height: 372px;"> 
      	<a href="#" id="prev_btn" style="margin-top: 148px;"><img src="/theme/basic/img/main/slide_prev.png" alt=""></a>
        <a href="#" id="next_btn" style="margin-top: 148px;"><img src="/theme/basic/img/main/slide_next.png" alt="" title=""></a> 
      </div>
	 
    </div>
<!-- } 메인이미지 끝 -->

<div class="main_banner_wrap">
    <table width="20%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="padding-left:25px;">
                <img src="/theme/basic/img/main/main_h3.png" />
                <div style="width:300px;margin-top:30px;">
                    <?php
                    echo latest("pishon_basic", 'notice', 4, 20);
                    ?>
                </div>
            </td>
            <td>
            <div class="right_btn">
   
                <ul>
                   <li><a href="/bbs/content.php?co_id=product"><img src="/theme/basic/img/main/main_btn_01.png" /></a></li>
                   <li><a href="/bbs/board.php?bo_table=facilities&wr_id=2"><img src="/theme/basic/img/main/main_btn_02.png" /></a></li>
                   <li><a href="/bbs/board.php?bo_table=notice"><img src="/theme/basic/img/main/main_btn_03.png" /></a></li>
                </ul>			

    		</div>
            </td>
        </tr>
    </table>
    	
	<div style="border-top:1px dashed #333; margin:20px 0 20px; display:none"></div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="display:none">
        <tr>
            <td valign="top">
                <img src="/theme/basic/img/main_title_04.png" />
                <div style="width:250px;margin-top:20px;">
                    <?php
                    echo latest("pishon_basic", 'media', 5, 20);
                    ?>
                </div>
            </td>
            <td valign="top">
                <img src="/theme/basic/img/main_title_05.png" />
                <div style="width:250px;margin-top:20px;">
                    <?php
                    echo latest("pishon_basic", 'talk', 5, 20);
                    ?>
                </div>
            </td>
            <td valign="top">
                <div>
                    <img src="/theme/basic/img/main_title_06.png" />
                    <div style="width:250px;margin-top:20px;">
                        <img src="/theme/basic/img/index_business.png" border="0" usemap="#Map" />
                    </div>
                </div>			
            </td>
        </tr>
    </table>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<map name="Map" id="Map">
	<area shape="rect" coords="4,3,104,103" href="/bbs/content.php?co_id=about02_01" />
	<area shape="rect" coords="106,5,206,102" href="/bbs/content.php?co_id=about02_02" />
	<area shape="rect" coords="204,6,306,101" href="/bbs/content.php?co_id=about02_03" />
</map>
	