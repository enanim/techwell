<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
    return;
}

 // include_once(G5_THEME_PATH.'/tail.php');
    // return;

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
</div>
    </div>
    <!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
</div>

    </div>
</div>

<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
    <div id="ft_catch">
        <div class="foot_nav">
            <span><a href="#">이용약관</a></span><span><a href="#">개인정보보호정책</a></span>
        </div>
        <div class="foot_logo"><img src="/theme/basic/img/foot_logo.png" alt="pishon" /></div>
        <div id="ft_copy">
            <img src="/theme/basic/img/foot_copyright.png" width="431" height="45" />
        </div>
    </div>
</div>

<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>
<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
