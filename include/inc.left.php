<aside>
<div class="left_container">
	<div class="sub_left_nav_wrap">
		<?php if ($co_id == 'about01' OR $co_id == 'about02' OR  $co_id == 'about03'  OR $co_id == 'about04' OR $bo_table == 'center_img' ) {?>
			<h2 class="left_title">M2GYM&amp;SPINNING</h2>
			<ul id="Sub_nav">
				<li class='<?php echo $co_id == 'about01' ? 'on' :''?>'><a href="/bbs/content.php?co_id=about01">CEO인사말</a></li>
				<li class='<?php echo $co_id == 'about02' ? 'on' :''?>'><a href="/bbs/content.php?co_id=about02">협회소개</a></li>
				<li class='<?php echo $co_id == 'about04' ? 'on' :''?>'><a href="/bbs/content.php?co_id=about04">찾아오시는길</a></li>
                <li class="<?php echo $bo_table == 'center_img' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=center_img">센터이미지</a></li>				

			</ul>
		<?php } else if ($co_id == 'join01') {?>
			<h2 class="left_title">회원가입안내</h2>
			<ul id="Sub_nav">
				<li class='<?php echo $co_id == 'join01' ? 'on' :''?>'><a href="/bbs/content.php?co_id=service01">회원가입안내</a></li>
			</ul>
		<?php } else if ($fm_id == '1' OR $bo_table == 'media' OR $bo_table == 'notice' OR $bo_table == 'event' OR $bo_table == 'qna') {?>
			<h2 class="left_title">EVENT&amp;NEWS</h2>
			<ul id="Sub_nav">
				<li class="<?php echo $bo_table == 'notice' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=notice">공지사항</a></li>
                <li class="<?php echo $bo_table == 'event' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=event">이벤트</a></li>
                <li class="<?php echo $bo_table == 'qna' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=qna">Q&amp;A</a></li>

			</ul>
		<?php } else if ($fm_id == '1' OR $bo_table == 'councelling') {?>
			<h2 class="left_title">COUNCELLING</h2>
			<ul id="Sub_nav">
				<li class="<?php echo $bo_table == 'councelling' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=councelling">문자상담요청</a></li>
			</ul>

        <?php } else if ($co_id == 'program') {?>
			<h2 class="left_title">PROGRAM</h2>
			<ul id="Sub_nav">
				<li class="<?php echo $co_id == 'program' ? 'on' :''?>"><a href="/bbs/content.php?co_id=program">스피닝·GX소개</a></li>
				
			</ul>    
            
        <?php } else if ($co_id == 'schedule_01') {?>
			<h2 class="left_title">SCHEDULE</h2>
			<ul id="Sub_nav">
				<li class="<?php echo $co_id == 'schedule_01' ? 'on' :''?>"><a href="/bbs/content.php?co_id=schedule_01">혁신점</a></li>
				
			</ul>   
                       
		<?php } else if (strpos($_SERVER['PHP_SELF'], 'map.php') > -1) {?>
			<h2 class="left_title">오시는길</h2>
			<ul id="Sub_nav">
				<li class="on"><a href="/map.php">오시는길</a></li>
			</ul>
		<?php }?>
	</div>
</div>
</aside>