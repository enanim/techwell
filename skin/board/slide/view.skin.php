<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/pgwslideshow.min.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/pgwslideshow_light.min.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<article id="bo_v" style="width:<?php echo $width; ?>">
   
    <?php
    if ($view['file']['count']) {
        $cnt = 0;
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
     ?>


    <?php
    if (implode('', $view['link'])) {
     ?>
     <!-- 관련링크 시작 { -->
    <section id="bo_v_link">
        <h2>관련링크</h2>
        <ul>
        <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
         ?>
            <li>
                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    <img src="<?php echo $board_skin_url ?>/img/icon_link.gif" alt="관련링크">
                    <strong><?php echo $link ?></strong>
                </a>
                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 관련링크 끝 -->
    <?php } ?>

    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
         ?>

        <ul class="bo_v_com">
            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01">수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_admin" onclick="board_move(this.href); return false;">복사</a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_admin" onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01">검색</a></li><?php } ?>
            <?php if ($is_admin) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01">목록</a></li><?php } ?>
            <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn_b01">답변</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->

    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>
        
        <!-- ejung 파일출력 시작 -->
		<div><img src="/theme/basic/img/sub/sub_contents_visual.jpg"></div>
        <div>
			<ul class="pgwSlideshow">
		        <?php
		          for ($i=0; $i<=count($view['file']); $i++) {
		          	if (isset($view['file'][$i]['file'])) {
		          	if($i > 0 && ($i % $board['bo_gallery_cols'] == 0))
		                $style = 'clear:both;';
		            else
		                $style = '';
		            
		            if ($i == 0) $k = 0;
		            $k += 1;
		            if ($k % $board['bo_gallery_cols'] == 0) $style .= "margin:0 !important;";
		         ?>
		        <li>
		                    <?php
		                        $img_content = '<img src="/data/file/'.$bo_table.'/'.$view['file'][$i]['file'].'" >';
		                        echo $img_content;
		                     ?>
		        </li>
		        <?php 
		          	} 
	          	}
		          	?>
		
		    </ul>
		</div>
		<!-- ejung 파일출력 끝 -->
        

        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php//echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>

       
    </section>

    <?php
    include_once(G5_SNS_PATH."/view.sns.skin.php");
    ?>

    

    <!-- 링크 버튼 시작 { -->
    <div id="bo_v_bot">
        <?php echo $link_buttons ?>
    </div>
    <!-- } 링크 버튼 끝 -->

</article>
<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>

<script src="<?php echo $board_skin_url?>/pgwslideshow.min.js"></script>
<script>
var pgwSlideshow = $('.pgwSlideshow').pgwSlideshow();

function reloadSlideshow() {
    var newConfig = {};

    var style = $('input[name="style"]:checked').val();
    if (style == 'light') { newConfig.mainClassName = 'pgwSlideshowLight'; }

    var listPosition = $('input[name="listPosition"]:checked').val();
    if (listPosition == 'none') { newConfig.displayList = false; } else { newConfig.listPosition = listPosition; }

    newConfig.transitionEffect = $('input[name="transitionEffect"]:checked').val();

    if ($('#displayList:checked').val() == 'true') {
                newConfig.displayList = true;
        } else {
        newConfig.displayList = false;
    }

    if ($('#displayControls:checked').val() == 'true') {
        newConfig.displayControls = true;
    } else {
        newConfig.displayControls = false;
    }

    if ($('#maxHeight:checked').val() == 'true') {
                newConfig.maxHeight = 450;
        }

    pgwSlideshow.reload(newConfig);
}

$('.slideshowConfig input').bind('change', function() {
    reloadSlideshow()
});

</script>
<!-- } 게시글 읽기 끝 -->