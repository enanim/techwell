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
        	<span style="margin-right:40px;"><a href="/bbs/content.php?co_id=about01" >회사소개</a></span>
            <span style="margin-right:40px;"><a href="/bbs/content.php?co_id=product" >제품소개</a></span>
            <span style="margin-right:40px;"><a href="/bbs/board.php?bo_table=facilities&wr_id=2" >시설현황</a></span>
            <span style="margin-right:40px;"><a href="/bbs/write.php?bo_table=onlineqna" >온라인문의</a></span>
            <span style="margin-right:40px;"><a href="/bbs/write.php?bo_table=onlineqna" >온라인문의</a></span>
            <span style="margin-right:40px;"><a href="/bbs/board.php?bo_table=notice" >테크웰소식</a></span>

		</div>
		<div class="foot_logo"><img src="/theme/basic/img/foot_logo.png" alt="pishon" /></div>
		<div id="ft_copy">
			<img src="/theme/basic/img/foot_copyright.png" />
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