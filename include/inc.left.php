<aside>
<div class="left_container">
	<div class="sub_left_nav_wrap">
		<?php if ($co_id == 'about01' OR $co_id == 'about02' OR $co_id == 'about02_01' OR $co_id == 'about02_02' OR $co_id == 'about02_03' OR $co_id == 'about03'  OR $co_id == 'about04' OR $co_id == 'about05' OR $co_id == 'about06') {?>
			<h2 class="left_title">ABOUT</h2>
			<ul id="Sub_nav">
				<li class='<?php echo $co_id == 'about01' ? 'on' :''?>'><a href="/bbs/content.php?co_id=about01">About</a></li>
				<li class='<?php echo $co_id == 'about05' ? 'on' :''?>'><a href="/bbs/content.php?co_id=about05">About Pishon</a></li>
				<li class='<?php echo $co_id == 'about02' ? 'on' :''?>'><a href="/bbs/content.php?co_id=about02">Business</a></li>
				<li class='<?php echo $co_id == 'about04' ? 'on' :''?>'><a href="/bbs/content.php?co_id=about04">History</a></li>				
				<li class='<?php echo $co_id == 'about06' ? 'on' :''?>'><a href="/bbs/content.php?co_id=about06">Organization</a></li>
				<li class='<?php echo $co_id == 'about03' ? 'on' :''?>'><a href="/bbs/content.php?co_id=about03">Location</a></li>
			</ul>
		<?php } else if ($co_id == 'join01') {?>
			<h2 class="left_title">회원가입안내</h2>
			<ul id="Sub_nav">
				<li class='<?php echo $co_id == 'join01' ? 'on' :''?>'><a href="/bbs/content.php?co_id=service01">회원가입안내</a></li>
			</ul>
		<?php } else if ($bo_table == 'estimate') {?>
			<h2 class="left_title">견적안내</h2>
			<ul id="Sub_nav">
				<li class="on"><a href="/bbs/board.php?bo_table=estimate">견적안내</a></li>
			</ul>
		<?php } else if ($fm_id == '1' OR $bo_table == 'media' OR $bo_table == 'notice' OR $bo_table == 'release' OR $bo_table == 'talk') {?>
			<h2 class="left_title">PR CENTER</h2>
			<ul id="Sub_nav">
				<li class="<?php echo $bo_table == 'notice' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=notice">Notice</a></li>
				<li class='<?php echo $bo_table == 'media' ? 'on' :''?>'><a href="/bbs/board.php?bo_table=media">PSS Media</a></li>
				<li class="<?php echo $bo_table == 'release' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=release">New Release</a></li>
                <li class="<?php echo $bo_table == 'talk' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=talk">PSS Fans</a></li>
			</ul>
		<?php } else if ($bo_table == 'artist' OR $sca == 'Singer' OR $sca == 'DJ' OR $sca == 'Actor' OR $sca == 'Papper' OR $sca == 'Producer') {?>
			<h2 class="left_title">ARTIST</h2>
			<ul id="Sub_nav">
				<li class="<?php echo $sca == 'Dj' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=artist&sca=DJ">DJ</a></li>
				<li class='<?php echo $sca == 'Singer' ? 'on' :''?>'><a href="/bbs/board.php?bo_table=artist&sca=Singer">Singer</a></li>
                <li class="<?php echo $sca == 'Actor' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=artist&sca=Actor">Actor</a></li>
				<li class="<?php echo $sca == 'Producer' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=artist&sca=Producer">Producer</a></li>
				<li class="<?php echo $sca == 'Rapper' ? 'on' :''?>"><a href="/bbs/board.php?bo_table=artist&sca=Rapper">Rapper</a></li>
			</ul>
		<?php } else if ($co_id == 'storage01' OR $co_id == 'storage02' OR $bo_table == 'AuditionNotice') {?>
			<h2 class="left_title">Audition</h2>
			<ul id="Sub_nav">
				<li class="<?php echo $bo_table == 'AuditionNotice' ? 'on' :''?>"><a href="/bbs/write.php?bo_table=AuditionNotice">Audition Notice</a></li>
				<li class="<?php echo $bo_table == 'INFORMATION' ? 'on' :''?>"><a href="#">INFORMATION</a></li>
				<li class="<?php echo $bo_table == 'ONLINE' ? 'on' :''?>"><a href="#">ONLINE AUDITION</a></li>
				<li class="<?php echo $bo_table == 'FAQ' ? 'on' :''?>"><a href="#">FAQ</a></li>
				<li class="<?php echo $bo_table == 'GLOBAL' ? 'on' :''?>"><a href="#">GLOBAL AUDITION</a></li>
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