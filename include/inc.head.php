<?php include_once G5_PATH.'/head.php';?>
<?php
//strpos($_SERVER['PHP_SELF'], 'schedule') !== FALSE OR strpos($co_id, 'KMICE01') !== FALSE
if ($co_id == 'industrial01' OR $bo_table == 'data' OR $bo_table == 'case')
{
	$kLeft = 2;
	if ($bo_table == 'data') $kTitle1 = '관련자료';
	else if ($bo_table == 'case') $kTitle1 = '우수사례';
}
else if ($bo_table == 'business2' OR $bo_table == 'business03_01' OR $bo_table == 'business02_03' OR $bo_table == 'consultant' OR $bo_table == 'request1')
{
	if ($bo_table == 'business2') $kTitle1 = '사업자 인증업체';
	else if ($bo_table == 'business03_01') $kTitle1 = '설명회 및 교육안내';
	else if ($bo_table == 'business02_03') $kTitle1 = '만족도 평가';
	else if ($bo_table == 'consultant') $kTitle1 = '코칭 위원 명단';
	else if ($bo_table == 'request1') $kTitle1 = '신청 및 접수';
	$kLeft = 3;
}
else if ($bo_table == 'board1' OR $bo_table == 'board2')
{
	$kLeft = 4;
	if ($bo_table == 'board1') $kTitle1 = '경기도 6차산업 기본 정보';
	else if ($bo_table == 'board2') $kTitle1 = '제조ㆍ가공시설 현황';
}
else if ($bo_table == 'notice' OR $bo_table == 'press' OR $bo_table == 'free' OR $bo_table == 'qna')
{
	$kLeft = 5;
	if ($bo_table == 'notice') $kTitle1 = '공지사항';
	else if ($bo_table == 'press') $kTitle1 = '보도자료';
	else if ($bo_table == 'free') $kTitle1 = '자유게시판';
	else if ($bo_table == 'qna') $kTitle1 = '묻고답하기';
}
else if (strpos($_SERVER['PHP_SELF'], 'search.php') !== FALSE)
{
	$kTitle1 = '통합검색';
	$kLeft = 6;
}
else if ($bo_table == 'kyungki' OR $bo_table == 'business3')
{
	$kTitle1 = '제조 가공 시설 현황';
	$kLeft = 7;
}
else if ($bo_table == 'business4')
{
	$kTitle1 = '현장 코칭 결과';
	$kLeft = 7;
}
else if (strpos($_SERVER['PHP_SELF'], 'map.php') > -1)
{
	$kTitle1 = '찾아오시는길';
	$kLeft = 1;
}
else
{
}
?>
<!-- S : sub_visual -->
<!-- E : sub_visual -->
<hr>
<div class="sub_wrap">
	<!-- S : contents -->
	<div class="sub_container_wrap">
		<?php include G5_PATH . '/include/inc.left.php'?>
		<hr>
		<section>
			<!-- S : 서브바디 콘텐츠 -->
			<div id="Content_sub" class="sub_body_contents box_radius">
				<?php if ($bo_table != '' OR $fm_id != '' OR strpos($_SERVER['PHP_SELF'], 'map.php') > -1 OR strpos($_SERVER['PHP_SELF'], 'bbs/s') > -1) {?>
				<div class="sub_body_title">
					<h3><?php echo $kTitle1?></h3><span class="page_location">홈 &gt; <strong><?php echo $kTitle1?></strong></span>
                    
				</div>
				<?php }?>
