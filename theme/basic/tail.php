<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    </div>
</div>

<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
    <div id="ft_catch">
		<div class="foot_nav" style="text-align:center">
        	<span style="margin-right:40px;"><a href="/bbs/content.php?co_id=about02" >협회소개</a></span>
            <span style="margin-right:40px;"><a href="/bbs/content.php?co_id=schedule_01" >스케쥴</a></span>
            <span style="margin-right:40px;"><a href="/bbs/content.php?co_id=about04" >찾아오시는 길</a></span>
            <span style="margin-right:40px;"><a href="/bbs/board.php?bo_table=notice" >공지사항</a></span>
            

		</div>
		<div class="foot_logo"><img src="/theme/basic/img/foot_logo.png" alt="m2gym&amp;spinning" /></div>
		<div id="ft_copy">
		경기도 원주시 삼보로 2101, 6층 603, 604호 (반곡동, 서영예비뉴파크 2차) ｜ TEL : 033.734.1114 ｜ E-mail : mm2gym@gmail.com<br>
        사업자등록번호 : 541-32-00216 &nbsp; &nbsp;｜ &nbsp;대표 : 심승학  &nbsp;｜ &nbsp;정보책임자 : 심승학<br>
        © 2016 M2GYM&amp;SPINNING. all rights reserved.<br>

		</div>
	</div>
</div>


<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>