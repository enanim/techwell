<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

define("_INDEX_", TRUE);

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<!-- 메인이미지 시작 { -->

<link rel="stylesheet" href="/layerslider/css/layerslider.css" type="text/css">

	<script src="/layerslider/js/greensock.js" type="text/javascript"></script>

	<!-- LayerSlider script files -->
	<script src="/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

	<section>
		<div class="main_big_banner" style="margin:0px 0;height:500px; width:1000px; margin:30px auto">
			<div id="layerslider" style="width:100%; height:100%">
				<div class="ls-slide" data-ls="transition2d:13;">
					<img src="/layerslider/css/blank.gif" data-src="/theme/basic/shop/img/shop_main_bg01.jpg" class="ls-bg" alt="Slide background">
					<a href="#" target="_self" class="ls-link"></a>
					<p class="ls-l" style="top:150px;left:660px;font-weight: 300;padding-right:10px;padding-left:10px;font-size:2.4em; font-weight:600;line-height:130%;color:#452c17;background:none;border-radius:4px;white-space: nowrap;" data-ls="offsetxin:0;durationin:1000;delayin:1000;rotatein:-45;rotateyin:-1;scalexin:0.5;scaleyin:0.5;transformoriginin:left bottom 0;offsetxout:0;durationout:1000;fadeout:true;transformoriginout:right bottom 0;">
					<span style="font-size:20px;">the Anti-Gravity sticky CASE</span><br />
					For iPHONE  6/6+<br /><br />
					<span style="font-size:11px; line-height:14px !important; display:block">PISHON iPHONE CASE</span>
					<span style="font-size:11px; line-height:14px !important; display:block">STICKY Without beingsticky</span>
					<span style="font-size:11px; line-height:14px !important; display:block">Glass, Whiteboards, Metal, Kitchen Cabinets or Tile</span>
					<span style="font-size:11px; line-height:14px !important; display:block">It stick to it all</span>
					</p>
				</div>
				<div class="ls-slide" data-ls="transition2d:11;">
					<img src="/layerslider/css/blank.gif" data-src="/theme/basic/img/main/main_bg02.jpg" class="ls-bg" alt="Slide background">
					<a href="#" target="_self" class="ls-link"></a>
					<p class="ls-l" style="top:210px;left:340px; font-weight: 300;padding-right:10px;padding-left:10px;font-size:2.4em; font-weight:600;line-height:130%;color:#22322a;background:none;border-radius:4px;white-space: nowrap;" data-ls="offsetxin:-40;durationin:1000;delayin:1000;fadein:true;transformoriginin:left bottom 0;offsetxout:0;durationout:1000;offsetout:45;transformoriginout:right bottom 0;">
						<img src="/theme/basic/img/main/main_copy02.png" alt="PISHON" />
					</p>
				</div>
				<div class="ls-slide" data-ls="transition2d:13;">
					<img src="/layerslider/css/blank.gif" data-src="/theme/basic/img/main/main_bg03.jpg" class="ls-bg" alt="Slide background">
					<a href="/shop/item.php?it_id=SOPHIA" target="_self" class="ls-link"></a>
					<p class="ls-l" style="top:320px;left:49%; display:block; position:absolute;font-weight: 300;padding-right:10px;padding-left:10px;font-size:2.4em; font-weight:600;line-height:130%;color:#fff;background:none;border-radius:4px;white-space: nowrap;" data-ls="offsetxin:0;durationin:1000;delayin:1000;rotatein:-45;rotateyin:-1;scalexin:0.5;scaleyin:0.5;transformoriginin:left bottom 0;offsetxout:0;durationout:1000;rotateout:45;scalexout:2;scaleyout:2;transformoriginout:right bottom 0;">
						Hands Free!!
					</p>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
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
	</script>
<!-- } 메인이미지 끝 -->

<div class="shop_main_wrap">

<?php if($default['de_type1_list_use']) { ?>
<!-- 히트상품 시작 { -->
<section class="sct_wrap" style="display:none">
    <header>
        <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=1">히트상품</a></h2>
        <p class="sct_wrap_hdesc"><?php echo $config['cf_title']; ?> 히트상품 모음</p>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(1);
    $list->set_view('it_img', true);
    $list->set_view('it_id', true);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
</section>
<!-- } 히트상품 끝 -->
<?php } ?>

<?php if($default['de_type2_list_use']) { ?>
<!-- 추천상품 시작 { -->
<section class="sct_wrap" style="display:none">
    <header>
        <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=2">추천상품</a></h2>
        <p class="sct_wrap_hdesc"><?php echo $config['cf_title']; ?> 추천상품 모음</p>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(2);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
</section>
<!-- } 추천상품 끝 -->
<?php } ?>

<?php if($default['de_type3_list_use']) { ?>
<!-- 최신상품 시작 { -->
<section class="sct_wrap">
    <header>
        <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=3">최신상품</a></h2>
        <p class="sct_wrap_hdesc"><?php echo $config['cf_title']; ?> 최신상품 모음</p>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(3);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
</section>
<!-- } 최신상품 끝 -->
<?php } ?>

<?php if($default['de_type4_list_use']) { ?>
<!-- 인기상품 시작 { -->
<section class="sct_wrap" style="display:none">
    <header>
        <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=4">인기상품</a></h2>
        <p class="sct_wrap_hdesc"><?php echo $config['cf_title']; ?> 인기상품 모음</p>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(4);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
</section>
<!-- } 인기상품 끝 -->
<?php } ?>

<?php if($default['de_type5_list_use']) { ?>
<!-- 할인상품 시작 { -->
<section class="sct_wrap" style="display:none">
    <header>
        <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5">할인상품</a></h2>
        <p class="sct_wrap_hdesc"><?php echo $config['cf_title']; ?> 할인상품 모음</p>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(5);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
</section>
<!-- } 할인상품 끝 -->
<?php } ?>
</div>

<!-- 커뮤니티 최신글 시작 { -->
<section id="sidx_lat" style="display:none">
    <h2>커뮤니티 최신글</h2>
    <?php echo latest('theme/shop_basic', 'notice', 5, 30); ?>
    <?php echo latest('theme/shop_basic', 'free', 5, 25); ?>
    <?php echo latest('theme/shop_basic', 'qa', 5, 20); ?>
</section>
<!-- } 커뮤니티 최신글 끝 -->

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
?>