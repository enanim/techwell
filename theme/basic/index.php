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

            		//상담신청 버튼
			$('p.btn_submit').on('click',function (){
                $('#name').val($.trim($('#name').val()));
                $('#mobile_num').val($.trim($('#mobile_num').val()));
                if(!$('#name').val()){alert('고객명을 입력해 주세요');$('#name').focus();return false;}
                if($('#name').val().length < 2){alert('고객명을 정확히 입력해 주세요');$('#name').focus();return false;}
                if(!$('#mobile_num').val()){alert('연락처를 입력해 주세요');$('#mobile_num').focus();return false;}
                if($('#mobile_num').val().length < 11){alert('연락처를 정확히 입력해 주세요');$('#mobile_num').focus();return false;}
                if(!/^[0-9-+]+$/.test($('#mobile_num').val())){alert('연락처를 정확히 입력해 주세요 (숫자,- 사용가능)');$('#mobile_num').focus();return false;}
                $.ajax({
                    type: "post",
                    url: "/bbs/write_update.php",
                    data: {
                        uid: "<?php echo get_uniqid(); ?>" ,
                        w: "" ,
                        bo_table: "councelling",
                        wr_id: "0",
                        sca: "",
                        sfl: "",
                        stx: "",
                        spt: "",
                        sst: "",
                        sod: "",
                        page: "",
                        wr_name: $('#name').val(),
                        wr_subject: $('#name').val() + "(" + $('#mobile_num').val() + ")님이 문자 상담을 요청 하셧습니다.",
                        wr_content: $('#name').val() + "(" + $('#mobile_num').val() + ")님이 문자 상담을 요청 하셧습니다.",
                        wr_link1: "",
                        wr_link2: ""
                    }
                 }).done(function( msg ) {
                    var title = msg.match(/<title[^>]*>([^<]+)<\/title>/)[1];
                    var pattern = new RegExp("오류");
                    (pattern.test(title))?alert('오류가 발생했습니다.'):alert('문자 상담을 요청 했습니다.');
                    $('#name').val('');
                    $('#mobile_num').val('');
                });
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
    
    <div id="main_banner_height" style="height: 372px;">
		<div id="main_banner">
			<div id="slider">
        	    <a href="#;"><img src="/theme/basic/img/main/main_visual_01.jpg"></a>
                <a href="#;"><img src="/theme/basic/img/main/main_visual_02.jpg"></a>
                <a href="/bbs/board.php?bo_table=event&wr_id=1"><img src="/theme/basic/img/main/main_visual_03.jpg"></a>
        	</div>
			<div id="slider_bullet"></div>
         </div>
        <img id="prev_btn" src="/theme/basic/img/main/slide_prev.png" alt="" style="position: relative; cursor: pointer;">
        <img id="next_btn" src="/theme/basic/img/main/slide_next.png" alt="" style="position: relative; cursor: pointer;">
    </div>
<!--  메인이미지 끝 -->

<div class="main_banner_wrap">

	<ul>
    	<li class="news">
        	<h2><img src="/theme/basic/img/main/h2_01.png" /></h2>
            <ul>
            	<li>
                	<?php
                    echo latest("pishon_basic", 'notice', 4, 20);
                    ?>
                </li>
            </ul>
        
        </li>
        <li class="timetable">
        	<h2><img src="/theme/basic/img/main/h2_02.png" /></h2>
            <ul>
            	<li>
                	<a href="/bbs/content.php?co_id=schedule_01"><img src="/theme/basic/img/main/main_contents_02.png" /></a>                	
                </li>
            </ul>
        
        </li>
        <li class="councelling">
        	<h2><img src="/theme/basic/img/main/h2_03.png" /></h2>
            <ul>
            	<li>상담신청을 남겨주시면 빠른연락드리도록 하겠습니다.</li>
                <li>
                	<form name="councelling"  method="post">
                    <input type="hidden" name="url" value="">
                
                    <fieldset id="councelling">
                        <legend>문자상담</legend>
                        <label for="login_id" class="name">고객명</label>
                        <input type="text" name="name" id="name" required class="f" size="20" maxLength="20">
                        <label for="login_id" class="mobile_num">연락처</label>
                        <input type="text" name="mobile_num" id="mobile_num" required class="f" size="20" maxLength="20">
                        
                    </fieldset>
                    
                    <p class="btn_submit">상담신청</p>
                </li>
            </ul>
        
        </li>
        
    
    </ul>


    
    	
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
	
