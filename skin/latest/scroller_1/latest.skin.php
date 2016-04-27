<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$board['bo_gallery_width'] = "100";
$board['bo_gallery_height'] = "100";
?>
<link href="<?php echo $latest_skin_url?>/css/amazon_scroller.css" rel="stylesheet" type="text/css"></link>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $latest_skin_url?>/js/amazon_scroller.js"></script>
<script language="javascript" type="text/javascript">
$(function() {	
	$("#amazon_scroller_1").amazon_scroller({
		scroller_title_show: 'disable',
		scroller_time_interval: '3000',
		scroller_window_background_color: "none",
		scroller_window_padding: '10',
		scroller_border_size: '0',
		scroller_border_color: '#CCC',
		scroller_images_width: "<?=$board['bo_gallery_width']?>",
		scroller_images_height: "<?=$board['bo_gallery_height']?>",
		scroller_title_size: '12',
		scroller_title_color: 'black',
		scroller_show_count: '6',
		directory: 'images'
	});
});
</script>
<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
    
	<div class="lt">
	    <div class="lt_more"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><span class="sound_only"><?php echo $bo_subject ?></span></a></div>
	<div id="amazon_scroller_1" class="amazon_scroller">
		<div class="amazon_scroller_mask">
			<ul>
			<?php for ($i=0; $i<count($list); $i++) {
			$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);?>
					<li><a href="<?php echo $list[$i]['href']?>" title="<?echo $list[$i]['subject']?>"><img src="<?php echo $thumb['src']?>" /></a></li>
					
			 <?} ?>
			</ul>
		</div>
		<?if (count($list) != 0) {?>
		<ul class="amazon_scroller_nav">
			<li></li>
			<li></li>
		</ul>
		<?}?>
		<?php if (count($list) == 0) { //게시물이 없을 때  ?>
		<div>게시물이 없습니다.</div>
		<?php }  ?>
		
	</div>
    </div>

<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->