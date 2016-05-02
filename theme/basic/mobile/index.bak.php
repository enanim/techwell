<div id="wrapper">
    <div id="visual">
    	<img src="/theme/basic/img/mobile/m_main_visual01.png" />
        
    </div>
    <div id="container">
    	<a href="/bbs/content.php?co_id=product"><img src="/theme/basic/img/mobile/mobile_contents01.png" /></a>
        <a href="/bbs/board.php?bo_table=facilities"><img src="/theme/basic/img/mobile/mobile_contents02.png" /></a>
        <a href="/bbs/content.php?co_id=about01"><img src="/theme/basic/img/mobile/mobile_contents03.png" /></a>
        <?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><div id="container_title"><?php echo $g5['title'] ?></div><?php } ?>
        

<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<!-- 메인화면 최신글 시작 -->
<?php
//  최신글
$sql = " select bo_table
            from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
            where a.bo_device <> 'pc' ";
if(!$is_admin)
    $sql .= " and a.bo_use_cert = '' ";
$sql .= " order by b.gr_order, a.bo_order ";
$result = sql_query($sql);
for ($i=0; $row=sql_fetch_array($result); $i++) {
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 스킨은 입력하지 않을 경우 관리자 > 환경설정의 최신글 스킨경로를 기본 스킨으로 합니다.

    // 사용방법
    // latest(스킨, 게시판아이디, 출력라인, 글자수);
    echo latest('theme/basic', $row['bo_table'], 5, 25);
}
?>
<!-- 메인화면 최신글 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>