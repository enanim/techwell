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
		<div class="foot_nav" style="display:none">
			<span><a href="#">이용약관</a></span><span><a href="#">개인정보보호정책</a></span>
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