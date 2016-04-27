<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>
<div class="submenu-items t-left grid_40">

        <?php
        // 1단계 분류 판매 가능한 것만
        $hsql = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where length(ca_id) = '2' and ca_use = '1' order by ca_id ";
        $hresult = sql_query($hsql);
        $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
        for ($i=0; $row=sql_fetch_array($hresult); $i++)
        {
            $gnb_zindex -= 1; // html 구조에서 앞선 gnb_1dli 에 더 높은 z-index 값 부여
            // 2단계 분류 판매 가능한 것만
            $sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '{$row['ca_id']}' and ca_use = '1' order by ca_id ";
            $result2 = sql_query($sql2);
            $count = mysql_num_rows($result2);
            $first = $i == 0 ? ' alpha' : '';
            if ($row['ca_id'] == '30')
            {
                $row['ca_id'] = '3020';
            }
            else if ($row['ca_id'] != '70' && $row['ca_id'] != '80' && strlen($row['ca_id']) == 2)
            {
                $row['ca_id'] = $row['ca_id'];
            }
        ?>
    <div class="grid_9<?php echo $first?>">
        <div class="border-left-grey p-left-10" style="min-height:170px;">
            <span class="level-2"><a href="<?php echo G5_SHOP_URL.'/list.php?ca_id='.$row['ca_id']; ?>" class="menu-item std level-2 "><?php echo $row['ca_name']; ?></a></span>
            <?php
            for ($m=0; $row2=sql_fetch_array($result2); $m++)
            {
            //if ($j==0) echo '<ul>';
            ?>
            <span class="level-3"><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?php echo $row2['ca_id']; ?>" class="menu-item std level-3 "><?php echo $row2['ca_name']; ?></a></span>
            <?php }
            //if ($j>0) echo '</ul>';
            ?>
        </div>
    </div>
        <?php } ?>

</div>


