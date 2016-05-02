<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
//if (!$is_member) {
//     goto_url(G5_URL.'/hosting_index.html');
//}
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<header>

<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="/theme/basic/img/logo.png" alt="PISHON" /></a>
        </div>

        <fieldset id="hd_sch">
            <legend>사이트 내 전체검색</legend>
            <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
            <input type="hidden" name="sfl" value="wr_subject||wr_content">
            <input type="hidden" name="sop" value="and">
            <label for="sch_stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="stx" id="sch_stx" maxlength="20">
            <input type="submit" id="sch_submit" value="검색">
            </form>

            <script>
            function fsearchbox_submit(f)
            {
                if (f.stx.value.length < 2) {
                    alert("검색어는 두글자 이상 입력하십시오.");
                    f.stx.select();
                    f.stx.focus();
                    return false;
                }

                // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                var cnt = 0;
                for (var i=0; i<f.stx.value.length; i++) {
                    if (f.stx.value.charAt(i) == ' ')
                        cnt++;
                }

                if (cnt > 1) {
                    alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                    f.stx.select();
                    f.stx.focus();
                    return false;
                }

                return true;
            }
            </script>
        </fieldset>

        <ul id="tnb" style="z-index:1000">
            <?php if ($is_member) {  ?>
            <?php if ($is_admin) {  ?>
            <li><a href="<?php echo G5_ADMIN_URL ?>"><b>admin</b></a></li>
            <?php }  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">edit</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">logout</a></li>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">join</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php"><b>login</b></a></li>
            <?php }  ?>
            <!--li><a href="<?php echo G5_BBS_URL ?>/faq.php">FAQ</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/qalist.php">1:1문의</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/current_connect.php">접속자 <?php echo connect('theme/basic'); // 현재 접속자수, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?></a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/new.php">새글</a></li-->
            <?php if (defined('G5_USE_SHOP') && G5_USE_SHOP) { ?>
            <li><a href="<?php echo G5_SHOP_URL ?>/">mall</a></li>
            <?php } ?>
        </ul>
		
        <!--
		<div class="sns_wrap"><a href="http://www.facebook.com/pishonent" target="_blank"><img src="/theme/basic/img/top_sns01.png" /></a><a href="https://www.youtube.com/channel/UC_PahAlEEHLf8kKKO6i13jA" target="_blank"><img src="/theme/basic/img/top_sns02.png" /></a><a href="https://twitter.com/PishonSound" target="_blank"><img src="/theme/basic/img/top_sns03.png" /></a>
		</div>
        -->
        
        <menu id="menu_container">
            <div id="menu-wrapper">
                <div class="container" style="margin:0 auto;">
                    <ul id="menu-ul">
                        <?php
                        $sql = " select *
                                    from {$g5['menu_table']}
                                    where me_use = '1'
                                      and length(me_code) = '2'
                                    order by me_order, me_id ";
                        $result = sql_query($sql, false);
                        $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
            
                        for ($i=0,$j=1; $row=sql_fetch_array($result); $i++,$j++) {
                        ?>
                        <li class="menu-item openable width_menu" id="top_menu_0<?php echo $j?>">
                            <span class="level-1">
                            <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="title"><?php echo $row['me_name'] ?></a>
                            </span>
                        </li>
                        <?php
                        }
            
                        if ($i == 0) {  ?>
                            <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div id="submenu-wrapper" class="hidden" style="display: none;">
                <div class="container kwidth" style="margin:0 auto;">
                <?php
                $sql = " select *
                            from {$g5['menu_table']}
                            where me_use = '1'
                              and length(me_code) = '2'
                            order by me_order, me_id ";
                $result = sql_query($sql, false);
                $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
    
                for ($i=0,$j=1; $row=sql_fetch_array($result); $i++,$j++) {
                    
                    $alpha = ($i*125);
                ?>
                
                    
                        <?php
                        if(strpos($row['me_link'],'/shop')!==false){
                            
                        ?>
                        <div class="submenu hidden" id="submenu-top_menu_0<?php echo $j?>">
                            <?php include_once(G5_THEME_PATH.'/skin/shop/basic/boxcategory2.skin.php'); // 상품분류 ?>
                        </div>
                        <?php
                        }
                        else{
                        ?>
                        <div class="submenu hidden" id="submenu-top_menu_0<?php echo $j?>">
                        	<!-- <div class="grid_9 alpha" style="padding-left:<<!--?php echo $alpha?>px">--> 
                            <div class="grid_9 alpha">
                                <div class="border-left-grey p-left-20">
                                <?php
                                
                                $sql2 = " select *
                                            from {$g5['menu_table']}
                                            where me_use = '1'
                                              and length(me_code) = '4'
                                              and substring(me_code, 1, 2) = '{$row['me_code']}'
                                            order by me_order, me_id ";
                                            //echo $sql2;
                                $result2 = sql_query($sql2);
                
                                for ($k=0,$l=1; $row2=sql_fetch_array($result2); $k++,$l++) {
                                ?>
                                    <span class="level-2"><a href="<?php echo $row2['me_link']; ?>"  class="menu-item std level-2 "><?php echo $row2['me_name'] ?></a></span>
                                 <?php
                                 }
                                ?>
                                </div>
                            </div>
                            </div>
                        <?php
                        }//if(strpos('/shop',$row['me_link']))
                        ?>
                    
                
                <?php
                }
                ?>              
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="clear">
            </div>
        </menu>
        <script type="text/javascript">
            $(document).ready(function(g) {
                var j;
                var l;
                $("#menu-ul .openable").hover(function() {
                    clearTimeout(j);
                    $("#submenu-wrapper .submenu").hide();
                    $("#submenu-" + $(this).attr("id")).show();
                    m()
                }, function() {
                    clearTimeout(l);
                    f()
                });
                $("#submenu-wrapper").hover(function() {
                    clearTimeout(j)
                }, function() {
                    clearTimeout(l);
                    f()
                });
                function m() {
                    l = setTimeout(function() {
                        $("#submenu-wrapper").stop(true, true).slideDown(750)
                    }, 200)
                }
        
                function f() {
                    j = setTimeout(function() {
                        $("#submenu-wrapper").stop(true, true).slideUp(750)
                    }, 200)
                }
            });
        </script>
        
    </div>

    
<!-- } 상단 끝 -->

</header>
<!-- E : header -->
<hr>
<div id="page_wrap">
    
<!-- 콘텐츠 시작 -->
<?php if ($co_id == 'about01' OR $co_id == 'about02' OR $co_id == 'about03' OR $co_id == 'about04' OR $co_id == 'about05' OR $co_id == 'about06' OR $co_id == 'facilities' OR $co_id == 'product' OR $bo_table == 'notice' OR $bo_table == 'facilities' OR $bo_table == 'facilities' OR $bo_table == 'notice' OR $bo_table == 'onlineqna' OR $kLeft == 1) {?>
        <div class="visual_on <?php echo $co_id == 'about01' ? 'visual_on_01' :''?>"></div>
		<div class="visual_on <?php echo $co_id == 'about02' ? 'visual_on_01' :''?>"></div>
		<div class="visual_on <?php echo $co_id == 'about03' ? 'visual_on_01' :''?>"></div>
		<div class="visual_on <?php echo $co_id == 'about04' ? 'visual_on_01' :''?>"></div>
		<div class="visual_on <?php echo $co_id == 'about05' ? 'visual_on_01' :''?>"></div>
		<div class="visual_on <?php echo $co_id == 'about06' ? 'visual_on_01' :''?>"></div>
		<div class="visual_on <?php echo $co_id == 'product' ? 'visual_on_02' :''?>"></div>
		<div class="visual_on <?php echo $bo_table == 'facilities' ? 'visual_on_05' :''?>"></div>
		<div class="visual_on <?php echo $bo_table == 'notice' ? 'visual_on_03' :''?>"></div>
		<div class="visual_on <?php echo $bo_table == 'onlineqna' ? 'visual_on_04' :''?>"></div>
        
<?php }?>
<div id="<?php echo defined("_INDEX_") ? 'main_wrapper' : 'wrapper'?>">

    <div id="<?php echo defined("_INDEX_") ? 'main_aside' : 'aside'?>">
        <?php include G5_PATH . '/include/inc.left.php'?>
    </div>
    <div id="<?php echo defined("_INDEX_") ? 'main_container' : 'container'?>">
        <?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><div id="container_title"><?php echo $g5['title'] ?></div><?php } ?>
