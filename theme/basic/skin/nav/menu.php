<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<link rel="stylesheet" href="<?php echo G5_THEME_URL?>/skin/nav/style.css" type="text/css" />
<script type="text/javascript" src="<?php echo G5_THEME_URL?>/skin/nav/jquery-1.11.1.min.js"></script>




<script> 
 $(function() { 
    $(".menuBox").mouseenter(function() { //마우스를 올려놓았을때의 이벤트
	//$(".menuBox").click(function() {  //마우스를 클릭했을때의 이벤트
       $(".submenuBox") 
       .animate({'height':'300px'}, 500, function() { 
       $(".menuBox") 
       .unbind('mouseleave') 
       .mouseleave(function() { 
          $(".submenuBox").animate({'height':'0px'}, 500) 
       }) 
    }) 
 }) 
 }) 
 </script> 

    <div class="menuBox" >
            
            <?php
            
            
            $sql = " select *
                        from {$g5['menu_table']}
                        where me_use = '1'
                          and length(me_code) = '2'
                        order by me_order, me_id ";
            $result = sql_query($sql, false);
            //$gnb_zindex = 999; // gnb_1dli z-index 값 설정용

            for ($i=0; $row=sql_fetch_array($result); $i++) {
				// link주소에 파라미터가 있는 경우
				if(strstr($row['me_link'], ".php?")) 		
					$qstr2 = "&me_code=".$row['me_code'];
				// link주소에 파라미터가 없는 경우
				else
					$qstr2 = "?me_code=".$row['me_code'];
            ?>
            <ul class="menu">
                <li>
                    <!--<a href="<?php //echo $row['me_link']; ?><?php //echo $qstr2; ?>" target="_<?php //echo $row['me_target']; ?>" class="nav_1da"><?php //echo $row['me_name'] ?></a>-->
                    <?php echo $row['me_name'] ?>
                </li>
            </ul>
            
            
            <?php } ?>
            
            
    
    
    
    
    
    
            
            <div class="submenuBox"> 
            
            <?php
            $sql = " select *
                        from {$g5['menu_table']}
                        where me_use = '1'
                          and length(me_code) = '2'
                        order by me_order, me_id ";
            $result = sql_query($sql, false);
            for ($i=0; $row=sql_fetch_array($result); $i++) {
			?>
            
			
			
			
            
				<?php
                $sql2 = " select *
                            from {$g5['menu_table']}
                            where me_use = '1'
                              and length(me_code) = '4'
                              and substring(me_code, 1, 2) = '{$row['me_code']}'
                            order by me_order, me_id ";
                $result2 = sql_query($sql2);

                for ($k=0; $row2=sql_fetch_array($result2); $k++) {
					if(strstr($row2['me_link'], ".php?")) 		
						$qstr2 = "&me_code=".$row2['me_code'];
					else
						$qstr2 = "?me_code=".$row2['me_code'];

                    if($k == 0)
                        echo '<ul  class="submenu">'.PHP_EOL;
                ?>
                    <li><a href="<?php echo $row2['me_link']; ?><?php echo $qstr2; ?>" target="_<?php echo $row2['me_target']; ?>" class="nav_2da"><?php echo $row2['me_name'] ?></a></li>
                <?php
                }

                if($k > 0)
                    echo '</ul>'.PHP_EOL;
                ?>
            
            
            
            
            <?php } ?>
             </div>   
            
            
            
            
            
            
            
            
            
    </div><!--//menuBox-->