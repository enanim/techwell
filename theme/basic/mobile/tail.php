<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
    return;
}
?>
    </div>
</div>

<hr>

<?php echo poll('theme/basic'); // 설문조사 ?>

<hr>

<div id="ft">

    <div id="ft_copy">
        <div id="ft_company" style="display:none">
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">오시는길</a>
            
        </div>
        Copyright  <b>&#40;주&#41;테크웰</b> All rights reserved.<br>
        <span>경기도 수원시 권선구 서부로 1433-20(고색동) 4층 441-813</span><br>
        <span>TEL : 070-5014-5001</span><span>FAX : 031-227-5276</span><br>
        
    </div>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
<a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>